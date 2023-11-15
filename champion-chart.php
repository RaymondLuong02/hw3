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



<div>
  <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<?php
include "view-footer.php";
?>
<script>
const xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    },{
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    },{
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
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
