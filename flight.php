<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<link rel="icon" type="image/png" href="assets/image/logo.png">
  <title>Travel Kita</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
	<?php 
	require 'templates/navbar.php';

	 ?>
   <!-- Mulai Carousel -->

   <div class="overlay"></div>
<div class="bd-example">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="assets/image/flight4.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
          <h5>Flight Experience</h5>
          <p>Jelajahi negara dengan harga murah dari kami</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="assets/image/flight6.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5>Flight Experience</h5>
          <p>Pergi kemanapun anda ingikan</p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="assets/image/flight7.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5>Flight Experience</h5>
          <p>Maskapai lokal maupun internasional</p>
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
</div>
<!-- Carousel Selesai -->
 <body>
  <section class="page-section bg-info" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Kami memiliki yang anda inginkan</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Nikmati perjalan anda dan bayangkan terbang melintasi benua atau samudra dengan maskapai kepercayaan anda lewat situs kami. Kami memiliki berbagai meskapai yang anda inginkan</p>
        
        </div>
      </div>
    </div>
  </section>
  <section class="page-section" id="destination">
    <div class="container">
  <h2 class="text-center mt-0">Book Your Ticket</h2>
  <hr class="divider my-4">
  <form method="POST" action="actions/insert.php">
    <div class="container">
       <div class="form-row justify-content-center">
    <div class="form-group col-md-2">


      <label for="inputEmail4">From</label>
       <div class="input-group mb-2">
      <div class="input-group-prepend">
               <div class="input-group-text"><i class="fab fa-telegram-plane"></i></div>
        </div>
      <input type="text" class="form-control" name="from" id="inputEmail4" placeholder="ex:Jakarta" required>
    </div>
  </div>
    <div class="form-group col-md-2">
      <label for="inputPassword4">To</label>
      <div class="input-group mb-2">
        
      
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fas fa-home"></i></div>
      </div>
      <input type="text" class="form-control" name="to" id="inputPassword4" placeholder="ex:Medan" required>
    </div>
  </div>

  

  <div class="form-group col-md-4">
    <label for="inputAddress">Passengers</label>
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text"><i class="fas fa-male"></i></div>
      </div>
    
    <input type="text" class="form-control" name="penumpang" id="inputAddress" required>
  </div>
  </div>
  </div>
  <div class="form-row justify-content-center">
    <div class="form-group col-md-4">
      <label for="inputCity">Departure Date</label>
      <input type="date" class="form-control" name="tgl_brngkt" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Seat Class</label>
      <select id="inputState" class="form-control" name="kelas">
        <option selected>Economy</option>
        <option>Business</option>
        <option>First Class</option>
        <option>Premium Economy</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Pesawat</label>
      <select id="inputState" class="form-control" name="pesawat">
        <option selected>Garuda Indonesia</option>
        <option>Lion Air</option>
        <option>citilink</option>
        <option>Air Asia</option>
      </select>
    </div>
    </div>
   <div class="input-group justify-content-center">
         <input class="btn btn-dark mr-1 w-10" type="submit" value="Input" name="proses">     
      </div>

    </div>

    <hr>

</form>
</div>
</section>
<h2 class="text-center mt-0">Most Visited Airport</h2>
  <hr class="divider my-4">
 <div class="overlay"></div>
<div class="bd-example">
  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
     <div class="carousel-item active">
    <div class="container page-section about-heading">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/image/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Heaththrow Airport</span>
                <span class="section-heading-lower">London International Airport</span>
              </h2>
              <p>major international airport in London, United Kingdom. Heathrow is the second busiest airport in the world by international passenger traffic, as well as the busiest airport in Europe by passenger traffic, and the seventh busiest airport in the world by total passenger traffic. It is one of six international airports serving Greater London. In 2018, it handled a record 80.1 million passengers, a 2.7% increase from 2017 as well as 480,339 aircraft movements, a 4,715 increase from 2017.</p>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="carousel-item">
      <div class="container page-section about-heading">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/image/about2.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Singapore Changi Airport</span>
                <span class="section-heading-lower">Changi Airport</span>
              </h2>
              <p>is the major civilian airport for Singapore, and one of the largest transportation hubs in Southeast Asia. It is currently rated the World's Best Airport by Skytrax,[5] for the seventh consecutive year since 2013.[6] It is also the first Airport in the world to do so for seven consecutive years and is one of the world's busiest airports by international passenger and cargo traffic. The airport is located in Changi, at the eastern end of Singapore, approximately 20 kilometres northeast[7] from Marina Bay (Singapore's Downtown Core), on a 13-square-kilometre (5.0 sq mi) site. It is operated by Changi Airport Group and it is the home base of Singapore Airlines, Singapore Airlines Cargo, SilkAir, Scoot, Jetstar Asia Airways and BOC Aviation..</p>
             
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
 <div class="carousel-item">
      <div class="container page-section about-heading">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/image/about3.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Tokyo International Airport</span>
                <span class="section-heading-lower">Bandara Internasional Tokyo</span>
              </h2>
              <p> commonly known as Haneda Airport (羽田空港 Haneda Kūkō), Tokyo Haneda Airport, and Haneda International Airport (IATA: HND, ICAO: RJTT), is one of the two primary airports that serve the Greater Tokyo Area, and is the primary base of Japan's two major domestic airlines, Japan Airlines (Terminal 1) and All Nippon Airways (Terminal 2), as well as Air Do, Skymark Airlines, Solaseed Air, and StarFlyer. It is located in Ōta, Tokyo, 14 kilometres (8.7 mi) south of Tokyo Station.</p>
              <p class="mb-0">Haneda was the primary international airport serving Tokyo until 1978; from 1978 to 2010, Haneda handled almost all domestic flights to and from Tokyo as well as "scheduled charter" flights to a small number of major cities in East Asia, while Narita International Airport handled the vast majority of international flights. In 2010, a dedicated international terminal was opened at Haneda in conjunction with the completion of a fourth runway, allowing long-haul flights during night-time hours.[3] Haneda opened up to long-haul service during the daytime in March 2014, with carriers offering nonstop service to 25 cities in 17 countries.[4] The Japanese government is currently encouraging the use of Haneda for premium business routes and the use of Narita for leisure routes and by low-cost carriers.[5]</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  
 	 

   
   



 

    <?php 
    require 'templates/footer.php' ?>
</body>
	     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/navbar.min.js"></script>
</body>
</html>