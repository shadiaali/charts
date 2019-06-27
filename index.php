<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FSU Summer 2019 Events Survey</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
<style>
a
{
	color: white;
	text-decoration: none;
	font-size:22px;
}
a:hover
{
	color: white;
	text-decoration: none;	
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<?php  
 $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
 $query = "SELECT a1, count(*) as number FROM rtp2k GROUP BY a1";  
 $result = mysqli_query($connect, $query);  
 ?> 
<script type="text/javascript">  
           //load charts for corechart package
           google.charts.load('current', {'packages':['corechart']});  
           //draw the chart for what social networks do you use most often aka SocNet when Charts is loaded
           google.charts.setOnLoadCallback(drawChartSocNet);  
           //Callback that draws the chart for SocNet
           function drawChartSocNet()  
           {  
               //Create the data table for SocNet
            var data = google.visualization.arrayToDataTable([
                  ['social', 'number'],

                  <?php
                  while($row = mysqli_fetch_array($result))
                  {
                       echo "['".$row["a1"]."', ".$row["number"]."],";
                  }
                  ?>
             ]);
             //Set options for SocNet
        var options = {
              title: 'Which social networks do you use most often?',
              //is3D:true,
              legend: { position: 'left', alignment: 'start' }

             };

        //Set legend text change variable
        var socialNetworks = {
          a: 'Facebook',
          b: 'Instagram',
          c: 'Snapchat',
          d: 'Twitter',
          e: 'I do not use any of the above regularly.'
        };

        //Create a dataview from the data table
        var view = new google.visualization.DataView(data);
        //use method setColumns to add a calc column for converstion
        view.setColumns([{
          calc: function (dt, row) {
            return socialNetworks[data.getValue(row, 0)];
          },
          label: 'social',
          type: 'string'
        }, 1]);

        //Use dataview to draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('SocNetChart'));
        chart.draw(view, options);

           }  
		   </script>  
		   
		   <?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('a', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawCharta);  
       function drawCharta()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediaa', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'Back page of the Interrobang',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('charta'));  
            chart.draw(data, options);  
       }  
	   </script>  
	   


	   
	   <?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('b', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartb);  
       function drawChartb()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediab', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'Digital signage',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartb'));  
            chart.draw(data, options);  
       }  
	   </script>  




<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('c', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartc);  
       function drawChartc()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediac', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'FSU Email newsletter',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartc'));  
            chart.draw(data, options);  
       }  
	   </script>  



<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('d', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartd);  
       function drawChartd()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediad', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'Facebook groups',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartd'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('e', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartd);  
       function drawChartd()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediae', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'FSU Facebook page',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('charte'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('f', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartf);  
       function drawChartf()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediaf', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'FSU Instagram posts',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartf'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('g', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartg);  
       function drawChartg()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediag', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'FSU Instagram story',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartg'));  
            chart.draw(data, options);  
       }  
	   </script>



<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('h', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawCharth);  
       function drawCharth()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediah', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'FSU printed events calendar',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('charth'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('i', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawCharti);  
       function drawCharti()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediai', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'FSU Snapchat story',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('charti'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('j', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartj);  
       function drawChartj()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediaj', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'FSU Twitter account',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartj'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('k', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartk);  
       function drawChartk()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediak', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'FSU Text service',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartk'));  
            chart.draw(data, options);  
       }  
	   </script>

<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('l', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartk);  
       function drawChartl()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['medial', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'FSU website',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartl'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('m', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartm);  
       function drawChartm()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediam', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'Posters',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartm'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('n', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartn);  
       function drawChartn()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['median', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'Word of mouth',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('chartn'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT count(*) as number FROM rtp2k
   WHERE FIND_IN_SET('o', a2)";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawCharto);  
       function drawCharto()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediao', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["rtp2k"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'Other',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none', alignment: 'center'}
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('charto'));  
            chart.draw(data, options);  
       }  
	   </script>


<?php  
   $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
   $query = "SELECT a3, count(*) as number FROM rtp2k GROUP BY a3";  
   $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
       google.charts.load('current', {'packages':['corechart']});  
       google.charts.setOnLoadCallback(drawChartinformed);  
       function drawChartinformed()  
       {  
            var data = google.visualization.arrayToDataTable([  
                      ['mediain', 'number'],  

                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo "['".$row["a3"]."', ".$row["number"]."],";  
                      }  
                      ?>  
                 ]);  
            var options = {  
                  title: 'How informed you are re: events taking place on campus? 0 = not at all, 10 = very informed',  
                  //is3D:true,  
                  pieSliceText: 'value',

                  legend: { position: 'none'},
                 };  
            var chart = new google.visualization.PieChart(document.getElementById('informedChart'));  
            chart.draw(data, options);  
       }  
	   </script>  
	   
	   <?php  
 $connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
 $query = "SELECT a4, count(*) as number FROM rtp2k GROUP BY a4";  
 $result = mysqli_query($connect, $query);  
 ?>  

<script type="text/javascript">  
           //load charts for corechart package
           google.charts.load('current', {'packages':['corechart']});  
           //draw the chart for what social networks do you use most often aka SocNet when Charts is loaded
           google.charts.setOnLoadCallback(drawChartAttend);  
           //Callback that draws the chart for SocNet
           function drawChartAttend()  
           {  
               //Create the data table for SocNet
            var data = google.visualization.arrayToDataTable([
                  ['reason', 'number'],

                  <?php
                  while($row = mysqli_fetch_array($result))
                  {
                       echo "['".$row["a4"]."', ".$row["number"]."],";
                  }
                  ?>
             ]);
             //Set options for SocNet
        var options = {
              title: 'If you do not attend many of our events, what is the primary reason?',
              //is3D:true,
              pieHole: 0.5,

             };

        //Set legend text change variable
        var reasonN = {
          a: 'I am not aware of events',
          b: 'The price',
          c: 'I am too busy',
          d: 'Not interested in them',
          e: 'Other - please specify'
        };

        //Create a dataview from the data table
        var view = new google.visualization.DataView(data);
        //use method setColumns to add a calc column for converstion
        view.setColumns([{
          calc: function (dt, row) {
            return reasonN[data.getValue(row, 0)];
          },
          label: 'reason',
          type: 'string'
        }, 1]);

        //Use dataview to draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('AttendChart'));
        chart.draw(view, options);

           }  
           </script>  

</head>

<body>
<div class="bg-danger text-white p-2 fixed-top">
	<div class="container">
		<h1 style="text-align:center;">FSU Summer 2019 Events Survey</h1>
	</div>
</div>

<div class="container-fluid" style="margin-top:100px;height:100vh;">

<div class="col"><h3 style="text-align:center;">
<?php
		$connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
        $query = "SELECT COUNT(1) FROM rtp2k;";
        $result = mysqli_query($connect, $query);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $total = $row[0];
                echo "Total number of responses: " . $total;
            }
        }
		?></h3></div>
		
		<div class="col"><h3 style="text-align:center;">
<?php
		$connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
        $query = "SELECT COUNT(1) FROM `rtp2k` WHERE `subscribed` = 'yes'";
        $result = mysqli_query($connect, $query);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $totalYes = $row[0];

                echo "Number who of respondents who subscribed to email newsletter: " . $totalYes;
            }
        }
		?></h3></div>
		
		<div class="col"><h3 style="text-align:center;">
<?php
		$connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
        $query = "SELECT COUNT(1) FROM `rtp2k` WHERE `day1` = 'y'";
        $result = mysqli_query($connect, $query);
        $resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $totalYesDay1 = $row[0];

                echo "Number who opted in to day 1 ticket draw: " . $totalYesDay1;
            }
        }
		?></h3></div>
		

		<div class="col"><h3 style="text-align:center;">
<?php
		$connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
        $query = "SELECT COUNT(1) FROM `rtp2k` WHERE `day2` = 'y'";
        $result = mysqli_query($connect, $query);
        $resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $totalYesDay2 = $row[0];

                echo "Number who opted in to day 2 ticket draw: " . $totalYesDay2;
            }
        }
		?></h3></div>
		
		<div class="col"><h3 style="text-align:center;">
<?php
		$connect = mysqli_connect("localhost", "root", "root", "rtp2k");  
        $query = "SELECT COUNT(1) FROM `rtp2k` WHERE `day4` = 'y'";
        $result = mysqli_query($connect, $query);
        $resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)){
                $totalYesDay4 = $row[0];

                echo "Number who opted in to day 4 ticket draw: " . $totalYesDay4;
            }
        }
        ?></h3></div>
		
			<div class="row">
			<div id="SocNetChart" style="height:75vh;width:100vw;"></div></div>

			
<div class="col bg-primary text-white"><h3 style="text-align:center;">How do you usually find out what events are happening on campus?</h3></div>
	<div class="row">
  <div class="col">	<div id="charta" style="text-align:center;"></div></div>
</div>
  <div class="col">	<div id="chartb" style="text-align:center;"></div>
</div>
  <div class="col"><div id="chartc" style="text-align:center;"></div></div>
  <div class="w-100"></div>
 <div class="col"><div id="chartd" style="text-align:center;"></div></div>
 <div class="col"><div id="charte" style="text-align:center;"></div></div>
 <div class="col"><div id="chartf" style="text-align:center;"></div></div>
 <div class="w-100"></div>
 <div class="col"><div id="chartg" style="text-align:center;"></div></div>
 <div class="col"><div id="charth" style="text-align:center;"></div></div>
 <div class="col"><div id="charti" style="text-align:center;"></div></div>
 <div class="w-100"></div>
 <div class="col"><div id="chartj" style="text-align:center;"></div></div>
 <div class="col"><div id="chartk" style="text-align:center;"></div></div>
 <div class="col"><div id="chartl" style="text-align:center;"></div></div>
 <div class="w-100"></div>
 <div class="col"><div id="chartm" style="text-align:center;"></div></div>
 <div class="col"><div id="chartn" style="text-align:center;"></div></div>
 <div class="col"><div id="charto" style="text-align:center;"></div></div>

 
 
<div class="col" style="width:100vw;text-align:Center;">

<br><br>
	 
	 
	 <?php
$conn=new mysqli("localhost","root","root","rtp2k");

$rows=$conn->query("SELECT howhearother FROM rtp2k");


echo "<h1>Other Responses:</h1><hr>";
while(list($howhearother)=$rows->fetch_row()){
  echo "<h3>$howhearother</h3><hr>";
}


?>

	
	

</div>




<div class="col" style="width:100vw;text-align:Center;">

<div id="informedChart" style="height:75vh;width:100vw;"></div></div>


<div class="col" style="width:100vw;text-align:Center;">

<div id="AttendChart" style="height:75vh;width:100vw;"></div></div>


<div class="col" style="width:100vw;text-align:Center;">

<br><br>
	 
	 
	 <?php
$conn=new mysqli("localhost","root","root","rtp2k");

$rows=$conn->query("SELECT reasonother FROM rtp2k");


echo "<h1>Other Responses, RE:event attendance</h1><hr>";
while(list($reasonother)=$rows->fetch_row()){
  echo "<h3>$reasonother</h3><hr>";
}


?>

</div>


<div class="col" style="width:100vw;text-align:Center;">

<br><br><Br><br><br>
	 
	 
	 <?php
$conn=new mysqli("localhost","root","root","rtp2k");

$rows=$conn->query("SELECT a5 FROM rtp2k");


echo "<h1>Do you have any suggestions for us, either on types of events we should run, or how we should make people aware of them?</h1><hr>";
while(list($a5)=$rows->fetch_row()){
  echo "<h4>$a5</h4><hr>";
}


?>

</div>


</div>


</div>

</div>




</body>
</html>


