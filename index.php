<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>warung</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/dist/css/style.css">
</head>
<body>
<div class="topbar">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-6">
				<div class="contact">
					<ul>
						<li><i class="fa fa-phone">0858-0979-7916</i></li>
						<li><i class="fa fa-envelope">rion@gmail.com</i></li>
						<li><i class="fa fa-map-marker">bengkulu seluma</i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="logo">
					<img src="assets/img/logo.png" class="img-fluid">
				</div>
			</div>
			<div class="col-md-6">
				<div class="search">
					<form method="POST">
						<div class="form-grroup">
							<div class="input-group">
								<input type="text" name="" class="form-control">
								<select class="form-control">
									<option value="">pilih kategory</option>
									<option value="">fashion</option>
									<option value="">elektronik</option>
									<option value="">buku</option>
								</select>
								<span class="input-group-btn">
									<button class="btn btn-color">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-3">
				<div class="keranjang">
					<div class="btn-group">
						<a href="#" class="btn btn-color">
							<i class="fa fa-shopping-bag"></i>
						</a>
						<a href="#" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
						aria-haspopup="true" aria-expanded="false" id="dropdownMenulink">keranjang 
						<span class="caret"></span>
					    </a>
					    <ul class="dropdown-menu" aria-labelledby="dropdownMenulink">
					    	<li><a href="">produk A</a></li>
					    	<li><a href="">produk B</a></li>
					    	<li><a href="">produk C</a></li>
					    	<li><a href="">produk D</a></li>
					    </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li><a class="nav-link" href="#">Home</a></li>
      <li><a class="nav-link active" href="#">produk</a></li>
      <li><a class="nav-link" href="#">keranjang</a></li>
      <li><a class="nav-link" href="#">checkout</a></li>
  </ul>
    <ul class="navbar-nav navbar-right">
      <li><a class="nav-link" href="#">daftar</a></li>
      <li><a class="nav-link" href="#">login</a></li>
      <li><a class="nav-link" href="#">member</a></li>
      <li><a class="nav-link" href="#">logout</a></li>
    </ul>
  </div>
</div>
</nav>
<main class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">
				<!-- area slider -->
					<div class="owl-carousel utama-carousel">
						<div>
							<img src="assets/img/slider/slider3.jpg" alt="">
						</div>
						<div>
							<img src="assets/img/slider/slider4.jpg" alt="">
						</div>
					</div>
				<!-- akhir slider -->
				<!-- info box -->
				<div class="infobox">
					<div class="row">
						<div class="col-md-4 infobox-item text-center">
							<h3 class="infobox-title">garansi uang kembali</h3>
							<p class="infobox-text"> garansi uang kembali 100% jika barang cacat</p>
						</div>
						<div class="col-md-4 infobox-item text-center">
							<h3 class="infobox-title">garansi pengriman</h3>
							<p class="infobox-text">gratis pengiriman kepulau jawa dan sumatra</p>
						</div>
						<div class="col-md-4 infobox-item text-center">
							<h3 class="infobox-title">harga termurah</h3>
							<p class="infobox-text">harga dijamin paling murah dengan produk kami sendiri</p>
						</div>
					</div>
				</div>
				<!-- akhir box -->
				<!-- slider produk -->
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">produk terbaru</h3>
						<div class="box-tols" id="letaknavproduk"></div>
					</div>
					<div class="box-body">
						<div class="owl-carousel produk owl-theme">
							<div class="text-center">
								<div class="image-product">
									<img src="assets/img/produk/p1.jpg" alt="">
								</div>
								    <h3 class="title-product">
								    	<a href="">nama produk 1</a>
								    </h3>
								    <span class="price-product">RP.100.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						    </div>
						    <div class="text-center">
								<div class="image-product">
									<img src="assets/img/produk/p2.jpg" alt="">
								</div>
								   <h3 class="title-product">
								    	<a href="">nama produk 2</a>
								    </h3>
								    <span class="price-product">RP.150.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						    </div>
						    <div class="text-center">
								<div class="image-product">
									<img src="assets/img/produk/p3.jpg" alt="">
								</div>
								    <h3 class="title-product">
								    	<a href="">nama produk 3</a>
								    </h3>
								    <span class="price-product">RP.225.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						    </div>
						    <div class="text-center">
								<div class="image-product">
									<img src="assets/img/produk/p4.jpg" alt="">
								</div>
								   <h3 class="title-product">
								    	<a href="">nama produk 4</a>
								    </h3>
								    <span class="price-product">RP.110.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						    </div>
						    <div class="text-center">
								<div class="image-product">
									<img src="assets/img/produk/p5.jpg" alt="">
								</div>
								    <h3 class="title-product">
								    	<a href="">nama produk 5</a>
								    </h3>
								    <span class="price-product">RP.115.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						    </div>
						    <div class="text-center">
								<div class="image-product">
									<img src="assets/img/produk/p6.jpg" alt="">
								</div>
								   <h3 class="title-product">
								    	<a href="">nama produk 6</a>
								    </h3>
								    <span class="price-product">RP.225.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						    </div>
						    <div class="text-center">
								<div class="image-product">
									<img src="assets/img/produk/p7.jpg" alt="">
								</div>
								    <h3 class="title-product">
								    	<a href="">nama produk 7</a>
								    </h3>
								    <span class="price-product">RP.320.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						    </div>
						</div>
					</div>
				</div>
				<!-- akhir slider produk -->
				<!-- awala slider blog -->
				<div class="box">
					<div class="box-header">
						<h3 class="box-title"> blog</h3>
						<div class="box-tols" id="letakblog"></div>
					</div>
					<div class="box-body">
						<div class="owl-carousel blog owl-theme">
							<div class="blog-image">
								<div>
									<img src="assets/img/blog/1.jpg" alt="">
								</div>
								<h3 class="blog-title">
									<a href="">lorem ipsum admin1</a>
								</h3>
								<p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quae est neque delectus minus aspernatur debitis maxime consectetur nostrum sapiente facere quasi magni, tempora officiis voluptate quia consequuntur vitae vero!</p>
								<a href="#" class="btn btn-primary">selengkapnya</a>
							</div>
							<div class="blog-image">
								<div>
									<img src="assets/img/blog/2.jpg" alt="">
								</div>
								<h3 class="blog-title">
									<a href="">lorem ipsum admin2</a>
								</h3>
								<p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quae est neque delectus minus aspernatur debitis maxime consectetur nostrum sapiente facere quasi magni, tempora officiis voluptate quia consequuntur vitae vero!</p>
								<a href="#" class="btn btn-primary">selengkapnya</a>
							</div>
							<div class="blog-image">
								<div>
									<img src="assets/img/blog/1.jpg" alt="">
								</div>
								<h3 class="blog-title">
									<a href="">lorem ipsum admin1</a>
								</h3>
								<p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quae est neque delectus minus aspernatur debitis maxime consectetur nostrum sapiente facere quasi magni, tempora officiis voluptate quia consequuntur vitae vero!</p>
								<a href="#" class="btn btn-primary">selengkapnya</a>
							</div>
							<div class="blog-image">
								<div>
									<img src="assets/img/blog/2.jpg" alt="">
								</div>
								<h3 class="blog-title">
									<a href="">lorem ipsum admin2</a>
								</h3>
								<p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quae est neque delectus minus aspernatur debitis maxime consectetur nostrum sapiente facere quasi magni, tempora officiis voluptate quia consequuntur vitae vero!</p>
								<a href="#" class="btn btn-primary">selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
				<!-- akhir slider blog -->
			</div>
			<div class="col-md-3 col-md-pull-9">
				<!-- awal sidebr kategory -->
				<div class="card-color">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-align-justify">kategory</i>
						</h3>
					  </div>	
						<div class="list-group">
							<a href="" class="list-group-item"><i class="fas fa-tshirt"></i>pakaian</a>
							<a href="" class="list-group-item"><i class="fas fa-bolt"></i>elektronik</a>
							<a href="" class="list-group-item"><i class="fas fa-mobile-alt"></i>smartphone</a>
							<a href="" class="list-group-item"><i class="fas fa-laptop-code"></i>laptop</a>
						<a href="" class="list-group-item"><i class="fas fa-shoe-prints"></i>sepatu sport</a>
							<a href="" class="list-group-item"><i class="fas fa-clock"></i>jam </a>
							<a href="" class="list-group-item"><i class="fas fa-home"></i>alat rumah tanga</a>
						</div>
					</div>
					<!-- akhir sidebar kategory -->
					<!-- awal sidebar terlaris -->
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">terlaris</h3>
							<div class="box-tols" id="terlaris"></div>
						</div>
						<div class="box-body">
							<div class="owl-carousel terlaris owl-theme">
								<div>
								<div class="image-product">
									<img src="assets/img/produk/p8.jpg" alt="">
								</div>
								    <h3 class="title-product">nama produk</h3>
								    <span class="price-product">RP.99.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						         </div>
						         <div>
								<div class="image-product">
									<img src="assets/img/produk/p9.jpg" alt="">
								</div>
								    <h3 class="title-product">nama produk</h3>
								    <span class="price-product">RP.225.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						         </div>
						         <div>
								<div class="image-product">
									<img src="assets/img/produk/p10.jpg" alt="">
								</div>
								    <h3 class="title-product">nama produk</h3>
								    <span class="price-product">RP.250.000</span>
								    <a href="" class="btn btn-color">detail</a>
								    <a href="" class="btn btn-primary">beli</a>
						         </div>
							</div>
						</div>
					</div>
					<!-- akhir sidebar terlaris -->

					<!-- awal sidebar testimoni -->
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">tetimoni</h3>
						</div>
						<div class="box-body">
						   <div class="owl-carousel testimoni owl-theme">
							     <div>
							     	<div class="text-center">
									<img src="assets/img/testimoni/arif.jpg" alt="" class="rounded-circle testimoni-image">
								    <h4 class="testimoni-title"> arif nurrohman</h4>
								    <p class="testimoni-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur obcaecati perspiciatis suscipit deleniti veritatis quod eum, sequi eligendi </p>
						         </div>
						         </div>
						         
						         <div>
							     	<div class="text-center">
									<img src="assets/img/testimoni/asri.png" alt="" class="rounded-circle testimoni-image">
								    <h4 class="testimoni-title"> asri nur fadilah</h4>
								    <p class="testimoni-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur obcaecati perspiciatis suscipit deleniti veritatis quod eum, sequi eligendi </p>
						         </div>
						         </div>
						         <div>
							     	<div class="text-center">
									<img src="assets/img/testimoni/rizqa.jpg" alt="" class="rounded-circle testimoni-image">
								    <h4 class="testimoni-title"> rizqa cahaya</h4>
								    <p class="testimoni-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur obcaecati perspiciatis suscipit deleniti veritatis quod eum, sequi eligendi </p>
						         </div>
						         </div>
						</div>
					</div>
					</div>
					<!-- akhr testimoni -->
				</div>
			</div>
		</div>
	</div>
</main>
<footer class="footer">
	<div class="footer-top">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h3 class="footer-tittle">tentang kami</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
			</div>
			<div class="col-md-3">
				<h3 class="footer-tittle">pelanggan</h3>
				<ul>
					<li><a href="">login</a></li>
					<li><a href="">daftar</a></li>
					<li><a href="">riwayat</a></li>
					<li><a href="">logout</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="footer-tittle">kontak kami</h3>
				<ul>
					<li class="fa fa-phone">telp :0858-0979-7916</li>
					<li class="fa fa-envelope">email : rion@gmail.com</li>
					<li class="fa fa-map-marker">jln. bengkulu depati payung negara</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3 class="footer-tittle">panduan</h3>
				<ul>
					<li><a href="">daftar belanja</a></li>
					<li><a href="">cara belanja</a></li>
					<li><a href="">konfirmasi belanja</a></li>
					<li><a href="">syrat dan ketentuan</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
	<div class="footer-buttom">
		<div class="container">copyright &copy; <strong>all right reserved</strong></div>
	</div>
</footer>



<script src="assets/dist/js/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="assets/dist/js/jquery.slim.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/dist/js/warung.js"></script>
<script src="assets/bootstrap/js/popper.js"></script>
</body>
</html>