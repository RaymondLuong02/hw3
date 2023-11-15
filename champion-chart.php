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


<div>
  <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>
</div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

<?php
include "view-footer.php";
?>
<script>
var chart = new CanvasJS.Chart("myChart3", { 
  animationEnabled: true,
  title: {
    text: "Daily Sleep Statistics of Age Group 12 - 20"
  },
  axisX: {
    valueFormatString: "DDD"
  },
  axisY: {
    title: "Sleep Time (in Hours)",
    includeZero: true
  },
  data: [{
    type: "boxAndWhisker",
    xValueFormatString: "DDDD",
    yValueFormatString: "#0.0 Hours",
    dataPoints: [
      { x: new Date(2017, 6, 3), y: [4, 6, 8, 9, 7] },
      { x: new Date(2017, 6, 4), y: [5, 6, 7, 8, 6.5] },
      { x: new Date(2017, 6, 5), y: [4, 5, 7, 8, 6.5] },
      { x: new Date(2017, 6, 6), y: [3, 5, 6, 9, 5.5] },
      { x: new Date(2017, 6, 7), y: [6, 8, 10, 11, 8.5] },
      { x: new Date(2017, 6, 8), y: [5, 7, 9, 12, 7.5] },
      { x: new Date(2017, 6, 9), y: [4, 6, 8, 9, 7] }
    ]
  }]
});
chart.render();
</script>

