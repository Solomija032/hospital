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
	
	<link rel=”icon” href=”favicon-16x16.png” type=”image/x-icon”>.
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	
	<?php
	include('nav.php');
	?>

	  
	  <section class="hero-wrap js-fullheight" style="background-image: url('images/1.jpg');" id="home-section" data-section="home" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 pt-5 ftco-animate">
          	<div class="mt-5">
          		<span class="subheading">Клініка Захарчук</span>
	            <h1 class="mb-4">Ми тут <br>для вашого здоров'я</h1>
	            <p class="mb-4">Головний пріоритет Клініки Захарчук - це високий рівень обслуговування: зручний графік роботи, відсутність черг, індивідуальний підхід до кожного пацієнта, надання тільки необхідних медичних послуг, без зайвих позицій у чеку.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
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
			            <p>Клініка Захарчук - це високоспеціалізована клініка з комплексним наданням медичних послуг. Діагностика, лікування, профілактика захворювань з усіх напрямків сучасної медицини, оперативні втручання будь-якої складності.
24/7</p>
			            <p><a href="#" class="btn btn-secondary py-3 px-4">Клініка</a></p>
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
		</section>

    <section class="ftco-intro img" style="background-image: url(images/2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-9 text-center">
						<h2>Твоє здоров'я є нашим пріоритетом</h2>
						<p>Ми хочемо, щоб Ви відчули рівень Лікарні Захарчук абсолютно у всьому. Тому доклали максимум зусиль для того, щоб Ваше перебування у стаціонарі було зручним та комфортним: просторі палати, обладнані кнопками швидкого виклику, wi-fi/Тб, usb-виходи, 4-разове харчування, меню із страв на вибір, цілодобовий супровід медичного персоналу.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex">
    				<div class="img img-dept align-self-stretch" style="background-image: url(images/dept-1.jpg);"></div>
    			</div>

    			<div class="col-md-8">
    				<div class="row no-gutters">
    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Кардіологія</a></h3>
    					
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Неврологія</a></h3>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Ендокринологія</a></h3>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Хірургія</a></h3>
    					
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Судинна хірургія</a></h3>

    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Педіатрія</a></h3>
    							</div>
    						</div>
    					</div>

    					<div class="col-md-4">
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Онкологія</a></h3>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Дерматологія</a></h3>
    							</div>
    						</div>
    						<div class="department-wrap p-4 ftco-animate">
    							<div class="text p-2 text-center">
    								<div class="icon">
    									<span class="flaticon-stethoscope"></span>
    								</div>
    								<h3><a href="#">Стоматологія</a></h3>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-section" id="doctor-section">
			<div class="container-fluid px-5">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Наші кваліфіковані лікарі</h2>
            <p>Кожен лікар і медична сестра нашої клініки є експертами у своїй галузі. Працюючи в команді, вони не залишать шансів жодному захворюванню вижити! Їх перевірена практика показує, що більше 99% усіх проблем успішно вирішені. Ми ніколи не боїмося пройти зайвий кілометр для потреб Вашого здоров’я! Клініка Захарчук – це Ваш правильний вибір на шляху до Здоров’я!</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-10.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Козлова Марта</h3>
								<span class="position mb-2">Педіатр</span>
								<div class="faded">
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instagram.com/martusiakozlova/"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-11.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Прецель Софія</h3>
								<span class="position mb-2">Кардіолог</span>
								<div class="faded">
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instagram.com/sofia.pretsel/"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-12.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Ахмад Діана</h3>
								<span class="position mb-2">Стоматолог</span>
								<div class="faded">
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instagram.com/m0ralfreak/"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/doc-13.jpg);"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3 class="mb-2">Чемерис Мар'яна</h3>
								<span class="position mb-2">Дерматолог</span>
								<div class="faded">
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="https://www.instagram.com/maryanachemerys/"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-facts img ftco-counter" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-md-5 heading-section heading-section-white">
						<span class="subheading">Наші досягнення</span>
						<h2 class="mb-4">Близько 2,500 пацієнтів довіряють нам</h2>
					</div>
					<div class="col-md-7">
						<div class="row pt-4">
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="6">0</strong>
		                <span>Років досвіду</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="2500">0</strong>
		                <span>Щасливих пацієнтів</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="47">0</strong>
		                <span>Кількість лікарів</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="130">0</strong>
		                <span>Кількість персоналу</span>
		              </div>
		            </div>
		          </div>
	          </div>
					</div>
				</div>
			</div>
		</section>


    <section class="ftco-section contact-section" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Контакти</h2>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Адреса</h3>
	            <p>м.Львів вул.Личаківська 187/2</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Телефон</h3>
	            <p><a href="tel://1234567920">+(380) 67 839 430</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Електронна пошта</h3>
	            <p><a href="mailto:info@yoursite.com">solomija712@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center bg-light">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Веб-сайт</h3>
	            <p><a href="#">Zakharchuk.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
<div>
            	<h2 class="ftco-heading-2">Час роботи:</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class=""><span class="text">Понеділок-П'ятниця 8:00-20:00</span></li>
	                <li><span class=""></span><span class="text">Cубота 8:00-19:00</span></a></li>
	                <li><span class=""></span><span class="text">Неділя з 11.00 до 16.00</span></a></li>
	              </ul>
				  </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
				  <h2 class="ftco-heading-2">Час роботи call-центру:</h2>
            	<div class="block-23 mb-3">
				<ul>
	                <li><span class=""><span class="text">пн-сб с 7.00-21.00</span></li>
	                <li><span class=""></span><span class="text">Cубота 8:00-19:00</span></a></li>
	                <li><span class=""></span><span class="text">нд з 11.00-16.00</span></a></li>
	              </ul>
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