document.addEventListener('DOMContentLoaded', function(){
    drawChart();
  });
  
  function drawChart() {
    const svg = d3.select("#timelineChart")
                  .append("svg")
                  .attr('id', 'Chart')
                  .attr("width", '100%')
                  .attr("height", 500);
    
    d3.json("../data/timeline.json").then(function(data) {
      // Append the timeline base line
      svg.append('line')
        .attr('class', 'timeline-base')
        .attr("x1", 0)
        .attr("y1", 100)
        .attr("x2", '90%')
        .attr("y2", 100);
  
      function getLineVal(val) {
        if (val === 'max') {
          let el = document.getElementById('Chart');
          return el.getBoundingClientRect().width;
        } else {
          return 0;
        }
      }
  
      function convertToTimeStamp(date) {
        if (date === "Ongoing") return Date.now(); // Handle ongoing event
        if (typeof date !== 'string') return null; // Handle non-string input
        let parts = date.match(/(\d{4})-(\d{2})/);
        if (!parts) return null; // Handle cases where the date format is incorrect
        return new Date(parts[1] + '-' + parts[2] + '-01').getTime();
      }
      
  
      let scaleLine = d3.scaleLinear()
        .domain([convertToTimeStamp("1521-03"), Date.now()])
        .range([getLineVal('min') + 20, getLineVal('max') - 100]);
  
      let scaleCircle = d3.scaleLinear()
        .domain([moment.duration(3, 'd').asMilliseconds(), moment.duration(10, 'y').asMilliseconds()])
        .range([10, 200]);
  
      let allGroups = svg.selectAll('g').data(data);
      let group = allGroups.enter().append('g')
        .attr('id', function(data) { return 'group-' + data.id });
  
      group.append('circle')
        .attr('cx', function(data) { return scaleLine(convertToTimeStamp(data.startDate)); })
        .attr('cy', 100)
        .attr('r', function(data) {
          let duration = convertToTimeStamp(data.endDate) - convertToTimeStamp(data.startDate);
          return duration === 0 ? 10 : scaleCircle(duration); // Set a minimum radius
        })
        .attr('fill-opacity', 0.5)
        .attr('class', function(data) { return 'circle-category circle-' + data.category?.toLowerCase() || ''; })
        .attr('id', function(data) { return 'circle-' + data.id; })
        .on('mouseover', function(event, data) {
          d3.select(this).attr('r', scaleCircle(convertToTimeStamp(data.endDate) - convertToTimeStamp(data.startDate)) + 20);
        })
        .on('mouseout', function(event, data) {
          d3.select(this).attr('r', function(d) {
            let duration = convertToTimeStamp(d.endDate) - convertToTimeStamp(d.startDate);
            return duration === 0 ? 10 : scaleCircle(duration);
          });
        })
        .on('click', function(event, data) {
          let details = d3.select('#details-' + data.id);
          details.style('display', 'block').style('opacity', 1);
        });
  
      group.append('text')
        .style('opacity', 0)
        .text(function(data) { return data.name; })
        .attr('x', function(data) {
          let elementWidth = this.getBoundingClientRect().width;
          return scaleLine(convertToTimeStamp(data.startDate)) + elementWidth >= getLineVal('max') 
            ? scaleLine(convertToTimeStamp(data.startDate)) - elementWidth
            : scaleLine(convertToTimeStamp(data.startDate));
        })
        .attr('y', 150)
        .attr('class', 'text-position');
  
      group.append('text')
        .text(function(data) {
          return data.startDate.length > 7 ? data.startDate.slice(0, 7) : data.startDate;
        })
        .attr('x', function(data) {
          let elementWidth = this.getBoundingClientRect().width;
          return scaleLine(convertToTimeStamp(data.startDate)) - elementWidth;
        })
        .attr('y', 130)
        .attr('class', 'text-date')
        .style('opacity', 0);
      
      // Append details div
      data.forEach(d => {
        let details = d3.select('#timelineChart')
          .append('div')
          .classed('details', true)
          .attr('id', 'details-' + d.id);
        details.append('i').classed('material-icons close-icon', true).text('close');
        details.append('div').classed('title', true).append('span').classed('date text-date date-title', true).text(d.startDate + '-' + d.endDate);
        details.append('div').classed('place-name text-place hovered', true).text(d.placeName);
        details.append('div').attr('class', 'text-desc').text(d.description || '');
        details.style('opacity', 0);
      });
  
      // Close details div on click
      d3.selectAll('.close-icon').on('click', function() {
        d3.select(this.parentNode).style('opacity', 0);
        d3.selectAll('.details').style('display', 'block');
      });
    });
  }
  