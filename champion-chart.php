<?php
$pageTitle = "Charts";
include "view-header.php";
?>
<h1>Charts</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
include "view-footer.php";
?>
<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: [10, 20, 30],
        backgroundColor: [
          'blue',
          'red',
          'yellow'
        ]
      }],
      labels: [
        'Blue',
        'Red',
        'Yellow'
      ]
    },
  });
</script>



<div id="myPlot" style="width:100%;max-width:700px"></div>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<?php
include "view-footer.php";
?>
<script>
const xArray = [50,60,70,80,90,100,110,120,130,140,150];
const yArray = [7,8,8,9,9,9,10,11,14,14,15];

const data = [{
  x:xArray,
  y:yArray,
  mode:"markers"
}];

const layout = {
  xaxis: {range: [40, 160], title: "Square Meters"},
  yaxis: {range: [5, 16], title: "Price in Millions"},  
  title: "House Prices vs. Size"
};
Plotly.newPlot("myPlot", data, layout);
</script>



<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

<?php
include "view-footer.php";
?>
<script>
window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title: {
      text: "Number of iPhones Sold in Different Quarters"
    },
    axisX: {
      minimum: new Date(2015, 01, 25),
      maximum: new Date(2017, 02, 15),
      valueFormatString: "MMM YY"
    },
    axisY: {
      title: "Number of Sales",
      titleFontColor: "#4F81BC",
      includeZero: true,
      suffix: "mn"
    },
    data: [{
      indexLabelFontColor: "darkSlateGray",
      name: "views",
      type: "area",
      yValueFormatString: "#,##0.0mn",
      dataPoints: [
        { x: new Date(2015, 02, 1), y: 74.4, label: "Q1-2015" },
        { x: new Date(2015, 05, 1), y: 61.1, label: "Q2-2015" },
        { x: new Date(2015, 08, 1), y: 47.0, label: "Q3-2015" },
        { x: new Date(2015, 11, 1), y: 48.0, label: "Q4-2015" },
        { x: new Date(2016, 02, 1), y: 74.8, label: "Q1-2016" },
        { x: new Date(2016, 05, 1), y: 51.1, label: "Q2-2016" },
        { x: new Date(2016, 08, 1), y: 40.4, label: "Q3-2016" },
        { x: new Date(2016, 11, 1), y: 45.5, label: "Q4-2016" },
        { x: new Date(2017, 02, 1), y: 78.3, label: "Q1-2017", indexLabel: "Highest", markerColor: "red" }
      ]
    }]
  });
  chart.render();
}
</script>


<div id="myPlotContainer" style="width:500px;height:500px;"></div>
<script src="https://d3js.org/d3.v4.js"></script>
<?php
include "view-footer.php";
?>
<script>
// Set Dimensions
const xSize = 500; 
const ySize = 500;
const margin = 40;
const xMax = xSize - margin*2;
const yMax = ySize - margin*2;

// Create Random Points
const numPoints = 100;
const data = [];
for (let i = 0; i < numPoints; i++) {
  data.push([Math.random() * xMax, Math.random() * yMax]);
}

// Append SVG Object to the Page
const svg = d3.select("#myPlot")
  .append("svg")
  .append("g")
  .attr("transform","translate(" + margin + "," + margin + ")");

// X Axis
const x = d3.scaleLinear()
  .domain([0, 500])
  .range([0, xMax]);

svg.append("g")
  .attr("transform", "translate(0," + yMax + ")")
  .call(d3.axisBottom(x));

// Y Axis
const y = d3.scaleLinear()
  .domain([0, 500])
  .range([ yMax, 0]);

svg.append("g")
  .call(d3.axisLeft(y));

// Dots
svg.append('g')
  .selectAll("dot")
  .data(data).enter()
  .append("circle")
  .attr("cx", function (d) { return d[0] } )
  .attr("cy", function (d) { return d[1] } )
  .attr("r", 3)
  .style("fill", "Red");
</script>
