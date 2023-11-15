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
  <canvas id="myChart2"></canvas>
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
  <canvas id="myChart3"></canvas>
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
          // Add more data points as needed
        ],
        backgroundColor: 'rgba(75, 192, 192, 0.6)', // Set bubble color
      }]
    },
  });
</script>


<div>
  <canvas id="myChart4"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
include "view-footer.php";
?>
<script>
  const ctx4 = document.getElementById('myChart4');

  new Chart(ctx4, {
    type: 'polarArea',
    data: 
    datasets: [{
        data: [10, 20, 30]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue'
    ]
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
