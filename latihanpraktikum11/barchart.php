<?php
include('koneksi.php');
$covid = mysqli_query($conn, "select * from tb_covid");
while ($row = mysqli_fetch_array($covid)){
	$nama_negara[] = $row['country'];
	$query=mysqli_query($conn, "select totalcases from tb_covid where id_covid='".$row['id_covid']."'");
	$row = $query->fetch_array();
	$totalcases[] = $row['totalcases'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 800px; height: 800px">
		<canvas id="myChart"></canvas>
	</div>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {type: 'bar',
			data: { 
				labels: <?php echo json_encode($nama_negara);?>, datasets: [{
					label: 'Grafik Perbanding Total Cases 10 Negara',
					data: <?php echo json_encode($totalcases);
					?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255, 99, 132, 1)', 
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true}
					}]
				}
			}});
	</script>
</body>
</html>