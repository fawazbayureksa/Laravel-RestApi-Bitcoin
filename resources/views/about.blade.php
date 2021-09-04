<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TEST BITCOIN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<section class="header">
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">Bitcoin</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/btc-idr">Convert BTC - IDR</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/idr-btc">Convert IDR - BTC</a>
  </li>
</ul>
</section>
  <hr>
<section class="body">
	<div class="container">

	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">

				<h3 class="tebal">Bitcoin -  Australian Dollar (AUD)</h3>

				<?=dd($data)?>
				<p>Harga Beli</p>
				<h5 class="">$ {{number_format($data['AUD']['buy'])}}</h5>
				<p>Harga Jual</p>
				<h5 class="">$ {{number_format($data['AUD']['sell'])}}</h5>
					
				
					
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
				<h3 class="tebal">Bitcoin - EURO (EUR)  </h3>
				<p>Harga Beli</p>
				<h5>€ {{number_format($data['EUR']['buy'])}}  </h5>	
				<p>Harga Jual</p>
				<h5>€ {{number_format($data['EUR']['sell'])}}  </h5>					
				</div>
			</div>
		</div>
	</div>	
		<br>
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">

					<h3 class="tebal">Bitcoin - Pound sterling (GBP)  </h3>
					<p>Harga Beli</p>
					<h5>£ {{number_format($data['GBP']['buy'])}} </h5>
					<p>Harga Jual</p>
					<h5>£ {{number_format($data['GBP']['sell'])}} </h5>
					
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">

					<h3 class="tebal">Bitcoin - Yen Jepang (JPY) </h3>
					<p>Harga Beli</p>
					<h5>¥ {{number_format($data['JPY']['buy'])}} </h5>
					<p>Harga Jual</p>
					<h5>¥ {{number_format($data['JPY']['sell'])}} </h5>
								
				</div>
			</div>
		</div>
	</div>	
		
		<br>

	<div class="row justify-content-center text-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">

				
					<h3 class="tebal">Bitcoin - United States Dollar (USD) </h3>
					<p>Harga Beli</p>
					<h5>$ {{number_format($data['USD']['buy'])}} </h5>
					<p>Harga Jual</p>
					<h5>$ {{number_format($data['USD']['sell'])}} </h5>
										
				</div>
			</div>
		</div>
	</div>



	</div>
	
</section>




<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>