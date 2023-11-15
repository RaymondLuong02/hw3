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


<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<?php
include "view-footer.php";
?>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  ['Italy',55],
  ['France',49],
  ['Spain',44],
  ['USA',24],
  ['Argentina',15]
]);

// Set Options
const options = {
  title:'World Wide Wine Production'
};

// Draw
const chart = new google.visualization.BarChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>
