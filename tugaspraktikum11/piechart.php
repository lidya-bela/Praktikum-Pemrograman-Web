<?php
include('koneksi.php');
$covid = mysqli_query($conn, "select * from tb_covid");
while ($row = mysqli_fetch_array($covid)){
	$nama_negara[] = $row['country'];
	$query=mysqli_query($conn, "select totalcases, newcases, totaldeaths, newdeaths, totalrecovered, newrecovered from tb_covid where id_covid='".$row['id_covid']."'");
	$row = $query->fetch_array();
	$totalcases[] = $row['totalcases'];
	$newcases[] = $row['newcases']; 
	$totaldeaths[] = $row['totaldeaths'];  
	$newdeaths[] = $row['newdeaths']; 
	$totalrecovered[] = $row['totalrecovered']; 
	$newrecovered[] = $row['newrecovered'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pie Chart</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div class="container" align="center">
	<div id="canvas-holder" style="width:30%">
		<h2> Total Cases </h2>
		<canvas id="myChart"></canvas>
		<br>
		<br>
		<h2> New Cases </h2>
		<canvas id="myChart1"></canvas>
		<br>
		<br>
		<h2> Total Deaths </h2>
		<canvas id="myChart2"></canvas>
		<br>
		<br>
		<h2> New Deaths </h2>
		<canvas id="myChart3"></canvas>
		<br>
		<br>
		<h2> Total Recovered </h2>
		<canvas id="myChart4"></canvas>
		<br>
		<br>
		<h2> New Recovered </h2>
		<canvas id="myChart5"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($totalcases);
					?>,
					label: 'Total Cases',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
			<script>
				var ctx1 = document.getElementById("myChart1").getContext('2d');
		var myChart1 = new Chart(ctx1, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($newcases);
					?>,
					label: 'New Cases',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
			<script>
				var ctx2 = document.getElementById("myChart2").getContext('2d');
		var myChart2 = new Chart(ctx2, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($totaldeaths);
					?>,
					label: 'Total Deaths',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
			<script>
				var ctx3 = document.getElementById("myChart3").getContext('2d');
		var myChart3 = new Chart(ctx3, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($newdeaths);
					?>,
					label: 'New Deaths',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
			<script>
				var ctx4 = document.getElementById("myChart4").getContext('2d');
				var myChart4 = new Chart(ctx4, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($totalrecovered);
					?>,
					label: 'Total Recovered',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
			<script>
				var ctx5 = document.getElementById("myChart5").getContext('2d');
				var myChart5 = new Chart(ctx5, {type: 'pie',
			data: {
				datasets: [{
					data:<?php echo json_encode($newrecovered);
					?>,
					label: 'New Recovered',
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(119, 136, 153, 0.2)',
					'rgba(255, 69, 0, 0.2)',
					'rgba(0, 0, 128, 0.2)',
					'rgba(128, 0, 128, 0.2)',
					'rgba(139, 0, 0, 0.2)',
					'rgba(46, 139, 87, 0.2)'],
					borderColor:[
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(119, 136, 153, 1)',
					'rgba(255, 69, 0, 1)',
					'rgba(0, 0, 128, 1)',
					'rgba(128, 0, 128, 1)',
					'rgba(139, 0, 0, 1)',
					'rgba(46, 139, 87, 1)'],
				}],
				labels:<?php echo json_encode($nama_negara);?>},
				options: {
					responsive: true,
				scales:{

				}
				}
				});
			</script>
</body>
</html>