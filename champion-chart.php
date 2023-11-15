<?php
$pageTitle = "Charts";
include "view-header.php";
?>
<h1>Charts</h1>
<div>
  <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
include "view-footer.php";
?>
<script>
  const ctx2 = document.getElementById('myChart2');

  new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5', 'Label 6', 'Label 7'],
      datasets: [{
        data: [10, 20, 30, 40, 50, 60, 70],
        backgroundColor: 'blue',
        barPercentage: 0.5,
        barThickness: 6,
        maxBarThickness: 8,
        minBarLength: 2,
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>


<div>
  <canvas id="myChart3" style="width:100%;max-width:700px"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
include "view-footer.php";
?>
<script>
  const ctx3 = document.getElementById('myChart3');

  new Chart(ctx3, {
    type: 'bubble',
    data: {
      datasets: [{
        label: 'Bubble Chart',
        data: [
          { x: 10, y: 20, r: 5 },
          { x: 15, y: 25, r: 8 },
          { x: 20, y: 30, r: 12 },
        ],
        backgroundColor: 'rgba(75, 192, 192, 0.6)', 
      }]
    },
  });
</script>


<div>
  <canvas id="myChart4" style="width:100%;max-width:700px"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
include "view-footer.php";
?>
<script>
  const ctx4 = document.getElementById('myChart4');

  new Chart(ctx4, {
    type: 'polarArea',
    data: {
      datasets: [{
        data: [10, 20, 30],
        backgroundColor: [
          'red',
          'yellow',
          'blue'
        ]
      }],
      labels: [
        'Red',
        'Yellow',
        'Blue'
      ]
    }
  });
</script>



<div>
  <canvas id="myChart5" style="width:100%;max-width:700px"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<?php
include "view-footer.php";
?>
<script>
const xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart5", {
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
  <canvas id="myChart6" style="width:100%;max-width:700px"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>

<?php
include "view-footer.php";
?>
<script>
var ctx6 = document.getElementById("myChart6");
var myChart = new Chart(ctx6, { 
  type: 'bar', 
  data: { 
    labels: ["CS", "IT" , "ECE" , "EE", "ME", "BE"], 
    datasets: [ 
      { 
        label: '# of students', 
        data: [105,124,78,91,62,56], 
        backgroundColor :['rgba(255, 99, 132, 0.2)', 
                'rgba(54, 162, 235, 0.2)', 
                'rgba(255, 206, 86, 0.2)', 
                'rgba(75, 192, 192, 0.2)', 
                'rgba(153, 102, 255, 0.2)', 
                'rgba(255, 159, 64, 0.2)' 
        ], 
        borderColor: [ 
          'rgba(255,99,132,1)', 
          'rgba(54, 162, 235, 1)', 
          'rgba(255, 206, 86, 1)', 
          'rgba(75, 192, 192, 1)', 
          'rgba(153, 102, 255, 1)', 
          'rgba(255, 159, 64, 1)' 
        ], 
        borderWidth : 1 
      } 
    ] 
  }, 
  options: { 
    scales: { 
      yAxes: [{ 
        ticks: { 
          beginAtZero:true 
        } 
      }] 
    } 
  }
});
</script>

