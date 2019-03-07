@extends('layouts.app')

@section('content')
<div id="slider-home" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/image01.jpg" alt="First slide">

	  <div class="carousel-caption d-none d-md-block align-middle">
	    <h1 class="title-slider">Opening New Frontiers</h1>
	  </div>
    </div>
  </div>
</div>

<div class="container">
	<h3 class="pt-5 pb-3">Products</h3>
	<div class="row pb-4">
		<div class="col-md-3">
			<div class="row w-100">
				<div class="fondo-products col-md-12">
					<img src="/images/producto-01.png" class="w-50 float-left img-radius">
					<p class="w-50 float-left text-center center-v"><span>Sugar</span></p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row w-100">
				<div class="fondo-products col-md-12">
					<img src="/images/producto-01.png" class="w-50 float-left img-radius">
					<p class="w-50 float-left text-center center-v"><span>Sugar</span></p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row w-100">
				<div class="fondo-products col-md-12">
					<img src="/images/producto-01.png" class="w-50 float-left img-radius">
					<p class="w-50 float-left text-center center-v"><span>Sugar</span></p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="row w-100">
				<div class="fondo-products col-md-12">
					<img src="/images/producto-01.png" class="w-50 float-left img-radius">
					<p class="w-50 float-left text-center center-v"><span>Sugar</span></p>
				</div>
			</div>
		</div>		
	</div>

	<div id="explore-products" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="/images/img02.jpg" alt="First slide">

		  <div class="carousel-caption d-none d-md-block">
		    <a href="" class="btn-celeste">Explore Products</a>
		  </div>
	    </div>
	  </div>
	</div>
	<h3 class="pt-5 pb-3">Services</h3>
	<div class="row">
		<div class="card border-0 text-white col-md-3">
		    <img class="card-img" src="/images/service-01.png" alt="Card image">
		    <div class="card-img-overlay" style="top: inherit;">
			    <h5 class="card-title text-center">Graphic Design</h5>
			    <a href="" class="mx-auto d-block btn-celeste" style="width: 165px;">Discover Now</a>
			</div>
		</div>
		<div class="card border-0 text-white col-md-3">
		    <img class="card-img" src="/images/service-01.png" alt="Card image">
		    <div class="card-img-overlay" style="top: inherit;">
			    <h5 class="card-title text-center">Graphic Design</h5>
			    <a href="" class="mx-auto d-block btn-celeste" style="width: 165px;">Discover Now</a>
			</div>
		</div>
		<div class="card border-0 text-white col-md-3">
		    <img class="card-img" src="/images/service-01.png" alt="Card image">
		    <div class="card-img-overlay" style="top: inherit;">
			    <h5 class="card-title text-center">Graphic Design</h5>
			    <a href="" class="mx-auto d-block btn-celeste" style="width: 165px;">Discover Now</a>
			</div>
		</div>
		<div class="card border-0 text-white col-md-3">
		    <img class="card-img" src="/images/service-01.png" alt="Card image">
		    <div class="card-img-overlay" style="top: inherit;">
			    <h5 class="card-title text-center">Graphic Design</h5>
			    <a href="" class="mx-auto d-block btn-celeste" style="width: 165px;">Discover Now</a>
			</div>
		</div>
	</div>
</div>
<div class="w-100 mt-4 p-4" style="background: url(/images/fondo-ce.png); background-size: 100%;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-white">A Better Way To Trade In Central America</h2>
				<p class="text-white">Join ouir community off exporter-importer and enjoy moder to grow your trading business</p>
				<div class="row">
					<div class="col-md-6">
						<h3 class="text-white">Buy</h3>
						<p class="text-white">Need trusted supplier? buy whith confidence from verifiel members</p>
						<a href="#" class="btn btn-sign buy mr-md-2 align-self-end" style="position: absolute; bottom: 0;">Sign in to buy</a>
					</div>

					<div class="col-md-6">
						<h3 class="text-white">Sell</h3>
						<p class="text-white">Want to find customers all around the globe? we heip with security and payments</p>
						<a href="#" class="btn btn-sign sell align-content-end" >Sign in to sell</a>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="card col-md-4 p-2 border-0">
					  <img class="card-img-top" src="/images/maiz.png" alt="Card image cap">
					  <div class="card-body" style="border: 3px solid #fff;">
					    <h5 class="card-title text-white text-center">$35/ton</h5>
					    <p class="card-text text-white text-center">Sugar</p>
					    <p class="card-text text-white text-center">Costa Rica</p>
					  </div>
					</div>
					<div class="card col-md-4 p-2 border-0">
					  <img class="card-img-top" src="/images/maiz.png" alt="Card image cap">
					  <div class="card-body" style="border: 3px solid #fff;">
					    <h5 class="card-title text-white text-center">$35/ton</h5>
					    <p class="card-text text-white text-center">Sugar</p>
					    <p class="card-text text-white text-center">Costa Rica</p>
					  </div>
					</div>
					<div class="card col-md-4 p-2 border-0">
					  <img class="card-img-top" src="/images/maiz.png" alt="Card image cap">
					  <div class="card-body" style="border: 3px solid #fff;">
					    <h5 class="card-title text-white text-center">$35/ton</h5>
					    <p class="card-text text-white text-center">Sugar</p>
					    <p class="card-text text-white text-center">Costa Rica</p>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container py-5">
	<div class="row">
		<h3 class="text-center text-celeste mx-auto d-block col-12 pb-4">How Its Works</h3>
		<div class="col-md-4">
			<span class="numb-celeste text-center mx-auto d-block">1</span>
			<h5 class="text-center text-celeste mx-auto d-block pt-4 col-12">Sign Up & Get Verified</h5>
			<p class="text-center px-5">Our team will verify you and let you know as soon as you've bee accepted</p>
		</div>
		<div class="col-md-4">
			<span class="numb-white text-center mx-auto d-block">2</span>
			<h5 class="text-center text-celeste mx-auto d-block pt-4 col-12">Start Trading</h5>
			<p class="text-center px-5">Make request for quotes or start listing your products</p>
		</div>
		<div class="col-md-4">
			<span class="numb-celeste text-center mx-auto d-block">3</span>
			<h5 class="text-center text-celeste mx-auto d-block pt-4 col-12">Close deals, faster</h5>
			<p class="text-center px-5">get paid or sell quicker</p>
		</div>
	</div>	
</div>

<div class="w-100" style="background: #ececec;">
	<div class="container py-5">
		<div class="row">
			<h3 class="text-center text-celeste mx-auto d-block col-12 pb-4">Most Visited Products</h3>
			<div class="col-md-3 p-2">
				<div class="card " style="border: 4px solid #c8c8c8;" >
				  <img class="card-img-top" src="/images/maiz.png" alt="Card image cap">
				  <div class="card-body" style="background: #c8c8c8;">
				    <h5 class="card-title text-white text-center">$35/ton</h5>
				    <p class="card-text text-white text-center">Sugar</p>
				    <p class="card-text text-white text-center">Costa Rica</p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 p-2">
				<div class="card " style="border: 4px solid #c8c8c8;" >
				  <img class="card-img-top" src="/images/maiz.png" alt="Card image cap">
				  <div class="card-body" style="background: #c8c8c8;">
				    <h5 class="card-title text-white text-center">$35/ton</h5>
				    <p class="card-text text-white text-center">Sugar</p>
				    <p class="card-text text-white text-center">Costa Rica</p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 p-2">
				<div class="card " style="border: 4px solid #c8c8c8;" >
				  <img class="card-img-top" src="/images/maiz.png" alt="Card image cap">
				  <div class="card-body" style="background: #c8c8c8;">
				    <h5 class="card-title text-white text-center">$35/ton</h5>
				    <p class="card-text text-white text-center">Sugar</p>
				    <p class="card-text text-white text-center">Costa Rica</p>
				  </div>
				</div>
			</div>
			<div class="col-md-3 p-2">
				<div class="card " style="border: 4px solid #c8c8c8;" >
				  <img class="card-img-top" src="/images/maiz.png" alt="Card image cap">
				  <div class="card-body" style="background: #c8c8c8;">
				    <h5 class="card-title text-white text-center">$35/ton</h5>
				    <p class="card-text text-white text-center">Sugar</p>
				    <p class="card-text text-white text-center">Costa Rica</p>
				  </div>
				</div>
			</div>
		</div>
		<div class="row">
			<a href="" class="btn-celeste" style="">Explore Products</a>
		</div>
		
	</div>
</div>
<div class="w-100 pt-4 pb-4" style="background: url(/images/fondo.png); background-size: 100%;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-white">Become a Member</h2>
				<p class="text-white" style="font-size: 25px;">Join ouir community off exporter-importer and enjoy moder to grow your trading business</p>
			</div>
			<div class="col-md-6 align-self-end">
				<a href="#" class="btn-sign sell float-right align-bottom my-auto ">Sign in to sell</a>
				<a href="#" class="btn-sign buy mr-md-4 float-right align-bottom mt-auto">Sign in to buy</a>
			</div>
		</div>
	</div>
</div>
<div class="w-100 pt-5 pb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="d-block text-center text-celeste align-items-center">Have Any Questions About TaDà</h3>
				<div class="row">
					<a href="" class="btn-celeste" style="">Ask a Question</a>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
#main-menu li.nav-item {
    margin-left: 21px;
}

#footer p.text-white {
    font-size: 14px;
}
.fondo-products {
	background: #F7F7F7;
    padding-left: 0;
    border-radius: 20px;
    margin-left: 15px;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #9fdbf7 !important;
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #9fdbf7 !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #9fdbf7 !important;
}
.bg-celeste {
	background: #9fdbf7;
}
a.btn-sign.buy {
    background: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    color: #9fdbf7;
    text-decoration: none;
}

a.btn-sign.buy:hover {
    background: #185971;
    padding: 10px 15px;
    border-radius: 5px;
    color: #fff;
    text-decoration: none;
}
a.btn-sign.sell {
    background: #185971;
    padding: 10px 15px;
    border-radius: 5px;
    color: #fff;
    text-decoration: none;
}
a.btn-sign.sell:hover {
    background: #fff;
    padding: 10px 15px;
    border-radius: 5px;
    color: #9fdbf7;
    text-decoration: none;
}
.btn-celeste {
	background: #a2dafa;
    text-decoration: none;
    padding: 12px 30px;
    border-radius: 56px;
    text-align: center;
    margin: 0 auto;
    margin-top: 20px;
    color: #fff;
}

.btn-celeste:hover {
	text-decoration: none;
	color: #fff;
	background: #6ba6d2;
}
.btn-celeste-news {
    background: #a2dafa;
    text-decoration: none;
    padding: 6px;
    border-radius: 10px;
    text-align: center;
    margin: 0 auto;
    color: #fff;
    position: absolute;
    right: 0;
    top: 0;
}

.btn-celeste-news:hover {
	text-decoration: none;
	color: #fff;
	background: #6ba6d2;
}

.numb-celeste {
	    background: #6ba6d2;
    width: 150px;
    padding: 30px;
    border-radius: 100%;
    font-size: 60px;
    color: #fff;
}

.numb-white {
    width: 150px;
    padding: 26px;
    border-radius: 100%;
    font-size: 60px;
    color: #6ba6d2;
    border: 4px solid;
}

.text-celeste {
	color: #a2dafa !important;
}

h1.title-slider {
    text-align: left;
}

.center-v{
	position: relative;
    top: 35%;
}

#slider-home .carousel-caption {
    top: 36%;
}
.img-radius{
	    border-radius: 20Px;
}
.card {
    background-color: transparent;
}
</style>
@endsection