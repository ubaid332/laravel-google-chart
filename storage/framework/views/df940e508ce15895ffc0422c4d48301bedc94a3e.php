<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      var visitor = <?php echo $visitor; ?>;
      console.log(visitor);
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable(visitor);
        var options = {
          title: 'Site Visitor Line Chart',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('linechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <h1>Laravel Google Chart Example - ItSolutionstuff.com</h1>
    <div id="linechart" style="width: 900px; height: 500px"></div>
  </body>
</html><?php /**PATH C:\Users\Dev\Documents\GitHub\laravel-google-chart\resources\views/google-line-chart.blade.php ENDPATH**/ ?>