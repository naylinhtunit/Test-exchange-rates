<!DOCTYPE html>
<html>
<head>
	<title>Exchange Rates</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<?php $datas = json_decode(file_get_contents('https://forex.cbm.gov.mm/api/latest')); ?>
			<h1><?php echo $datas->info; ?></h1>
				<table class="table table-hover table-bordered">
					<tr>
						<th>Currency</th>
						<th>Values</th>
					</tr>
					<?php foreach ($datas->rates as $key => $value): ?>
						<tr>
							<td><?php echo $key; ?></td>
							<td><?php echo $value; ?></td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>