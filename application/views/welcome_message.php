<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Regullux Technology </title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 website landing page for developers and startups">
    <meta name="author" content="Developed By Regullux Technology">    
    <link rel="shortcut icon" href="assets/favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header id="header" class="header">  
        <div class="container">       
            <h1 class="logo">
                <a class="scrollto" href="#hero">
                    <span class="logo-icon-wrapper"><img class="logo-icon" src="assets/images/logo-icon.svg" alt="icon"></span>
                    <span class="text"><span class="highlight">Regullux</span>Technology</span></a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-right" role="navigation">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active nav-item"><a class="scrollto" href="#about">About</a></li>
                        <li class="nav-item"><a class="scrollto" href="#testimonials">Testimonials</a></li>
                        <li class="nav-item"><a class="scrollto" href="#features">Features</a></li>                        
                        <li class="nav-item"><a class="scrollto" href="#team">Team</a></li>
                        <li class="nav-item"><a class="scrollto" href="#pricing">Pricing</a></li>
                        <li class="nav-item"><a class="scrollto" href="#contact">Contact</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
    <div id="hero" class="hero-section">
        
        <div id="hero-carousel" class="hero-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="10000">
            
            <div class="figure-holder-wrapper">
        		<div class="container">
            		<div class="row">
                		<div class="figure-holder">
                	        <img class="figure-image img-responsive" src="assets/images/imac.png" alt="image" />
                        </div><!--//figure-holder-->
            		</div><!--//row-->
        		</div><!--//container-->
    		</div><!--//figure-holder-wrapper-->
            
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#hero-carousel"></li>
				<li data-slide-to="1" data-target="#hero-carousel"></li>
				<li data-slide-to="2" data-target="#hero-carousel"></li>
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
    			
				<div class="item item-1 active">
					<div class="item-content container">
    					<div class="item-content-inner">
    				        
				            <h2 class="heading">Networking<br class="hidden-xs"></h2>
				            <p class="intro">we give solution for manage network</p>
				            <a class="btn btn-primary btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Find out more</a>
    				        
    					</div><!--//item-content-inner-->
					</div><!--//item-content-->
				</div><!--//item-->
				
				<div class="item item-2">
					<div class="item-content container">
						<div class="item-content-inner">
    				        
				            <h2 class="heading">Development</h2>
				            <p class="intro">Made software with love.</p>
				            <a class="btn btn-primary btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Find out more</a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
				
				<div class="item item-3">
					<div class="item-content container">
						<div class="item-content-inner">
    				        
				            <h2 class="heading">Storage</h2>
				            <p class="intro">Build new storage cloud now with us!</p>
				            <a class="btn btn-primary btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Find out more</a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
			</div><!--//carousel-inner-->

		</div><!--//carousel-->
    </div><!--//hero-->
    
    <div id="about" class="about-section">
        <div class="container text-center">
            <h2 class="section-title">Why Choose Us?</h2>
            <p class="intro">Regullux bla bla bla bla The Best IT Services In Tangerang</p>
            <ul class="technologies list-inline">
                <li><img src="assets/images/logo-bootstrap.svg" alt="Bootstrap"></li>
                <li><img src="assets/images/logo-angular.svg" alt="Angular"></li>
                <li><img src="assets/images/logo-html5.svg" alt="HTML5"></li>
                <li><img src="assets/images/logo-css3.svg" alt="CSS3"></li>
                <li><img src="assets/images/logo-less.svg" alt="Less"></li>
                <li><img src="assets/images/logo-jquery.svg" alt="jQuery"></li>
            </ul>
            
            <div class="items-wrapper row">
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">UX-Centered Design</h3>
                        <div class="item-desc">
                            Bespoke UX/UI design to enhance your app's user experience. Let AppKit take care of the design so you can develop without design resources.
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-2.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Supercharge App Development</h3>
                        <div class="item-desc">
                            ReTech provides developers with a ready-made front-end solution so you can concentrate on making your app’s back-end robust and awesome. It empowers small teams to create big things. </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-3.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">Mobile First</h3>
                        <div class="item-desc">
                            Built on the popular Bootstrap framework, so the design is “Mobile First” and fully responsive. For a startup, building an HTML5 webapp which also works across mobile devices is the most cost-effective way to get your product off the ground.</div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//items-wrapper-->
        </div><!--//container-->
    </div><!--//about-section-->
    
    <div id="testimonials" class="testimonials-section">
        <div class="container">
            <h2 class="section-title text-center">Many Happy Customers</h2>
            <div class="item center-block">
                <div class="profile-holder">
                    <img class="profile-image" src="assets/images/profile-1.png" alt="profile">
                </div>
                <div class="quote-holder">
                    <blockquote class="quote">
                        <p>Testimonial goes here Donec felis odio, sagittis eu cursus ac, porttitor eu purus. In a bibendum dui. Nullam id est sed felis rutrum tincidunt eu nec nisi morbi euismod semper neque sed lobortis.</p>
                        <div class="quote-source">
                            <span class="name">@JohnK,</span>
                            <span class="meta">San Francisco</span>
                        </div><!--//quote-source-->
                    </blockquote>
                </div><!--//quote-holder-->
            </div><!--//item-->
            <div class="item item-reversed center-block">
                <div class="profile-holder">
                    <img class="profile-image" src="assets/images/profile-2.png" alt="profile">
                </div>
                <div class="quote-holder">
                    <blockquote class="quote">
                        <p>Testimonial goes here fermentum sed pharetra in, aliquet sodales quam. Ut sed turpis quis orci viverra aliquet interdum ut ipsum. </p>
                        <div class="quote-source">
                            <span class="name">@LisaWhite,</span>
                            <span class="meta">London</span>
                        </div><!--//quote-source-->
                    </blockquote>
                </div><!--//quote-holder-->
            </div><!--//item-->
            <div class="item center-block">
                <div class="profile-holder">
                    <img class="profile-image" src="assets/images/profile-3.png" alt="profile">
                </div>
                <div class="quote-holder">
                    <blockquote class="quote">
                        <p>Testimonial goes here vestibulum non hendrerit lorem, luctus tincidunt erat. Sed pharetra aliquam posuere. Pellentesque sollicitudin.</p>
                        <div class="quote-source">
                            <span class="name">@MattH,</span>
                            <span class="meta">Berlin</span>
                        </div><!--//quote-source-->
                    </blockquote>
                </div><!--//quote-holder-->
            </div><!--//item-->
            <div class="item item-reversed center-block">
                <div class="profile-holder">
                    <img class="profile-image" src="assets/images/profile-4.png" alt="profile">
                </div>
                <div class="quote-holder">
                    <blockquote class="quote">
                        <p>Testimonial goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis</p>
                         <div class="quote-source">
                            <span class="name">@RyanW,</span>
                            <span class="meta">Paris</span>
                        </div><!--//quote-source-->
                    </blockquote>
                    
                </div><!--//quote-holder-->
            </div><!--//item-->
        </div><!--//container-->
    </div><!--//testimonials-->
    
    <div id="features" class="features-section">
        <div class="container text-center">
            <h2 class="section-title">Discover Features</h2>
            <p class="intro">ReTech comes with an AngularJS version, 4 colour schemes and 100+ components</p>
            
            <div class="tabbed-area row">
                
                <!-- Nav tabs -->
                <ul class="feature-nav nav nav-pill nav-stacked text-left col-md-4 col-sm-6 col-xs-12 col-md-push-8 col-sm-push-6 col-xs-push-0" role="tablist">
                     <li role="presentation" class="active"><a href="#feature-1" aria-controls="feature-1" role="tab" data-toggle="tab"><i class="fa fa-magic"></i>20+ Use Case-based App Pages</a></li>
                     <li role="presentation"><a href="#feature-2" aria-controls="feature-2" role="tab" data-toggle="tab"><i class="fa fa-cubes"></i>100+ Components and Widgets</a></li>
                     <li role="presentation"><a href="#feature-3" aria-controls="feature-3" role="tab" data-toggle="tab"><i class="fa fa-bar-chart"></i>Useful Chart Libraries</a></li>
                    
                    <li role="presentation"><a href="#feature-4" aria-controls="feature-4" role="tab" data-toggle="tab"><i class="fa fa-star"></i>AngularJS Version Included</a></li>
                    
                    <li role="presentation"><a href="#feature-5" aria-controls="feature-5" role="tab" data-toggle="tab"><i class="fa fa-rocket"></i>Built on Bootstrap 3</a></li>
                    
                    <li role="presentation"><a href="#feature-6" aria-controls="feature-6" role="tab" data-toggle="tab"><i class="fa fa-tablet"></i>Fully Responsive</a></li>
                    <li role="presentation"><a href="#feature-7" aria-controls="feature-7" role="tab" data-toggle="tab"><i class="fa fa-file-code-o"></i>Valid HTML5 + CSS3</a></li>
                    <li role="presentation"><a href="#feature-8" aria-controls="feature-8" role="tab" data-toggle="tab"><i class="fa fa-heart"></i>Free Updates &amp; Support + Documentation</a></li>
                    
                </ul>
                
                <!-- Tab panes -->
                <div class="feature-content tab-content col-md-8 col-sm-6 col-xs-12 col-md-pull-4 col-sm-pull-6 col-xs-pull-0">
                    <div role="tabpanel" class="tab-pane fade in active" id="feature-1">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-1.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-2">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-2.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-3">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-3.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-4">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-4.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-5">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-5.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-6">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-6.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-7">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-7.png" alt="screenshot" ></a>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="feature-8">
                        <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/feature-8.png" alt="screenshot" ></a>
                    </div>
                    
                </div><!--//feature-content-->

                
            </div><!--//tabbed-area-->
            
        </div><!--//container-->
    </div><!--//features-->
    
    <div class="team-section" id="team">
        <div class="container text-center">
            <h2 class="section-title">Our Team</h2>
            <p class="intro">See who are behind Regullux Technology</p>
            <div class="story">
                <p>Regullux Technology berdiri pada tanggal 15 Juni 2018.</p>
            </div>
            <div class="members-wrapper row">
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="profile">
                            <img class="profile-image" src="assets/images/team-1.png" alt="Xiaoying Riley" />
                        </div>
                        
                        <div class="member-content">
                            <h3 class="member-name">Xiaoying Riley</h3>
                            <div class="member-title">Full-Stack Designer</div>
                            <ul class="social list-inline">
                                <li><a class="twitter" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                
                                <li><a class="facebook" href="https://www.facebook.com/3rdwavethemes/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="github" href="https://github.com/xriley" target="_blank"><i class="fa fa-github"></i></a></li>
                                <li><a class="dribbble" href="https://dribbble.com/Xiaoying" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                               <li><a class="linkedin" href="https://uk.linkedin.com/in/xiaoying" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                
                            </ul>
                            <div class="member-desc">
                               <p>Xiaoying is the UX/UI designer behind AppKit. She loves designing and making Bootstrap themes/templates for developers and startups. You can find her sharing useful UX and webdev related content on <a href="https://twitter.com/3rdwave_themes" target="_blank">Twitter</a> and <a href="https://www.facebook.com/3rdwavethemes/" target="_blank">Facebook</a>. Follow her if you like what she does!</p>
                            </div><!--//member-desc-->
                        </div><!--//member-content-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="profile">
                            <img class="profile-image" src="assets/images/team-2.png" alt="Tom Najdek" />
                        </div>
                        
                        <div class="member-content">
                            <h3 class="member-name">Tomasz Najdek</h3>
                            <div class="member-title">Full-Stack Developer</div>
                            <ul class="social list-inline">
                                <li><a class="twitter" href="http://twitter.com/tnajdek" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.doppnet.com/" target="_blank"><i class="fa fa-globe"></i></a></li>
                                <li><a class="github" href="https://github.com/tnajdek" target="_blank"><i class="fa fa-github"></i></a></li>
                               
                                
                            </ul>
                            <div class="member-desc">
                                <p>Tom takes care of everything on the programming end making the interface rich and flexible. He is a full-stack developer specialising in building large, scalable and user-friendly web apps. Follow him on <a href="https://twitter.com/tnajdek" target="_blank">Twitter</a> for fresh developer tips and check out his <a href="https://github.com/tnajdek" target="_blank">Github</a> for useful open-source tools.
</p>
                            </div><!--//member-desc-->
                        </div><!--//member-content-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//members-wrapper-->
        </div>
    </div><!--//team-section-->
    
    <div id="pricing" class="pricing-section">
        <div class="container text-center">
            <h2 class="section-title">Pricing</h2>
            <div class="intro">ReTech's future updates are 100% FREE for existing customers</div>
            <div class="pricing-wrapper">
                <div class="item item-1 col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Single Application</h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">20</span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>Restricted to a single installation...</p>
                            <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">License Details</a>
                            
                            
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm">Buy Now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item item-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Multiple Applications</h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">80</span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>May extend to multiple installations...</p>
                            <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">License Details</a>
                            
                            
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm">Buy Now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item item-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="item-inner">
                        <h3 class="item-heading">Extended</h3>
                        <div class="price-figure">
                            <span class="currency">$</span><span class="number">1200</span>
                        </div><!--//price-figure-->
                        <div class="price-desc">
                            <p>May license, sublicense, redistribute, or resell the item...</p>
                            <a href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">License Details</a>
                        </div><!--//price-desc-->
                        <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">Buy Now</a>
                        
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//pricing-wrapper-->
            
        </div><!--//container-->
    </div><!--//pricing-section-->
    <div id="contact" class="contact-section">
        <div class="container text-center">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis.</p>
                
            </div>
            <a class="btn btn-cta btn-primary" href="https://wrapbootstrap.com/theme/admin-appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm">Get in Touch</a>
            
        </div><!--//container-->
    </div><!--//contact-section-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" target="_blank">Regullux Team</a></small>
            
            
        </div><!--//container-->
    </footer>
     
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>     
    <script type="text/javascript" src="assets/js/main.js"></script> 
       
</body>
</html> 

