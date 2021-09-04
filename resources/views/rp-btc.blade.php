<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="utf-8">
	<title>TEST BITCOIN</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/query-1.12.4.min.js"></script>
</head>
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

<section class="body">

<div class="row justify-content-center mt-5">
  <div class="col-md-6">
  <div class="card">
        <div class="card-body">
           <h3 class="tebal text-center">Rupiah - Bitcoin</h3>
           <div class="row justify-content-center mt-3">
           <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="idr"  placeholder="IDR">
                <label for="floatingInput">IDR</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="btc"  placeholder="BTC" readonly>
                <label for="floatingInput">BTC</label>
                <input type="hidden" id="data" value="{{$data}}" name="">
       <!--          <input type="hidden" id="datax" value="{{$datax['USD']['buy']}}" name=""> -->

              </div>
           </div> 
         </div>
      </div>
  </div>
  </div>
</div>

</section>


<script>


  $(document).ready(function(){
    
  var y = document.getElementById('idr');
  var x = document.getElementById('data');





  $("#idr").keyup(function(){
      
        let i = y.value / 14000
        let hasil = i * x.value
        $("#btc").val(hasil);
         // console.log(hasil);
    });  
  });



</script>

</body>
</html>