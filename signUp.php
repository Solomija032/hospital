<!DOCTYPE html>
<html lang="en">
  <head>
    <title>КЗ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	
	
	<?php
	include('nav.php');
	?>



	  
	  <!-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Реєстрація</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Клініка <i class="ion-ios-arrow-forward"></i></a></span> <span>Реєстрація <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section> -->


	<section class="ftco-section ftco-no-ptUp ftco-no-pb ftco-services-2 bg-light"> 
		<div class="container">
	<div class="row d-flex">
		<div class="col-md-7 py-5">
			<div class="py-lg-5">
				<div class="row justify-content-center pb-5">
				  <div class="col-md-12 heading-section ftco-animate">
					<h2 class="mb-3">Наш сервіс</h2>
				  </div>
				</div>
				<div class="row">
					<div class="col-md-6 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-flex">
					  <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
					  <div class="media-body pl-md-4">
						<h3 class="heading mb-3">Екстрені служби</h3>
					  </div>
					</div>      
				  </div>
				  <div class="col-md-6 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-flex">
					  <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
					  <div class="media-body pl-md-4">
						<h3 class="heading mb-3">Кваліфіковані лікарі</h3>
					  </div>
					</div>      
				  </div>
				  <div class="col-md-6 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services d-flex">
					  <div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
					  <div class="media-body pl-md-4">
						<h3 class="heading mb-3">24/7 сервіс</h3>
					  </div>
					</div>      
				  </div>
			  </div>
			</div>
		  </div>
		  <div class="col-md-5 d-flex">
			<div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
				<form action="/registerPatient.php" method="post" class="appointment-form ftco-animate">
					<h3>Реєстрація</h3>
						<div class="">
							<div class="form-group">
								<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Прізвище">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Ім'я">
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control" id="surname" name="surname" placeholder="По-батькові">
                            </div>
                            <div class="form-group">
							Дата народження
								<input type="date" class="form-control" id="date" name="date" placeholder="Дата народження">
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Мобільний">
                            </div>
                            <div class="form-group">
								<input type="text" class="form-control" id="address" name="address" placeholder="Домашня адреса">
                            </div>
                            <div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Ел. пошта (ваш логін)">
                            </div>
                            <div class="form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
							</div>
						</div>
					<div class="form-group">
					  <input type="submit" value="Зареєструватися" class="btn btn-secondary py-3 px-4">
					</div>
						</div>
					</form>
				</div>
		</div>
		</div>
		</div>
	</section>


  <?php
	include('footer.php');
	?>
    
  </body>
</html>