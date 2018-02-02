@extends('master')
@section('title', 'Home')

@section('content')

<!-- About Section -->
<section id="about" class="home-section text-center bg-gray">
		<div class="heading-about marginbot-50">
			<div class="container" style="">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
		
					<div class="section-heading">
					<h2>About Me</h2>
					<p>I strive to create beautiful and functional websites. I am currently a Web Developer hailing from St. Louis, and am incredibly passionate about programming and web development. You are free to take a look at my projects listed below. Overall hobbies include things such as, making a good cup of coffee, writing during my spare time, spending as much time with friends and family as possible, and enjoying the outdoors. At this point I am unavailable to take on any freelance projects.</p>
					</div>
			
				</div>
			</div>
			</div>
		</div>
		<div class="container">
</section>

<!-- Language Skills
<section id="service" class="home-section text-center">
		
		<div class="heading-about marginbot-50">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
		
					<div class="section-heading">
					<h2>Development and Design Skills</h2>
					</div>
			
				</div>
			</div>
			</div>
		</div>
		<div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
			
                <div class="service-box">
					<div class="service-desc">
                        <h5>HTML5/CSS3</h5>
                        <div style="width: 64px; height: 64px;" class="fa fa-html5"></div>
					</div>
                </div>
	
            </div>
			<div class="col-sm-3 col-md-3">
	
                <div class="service-box">
					<div class="service-desc">
                        <h5>JAVASCRTIPT</h5>
                        <i class="fa fa-js"></i>
					</div>
                </div>

            </div>
			<div class="col-sm-3 col-md-3">

                <div class="service-box">
					<div class="service-desc">
						<h5>PHP</h5>
					</div>
                </div>
			
            </div>
			<div class="col-sm-3 col-md-3">
	
                <div class="service-box">
					<div class="service-desc">
						<h5>JAVA</h5>
					</div>
                </div>
			
            </div>
        </div>		
		</div>
    </section>
-->
    
    	<!-- Section: works -->
        <section id="works" class="home-section text-center bg-gray">
		<div class="heading-works marginbot-50">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
		
					<div class="section-heading">
					<h2>Recent Works</h2>
					</div>
		
				</div>
			</div>
			</div>
		</div>
		<div class="container" style="">
            <div class="row" style="background: white;">
				<div class="headline-styles">COFFEE GAMES</div>
                <div class="col-md-6" >
					<a href="https://coffeegames.io">
						<img src="{{ secure_asset('images/coffee-pic-main.jpg') }}" class="image-responsive" alt="Coffee Games" style="max-width: 100%; max-height: 100%;">
					</a>
				</div>
                <div class="col-md-6" ><p>The purpose of this project was to build a website to host HTML5 games. I also wanted to become more familiar with Javascript so I decided to build an HTML5 game using the Phaser.io game engine. The game that is currently hosted is a simple arcade game called Catch The fruit. Are you able to beat the highest score? The website was also built using minimal bootstrap stylings for the responsive design.</p></div>
            </div>
			<div class="row" style="background:white; margin-top: 40px;">
				<div class="headline-styles" >GUY AND CARMELO</div>
                <div class="col-md-6" >
					<a href="https://guyandcarmelosalon.com/">
						<img src="{{ secure_asset('images/guyandcarmelo-pic.jpg') }}" alt="Colorful Coffee" style="max-width: 100%; max-height: 100%;">
					</a>
				</div>
                <div class="col-md-6" style=""><p>Guy And Carmelo was a website I was tasked with helping develop the product pages when I interned at MR2Creative. My task was to help build out the product pages and make sure the products where successfully added to the website. I also helped test to make sure that orders could go through and the customers could order the products they wanted off the website. For this project, I worked with Wordpress and Woo-Commerce.</div>
            </div>
			<div class="row" style="background: white; margin-top: 40px;">
				<div class="headline-styles" >MR2 CREATIVE THEME</div>
                <div class="col-md-6" >
					<a href="http://www.theme-example.date">
						<img src="{{ secure_asset('images/mr2creative_theme.jpg') }}" alt="Colorful Coffee" style="max-width: 100%; max-height: 100%;">
					</a>
				</div>
                <div class="col-md-6" style=""><p>For this project, I was tasked at MR2Creative with developing a blogging platform for thier website. I decided to choose Wordpress for the blogging backend section, and decided to develop a theme from scratch. This project gave me a familiarity with Theme Development, as well as getting more of a background with PHP and Mysql. </div>
            </div>
        </div>	
	</section>
	<!-- /Section: works -->
@endsection
