<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
	<title></title>
	<style type="text/css">
		*{
			font-family: 'Hind Siliguri', sans-serif; 

		}
		table{
			border-collapse: collapse;
			width: 100%;
			background-color: #f0f5f5;
		}
		th, td {
			text-align: left;
			padding: 8px;

		}
		tr:first-child{
			background-color: #008080;
		}
		tr{
			border-bottom: 1px solid #d9d9d9;
		}	
	</style>
</head>
<body >

<div class="table-responsive">
<table>
	<tr>
		<th class="text-capitalize"style="color:white">Date & Time</th>
		<th class="text-capitalize"style="color:white">State</th>
		<th class="text-capitalize"style="color: red">Confirmed</th>
		<th class="text-capitalize"style="color:#0072ff">Active</th>
		<th class="text-capitalize"style="color:green">Recovered</th>
		<th class="text-capitalize" style="color:black" >Deaths</th>
	</tr> 

	<?php
	$data=file_get_contents('https://api.covid19india.org/data.json');
	$coronalive= json_decode($data,true);
	$statescount= count($coronalive['statewise']);	
	//$totalcount = count($coronadata['cases_time_series']);
	$i=1;
	while($i < $statescount){
		?>
		<tr>
			<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']?></td>
			<td><?php echo $coronalive['statewise'][$i]['state']?></td>
			<td><?php echo $coronalive['statewise'][$i]['confirmed']?></td>
			<td><?php echo $coronalive['statewise'][$i]['active']?></td>
			<td><?php echo $coronalive['statewise'][$i]['recovered']?></td>
			<td><?php echo $coronalive['statewise'][$i]['deaths']?></td>
		</tr>
		<!--echo $coronalive['statewise'][$i]['lastupdatedtime']."<br>";
		echo $coronalive['statewise'][$i]['state']."<br>";
		echo $coronalive['statewise'][$i]['confirmed']."<br>";
		echo $coronalive['statewise'][$i]['active']."<br>";
		echo $coronalive['statewise'][$i]['recovered']."<br>";
		echo $coronalive['statewise'][$i]['deaths']."<br>"; -->
		<?php
		$i++;	}
	?>
</table>
</div>

</body>
</html>