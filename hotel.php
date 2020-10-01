<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="assets/image/logo.png">
  <title>Travel Kita</title>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
	<?php 
		require 'templates/navbar.php';

	 ?>
	 <div class="bd-example">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/image/hotel.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
          <h5>Relaxing Site </h5>
          <p>Jelajahi negara dengan harga murah dari kami</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="assets/image/hotel1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5>Relaxing Site</h5>
          <p>Pengalaman terbaik yang akan kami berikan</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="assets/image/hotel2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5>Relaxing Site</h5>
          <p>Harga adalah yang anda inginkan</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="page-section bg-warning" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Kami memiliki yang anda inginkan</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Nikmati fasilitas hotel berbintang dengan keluarga atau orang terdekat anda, rasakan pengalaman saat bersantai dengan menikmati suguhan masakan dari hotel yang anda inginkan</p>
      
        </div>
      </div>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="img-fluid" src="assets/image/bkinhtl.jpg"></td>
            <div class="card-body">
              <p class="card-text text-center">JW Marriot Medan</p>
              <p><i class="fas fa-map-marker"></i>Jalan Putri Hijau No. 10, Medan City Center, Medan, Sumatera Utara, Indonesia, 20111</p>

              <div class="d-flex justify-content-center">
                <div class="btn-group">
                  <input class="btn btn-info mr-1 w-10" type="submit" value="Book Now" name="proses"data-toggle="modal" data-target="#exampleModalCenter">
             
                </div>

             <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Book a rooms</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="actions/inserthotel.php">
          <div class="container">
       <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDestination">Kota</label>
      <input type="text" class="form-control" name="kota" id="nama" placeholder="Kota">
    </div>
  

  <div class="form-group col-md-6">
    <label for="inputNo">Check-in</label>
    <input type="date" class="form-control" name="check_in" id="no_hp">
  </div>
 <div class="form-group col-md-6">
      <label for="inputCity">Check-out</label>
      <input type="date" class="form-control" name="check_out" id="inputCity">
    </div>
 <div class="form-group col-md-6">
      <label for="inputArrival">Tamu </label>
      <input type="text" class="form-control" name="tamu" id="" placeholder="Tamu">
    </div>

  </div>

  <div class="form-row justify-content-center">
   
    <div class="form-group col-md-6">
      <label for="inputState">Pilihan Kamar</label>
      <select id="inputState" name="kamar" class="form-control">
        <option selected>Standar</option>
        <option>Superior</option>
        <option>Deluxe</option>
        <option>Suite</option>
      </select>
    </div>
    </div>
   <div class="input-group justify-content-center">
         <input class="btn btn-success mr-1 w-10" type="submit" value="Input" name="proses">     
      </div>

</form>
</div>
      </div>
      
    </div>
  </div>
</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img class="img-fluid" src="assets/image/list2.jpg"></td>
            <div class="card-body">
              <p class="card-text text-center">Ritz Carlton,Jakarta</p>
              <p><i class="fas fa-map-marker"></i>Jl. DR. Ide Anak Agung Gde Agung Kav.E.1.1 No. 1, Mega Kuningan, Jakarta Selatan, DKI Jakarta, Kuningan, Setiabudi, Jakarta, Indonesia, 1295</p>
              <div class="d-flex justify-content-center">
                <div class="btn-group">
                  <input class="btn btn-info mr-1 w-10" type="submit" value="Book Now" name="proses"data-toggle="modal" data-target="#exampleModalCenter">
 
                  
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
             <img class="img-fluid" src="assets/image/list5.jpg"></td>
            <div class="card-body">
              <p class="card-text text-center">The Anvaya Beach Resort Bali</p>
              <p><i class="fas fa-map-marker"></i>Jalan Kartika Plaza, Kuta, Badung, Bali, Indonesia, 80361</p>
              <div class="d-flex justify-content-center">
                <div class="btn-group">
                <input class="btn btn-info mr-1 w-10" type="submit" value="Book Now" name="proses"data-toggle="modal" data-target="#exampleModalCenter">
                  


                </div>
                
              </div>
            </div>
          </div>
        </div>
</div>
</div>
	<section class="page-section" id="hotel">
 		<div class="container">
      <h2 class="text-center mt-0">Book Your Rooms</h2>
  <hr class="divider2 my-4">
    
 	 
 	<form method="POST" action="actions/inserthotel.php">
 		<div class="container">
 			 <div class="form-row justify-content-center">
        <div class="form-group col-md-2">
      <label for="inputEmail4">Kota</label>
      <input type="text" name="kota" class="form-control" id="inputEmail4" placeholder="ex:Jakarta">
    </div>
    <div class="form-group col-md-2">
      <label for="inputEmail4">Check-in</label>
      <input type="date" name="check_in" class="form-control" id="inputEmail4" placeholder="ex:Jakarta">
    </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">Check-out</label>
      <input type="date" name="check_out" class="form-control" id="inputPassword4" placeholder="ex:Medan">
    </div>
  

  
  </div>
  <div class="form-row justify-content-center">
  <div class="form-group col-md-4">
    <label for="inputAddress">Tamu</label>
    <input type="text" name="tamu" class="form-control" id="inputAddress">
  </div>
  
    
    <div class="form-group col-md-4">
      <label for="inputState">Kamar</label>
      <select id="inputState" name="kamar" class="form-control" name="pesawat">
        <option selected>Standard</option>
        <option>Superior</option>
        <option>Deluxe</option>
        <option>Suite</option>
      </select>
    </div>

    </div>
   <div class="input-group justify-content-center">
         <input class="btn btn-dark mr-1 w-10" type="submit" value="Input" name="proses">     
      </div>
</div>
</form>

 		</div>
 	</div>
 </section>

	<?php 
		require 'templates/footer.php';

	 ?>
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/navbar.min.js"></script>
</body>
</html>