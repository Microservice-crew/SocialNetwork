@extends('layouts.dashboardAdmin')


@section('content')

<html>
  <head>
    <style>
      /* Center the chart container */
      .chart-container {
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        height: 100vh; /* 100% of the viewport height */
      }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages: ["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Count'],
          ['Problème Technique', <?= $technicalProblemCount ?>],
          ['Contenu Inapproprié', <?= $inappropriateContentCount ?>],
          ['Harcèlement', <?= $harassmentCount ?>],
        ]);

        var options = {
          title: 'Reclamation Types',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!-- Center the chart container using CSS -->
    <div class="chart-container">
      <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div>
  </body>
</html>

@endsection