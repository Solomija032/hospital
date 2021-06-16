<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

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
	
	<style>
   h3 { 
    text-align: center;
   }
  </style>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	
	

  <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+(380) 67 83 92 430</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">solomija712@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><a href="/logout.php" class="logout">Вийти</a></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
	</div>



<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
<h3>Особистий кабінет</h3>
<hr></hr>
		<div class="container">
	<div class="row d-flex">
		<div class="col-md-7 py-5">
		<form action="/edit.php" method="post" class="appointment-form ftco-animate fadeInUp ftco-animated">
		        		

		        		<h2>Вітаю,</h2>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" name="lastname" id="lastname" class="form-control" value="<?= $_SESSION['user']['lastname']?>" > 
			    				</div>
			    				<div class="form-group">
			    					<input type="text" name="name" id="name" class="form-control" value="<?= $_SESSION['user']['name']?> " >
			    				</div>
								<div class="form-group">
			    					<input type="text" name="mobile" id="mobile" class="form-control" value="<?= $_SESSION['user']['mobile']?>" >
			    				</div>
								<div class="form-group">
			    					<input type="text" name="address" id="address" class="form-control" value="<?= $_SESSION['user']['address']?>" >
			    				</div>
								<div class="form-group">
			    					<input type="email" name="email" id="email" class="form-control" value="<?= $_SESSION['user']['email']?>" >
			    				</div>
			            <div class="form-group">
			              <input type="submit" value="Зберегти" class="btn btn-secondary py-3 px-4">
			            </div>
						</div>
					</form>
		  </div>
		  <form action="/delete_profile.php" method="post" class="">

		  <div class="form-group">
			              <input type="submit"  onclick="myFunction()" value="Видалити акаунт" class="btn btn-secondary py-3 px-4">
			            </div>
						</form>

		</div>
		</div>
	</section>






<script>
function myFunction()
{
alert("Акаунт буде видалено"); // this is the message in ""
}
</script>
</body>
</html>