<?php 
    require 'db_config.php';
    $query = "SELECT * FROM extras";
    $rows = mysqli_query($conn, $query);

 ?>




<!DOCTYPE html>
<html lang="en">
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
  
   <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To TravelKita</div>
        <div class="intro-heading text-uppercase">It's Been A Pleasure </div>
        <div class="row no-gutters slider-text justify-content-center">
        	<p class="browse d-md-flex">
            <span class="d-flex justify-content-md-center align-items-md-center"><a href=""data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plane"></i>Flight</a></span>
            <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="far fa-building"></i>Hotel</a></span> 
          
           </p>
        </div>
        <div style="color: black;" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img class="modal-title" id="exampleModalCenterTitle" src="assets/image/logo.png" width="60" height="60">
          
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
    <div class="container">
       <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputDestination">From</label>
      <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
    </div>
    <div class="form-group col-md-6">
      <label for="inputArrival">To </label>
      <input type="email" class="form-control" id="email" placeholder="@email">
    </div>
  

  <div class="form-group col-md-6">
    <label for="inputNo">Passenger</label>
    <input type="text" class="form-control" id="no_hp">
  </div>
 <div class="form-group col-md-6">
      <label for="inputCity">Departure Date</label>
      <input type="date" class="form-control" id="inputCity">
    </div>
  </div>

  <div class="form-row justify-content-center">
   
    <div class="form-group col-md-6">
      <label for="inputState">Seat Class</label>
      <select id="inputState" class="form-control">
        <option selected>Economy</option>
        <option>Business</option>
        <option>First Class</option>
        <option>Premium Economy</option>
      </select>
    </div>
    </div>
   <div class="input-group justify-content-center">
         <input class="btn btn-success mr-1 w-10" type="submit" value="Input" name="proses">     
      </div>

</form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
     
      </div>
    </div>
  </header>
   <section class="services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch">
            <div class="media block-6 services d-block text-center">
             <i class="far fa-handshake fa-4x "></i>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Stay Guarantee</h3>
                <p>Book with us, your stay guaranteed, we dont let you down</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <i class="far fa-bell fa-4x"></i>
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-like"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Price Notification</h3>
                <p>Price Notification serves as a flight price monitoring tool, which tracks the ticket prices and delivers the price trend of your desired flight straight to your inbox.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <i class="far fa-thumbs-up fa-4x"></i>
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Best Travel Agent</h3>
                <p>We can assure you we are professional for make you happy.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <i class="far fa-sticky-note fa-4x"></i>
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-support"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Save Your Plan </h3>
                <p>Save your plan trip wherever you want</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

     <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Top Destination</h2>
        </div>
      </div>
   <div class="album py-5 bg-light">
    <div class="container">
     
      <div class="row">
        <?php  
        $no = 1;
        while ($row = mysqli_fetch_assoc($rows)) {?>
         
       
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="img-fluid" src="assets/image<?php echo $row["dir_gambar"] ?>"></td>
            <div class="card-body">
              <p class="card-text"><?php echo $row["konten"]; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"data-toggle="modal" data-target="#exampleModalScrollable">View</button>
                 
                </div>
               
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollable" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollable">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php echo $row["konten"]; ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                
              </div>
            </div>
          </div>
        </div>
        <?php
                $no++;
              }?>
    </div>
    
  </div>

</div>



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