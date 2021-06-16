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


	  
	  
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-4">
            <h1 class="mb-3 bread">Онлайн-запис</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Клініка <i class="ion-ios-arrow-forward"></i></a></span> <span>Онлайн-запис <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about.jpg);">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">Ми є сучасна медична клініка</h2>
						<p>Клініка Захарчук - це високоспеціалізована лікарня з комплексним наданням медичних послуг. Діагностика, лікування, профілактика захворювань з усіх напрямків сучасної медицини, оперативні втручання будь-якої складності.
							24/7</p>			            
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
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
		        	<form action="/record.php" method="post"  class="appointment-form ftco-animate">
		        		<h3>Онлайн-запис</h3>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Прізвище">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" name="name" id="name" class="form-control" placeholder="Ім'я">
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="service" id="service" class="form-control">
	                      	<option value="pos">Виберіть послугу</option>
						<option value="кардіологія">Кардіологія</option>
						<option value="хірургія">Хірургія</option>
						<option value="онкологія">Онкологія</option>
						<option value="неврологія">Неврологія</option>
						<option value="судинна хірургія">Судинна хірургія</option>
						<option value="дерматологія">Дерматологія</option>
						<option value="ендокринологія">Ендокринологія</option>
						<option value="педіатрія">Педіатрія</option>
						<option value="стоматологія">Стоматологія</option>
						<option value="інше">Інші послуги</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Телефон">
			    				</div>
		    				</div>
		    				<div class="">
			    				<div class="form-group">
			    					<div class="input-wrap">
									Дата бажаного запису
			            		<input type="date" name="date" id="date" class="form-control appointment_date" placeholder="Дата">
		            		</div>
			    				</div>
			    				<div class="form-group">
			    				
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			              <textarea name="comment" id="comment" cols="30" rows="2" class="form-control" placeholder="Коментар"></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" value="Записатися" class="btn btn-secondary py-3 px-4">
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