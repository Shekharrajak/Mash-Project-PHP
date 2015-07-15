<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Shekhar Prasad Rajak">

    <title>Mash Project</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
     <link rel="shortcut icon" href="img/favicon.gif">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css" type="text/css">

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/project.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style_team.css" type="text/css">
    
		<link rel="stylesheet" type="text/css" href="css/intern_list.css" />
        
          
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/style_projectNew.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js" > </script>
    <script type="text/javascript" src="js/jquery.serialScroll.js" > </script>
	<script type="text/javascript">	
		// Easing equation, borrowed from jQuery easing plugin
		// http://gsgd.co.uk/sandbox/jquery/easing/
		jQuery.easing.easeOutQuart = function (x, t, b, c, d) {
			return -c * ((t=t/d-1)*t*t*t - 1) + b;
		};
		
		jQuery(function( $ ){
			/**
			 * Most jQuery.serialScroll's settings, actually belong to jQuery.ScrollTo, check it's demo for an example of each option.
			 * @see http://flesler.demos.com/jquery/scrollTo/
			 * You can use EVERY single setting of jQuery.ScrollTo, in the settings hash you send to jQuery.serialScroll.
			 */
			
			/**
			 * The plugin binds 6 events to the container to allow external manipulation.
			 * prev, next, goto, start, stop and notify
			 * You use them like this: $(your_container).trigger('next'), $(your_container).trigger('goto', [5]) (0-based index).
			 * If for some odd reason, the element already has any of these events bound, trigger it with the namespace.
			 */		
			
			/**
			 * IMPORTANT: this call to the plugin specifies ALL the settings (plus some of jQuery.ScrollTo)
			 * This is done so you can see them. You DON'T need to specify the commented ones.
			 * A 'target' is specified, that means that #screen is the context for target, prev, next and navigation.
			 */
			$('#screen').serialScroll({
				target:'#sections_project',
				items:'li', // Selector to the items ( relative to the matched elements, '#sections' in this case )
				prev:'img.prev',// Selector to the 'prev' button (absolute!, meaning it's relative to the document)
				next:'img.next',// Selector to the 'next' button (absolute too)
				axis:'xy',// The default is 'y' scroll on both ways
				navigation:'#navigation li a',
				duration:700,// Length of the animation (if you scroll 2 axes and use queue, then each axis take half this time)
				force:true, // Force a scroll to the element specified by 'start' (some browsers don't reset on refreshes)
				
				//queue:false,// We scroll on both axes, scroll both at the same time.
				//event:'click',// On which event to react (click is the default, you probably won't need to specify it)
				//stop:false,// Each click will stop any previous animations of the target. (false by default)
				//lock:true, // Ignore events if already animating (true by default)		
				//start: 0, // On which element (index) to begin ( 0 is the default, redundant in this case )		
				//cycle:true,// Cycle endlessly ( constant velocity, true is the default )
				//step:1, // How many items to scroll each time ( 1 is the default, no need to specify )
				//jump:false, // If true, items become clickable (or w/e 'event' is, and when activated, the pane scrolls to them)
				//lazy:false,// (default) if true, the plugin looks for the items on each event(allows AJAX or JS content, or reordering)
				//interval:1000, // It's the number of milliseconds to automatically go to the next
				//constant:true, // constant speed
				
				onBefore:function( e, elem, $pane, $items, pos ){
					/**
					 * 'this' is the triggered element 
					 * e is the event object
					 * elem is the element we'll be scrolling to
					 * $pane is the element being scrolled
					 * $items is the items collection at this moment
					 * pos is the position of elem in the collection
					 * if it returns false, the event will be ignored
					 */
					 //those arguments with a $ are jqueryfied, elem isn't.
					e.preventDefault();
					if (this.blur) {
						this.blur();
					}
				},
				onAfter:function( elem ){
					//'this' is the element being scrolled ($pane) not jqueryfied
				}
			});
			
			/**
			 * No need to have only one element in view, you can use it for slideshows or similar.
			 * In this case, clicking the images, scrolls to them.
			 * No target in this case, so the selectors are absolute.
			 */
		
			
			/**
			 * The call below, is just to show that you are not restricted to prev/next buttons
			 * In this case, the plugin will react to a custom event on the container
			 * You can trigger the event from the outside.
			 */
			
			
			
			/**
			 * The following you don't need to see, is just for the "Add 2 Items" and "Shuffle"" buttons
			 * These exemplify the use of the option 'lazy'.
			 */
			
		});
	</script>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   
                </button>
                <div id="cd-logo" class=" logospr wow flash navbar-brand page-scroll" style="color:#000" href="#page-top"><a><img src="logo-small-spr2.gif" alt="Logo"></a></div>
                <a class="navbar-brand page-scroll" style="color:#000" href="#page-top">Mash Project</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#ourvision">About us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Projects & Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Our Team</a>
                    </li>
                    
                     <li>
                    <a class="page-scroll" href="#intern">Internship</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#press">Press</a>
                     </li>
                     <li>
                     <a class="page-scroll" href="#contact">Blog</a>
                     </li>
                     
                   
                     
                    <li>
                    <a class="page-scroll" href="#contact">Contact us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
     <div id="main-slider" style="top:0px;background-color:inherit">
        <div class="owl-carousel">
            <div class="item" style="background-image:url(img/shutterstock_186584927.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Every Contribution conquers a new horizon<br><BR><br>We are Raising Funds</h2>
                                    <p><em>We are moving ahead. Thanks to you.</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(img/redspot.jpg);">
                 
                
            </div><!--/.item-->
                <div class="item" style="background-color:#121212">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="carousel-content">
                                    <h2>I Pledge To Change. Do You?</h2>
                                    <p>RedSpot is an initiative raising voice against sexual abuse and society's stereotypical notions around it. MASH Project aims to raise awareness and deploy technology-enabled solutions to fight the odds.</p>
                                    <p><a class="btn btn-lg btn-primary" href="http://tinyurl.in/fBKqI" target="_blank" role="button">DONATE NOW</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </div><!--/#main-slider-->

    <header id="ourvision" >
    	<section class="container row">
        <div class="header-content wow fadeIn" data-wow-delay="0.2s" data-shadow="true">
            <div class="header-content-inner">
                <h1>Our Vision</h1>
                <hr>
                <p>The vision of MASH Project is to build a community of technologically enabled social change makers.</p>
               <!-- <a href="#about" class="btn btn-primary btn-xl page-scroll wow tada" data-wow-delay="0.7s">Know More</a>-->
            </div>
        </div>
        
        
         <div class="row about_head wow fadeInLeft" data-wow-delay="0.4s">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">What we do</h2>
                    <hr class="light">
                    <h6 class="text-faded">
                    	We are building this community by focusing on three major areas .
                          </h6>
                   
                </div>
            
        
		
        <div class="row">
            
			<div class="col-sm-4 col-md-4">
				<div class="wow fadeInLeft" data-wow-delay="0.5s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/service-icon-2.png" style="margin-left:50px" alt="" />
					</div>
					<div class="service-desc">
						<h4>Web and App Design</h4>
						
                        <h5 style="font-weight: 500">
                    	 Developing cause based web and mobile applications.
                          </h5>
                   
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-4 col-md-4">
				<div class="wow fadeInLeft" data-wow-delay="0.7s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/service-icon-3.png" style="margin-left:50px" alt="" />
					</div>
					<div class="service-desc">
						<h4>Social Media</h4>
						
                         <h5 style="font-weight: 500">
                    	Raising awareness through Social media and 
                          </h5>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-4 col-md-4">
				<div class="wow fadeInLeft" data-wow-delay="0.9s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/service-icon-4.png" style="margin-left:50px" alt="" />
					</div>
					<div class="service-desc">
						<h4>Events</h4>
						
                        <h5 style="font-weight: 500">
                    	Organization engaging events like Open Dialogue, Hackathons, Workshops and Seminars.
                          </h5>
					</div>
                </div>
				</div>
                   
            </div> 
          </div>
          </div>
        </div>
          </header>
        
    </section>
    
      
 
<!--
    <section id="about" class="bg-primary" data-wow-delay="0.4s">
        <div class="container wow fadeInLeft">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">What we do</h2>
                    <hr class="light">
                    <h6 class="text-faded">
                    	We are building this community by focusing on three major areas .
                          </h6>
                   
                </div>
            </div>
        </div>
        <div class="container">
		
        <div class="row">
            
			<div class="col-sm-4 col-md-4">
				<div class="wow fadeIn" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/service-icon-2.png" style="margin-left:50px" alt="" />
					</div>
					<div class="service-desc">
						<h5>Web and App Design</h5>
						<p	>
                        Developing cause based web and mobile applications.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-4 col-md-4">
				<div class="wow fadeIn" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/service-icon-3.png" style="margin-left:50px" alt="" />
					</div>
					<div class="service-desc">
						<h5>Social Media</h5>
						<p>Raising awareness through Social media and </p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-4 col-md-4">
				<div class="wow fadeIn" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="img/service-icon-4.png" style="margin-left:50px" alt="" />
					</div>
					<div class="service-desc">
						<h5>Events</h5>
						<p >Organization engaging events like Open Dialogue, Hackathons, Workshops and Seminars.</p>
					</div>
                </div>
				</div>
                   
            </div>
      
        </div>	
         	  
		</div>
        
    </section>
-->
		
    
   
    <!--new project slider -->
        <section id="portfolio">
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-lg-12 text-center">
                    <h2>Projects</h2>
                    
                    <hr class="star-primary">
                </div>
            </div>
            
            
            <div id="screen">
		<img class="prev" src="img/prev.gif" alt="prev" width="42" height="53" />
		<div id="navigation">
			<ul>
				<li><a href="#">MDG</a></li>
                <li><a href="#">NGO connect</a></li>
				<li><a href="#">NGO connect</a></li>
                <li><a href="#">NGO connect</a></li>
				<li><a href="#">NGO connect</a></li>
                <li><a href="#">NGO connect</a></li>
                <li><a href="#">MDG</a></li>
				<li><a href="#">MDG</a></li>
                <li><a href="#">MDG</a></li>
				<li><a href="#">Section 10</a></li>
			</ul>
		</div>
		<div id="sections_project">
			<ul>
				<li>
					
					 <div class="portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"><p>
                               Info MDG<br>
                                <span class="btn btn-block btn-toolbar">know more</span> </p>
                            </div>
                        </div>
                        <img src="img/INFO_MDG_icon.png" class="img-responsive" alt=""><h5>Info MDG</h5>
                    </a>
                    
               
               </div>
				</li>
				<li>
					 <div class="wow fadeIn portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <p>NGO Connect
                            <br>
            <span class="btn btn-block btn-toolbar">know more</span>                 </p>
                                <i class=" "></i>
                                
                            </div>
                        </div>
                        <img src="img/ngo-connect.jpg" class="img-responsive" alt=""><h5>NGO Connect SPR</h5>
                    </a>
                    
                </div>
				</li>
				<!--<li class="fallen">-->
                <li>
					
					 <div class="wow fadeIn portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <p>NGO Connect
                            <br>
            <span class="btn btn-block btn-toolbar">know more</span>                 </p>
                                <i class=" "></i>
                                
                            </div>
                        </div>
                        <img src="img/ngo-connect.jpg" class="img-responsive" alt=""><h5>NGO Connect SPR</h5>
                    </a>
                    
                </div>
				</li>				
				<li>
					
					 <div class="wow fadeIn portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <p>NGO Connect
                            <br>
            <span class="btn btn-block btn-toolbar">know more</span>                 </p>
                                <i class=" "></i>
                                
                            </div>
                        </div>
                        <img src="img/ngo-connect.jpg" class="img-responsive" alt=""><h5>NGO Connect SPR</h5>
                    </a>
                    
                </div>
				</li>
				<li>
					
					 <div class="wow fadeIn portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <p>NGO Connect
                            <br>
            <span class="btn btn-block btn-toolbar">know more</span>                 </p>
                                <i class=" "></i>
                                
                            </div>
                        </div>
                        <img src="img/ngo-connect.jpg" class="img-responsive" alt=""><h5>NGO Connect SPR</h5>
                    </a>
                    
                </div>
				</li>
                <li>
					
					 <div class="wow fadeIn portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <p>NGO Connect
                            <br>
            <span class="btn btn-block btn-toolbar">know more</span>                 </p>
                                <i class=" "></i>
                                
                            </div>
                        </div>
                        <img src="img/ngo-connect.jpg" class="img-responsive" alt=""><h5>NGO Connect SPR</h5>
                    </a>
                    
                </div>
				</li>
				<li>
					
					 <div class="portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"><p>
                               Info MDG<br>
                                <span class="btn btn-block btn-toolbar">know more</span> </p>
                            </div>
                        </div>
                        <img src="img/INFO_MDG_icon.png" class="img-responsive" alt=""><h5>Info MDG</h5>
                    </a>
                    
               
               </div>
				</li>
				<!--<li class="fallen">-->
                <li>
					
					 <div class="portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"><p>
                               Info MDG<br>
                                <span class="btn btn-block btn-toolbar">know more</span> </p>
                            </div>
                        </div>
                        <img src="img/INFO_MDG_icon.png" class="img-responsive" alt=""><h5>Info MDG</h5>
                    </a>
                    
               
               </div>
				</li>				
				<li>
					
					 <div class="portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"><p>
                               Info MDG<br>
                                <span class="btn btn-block btn-toolbar">know more</span> </p>
                            </div>
                        </div>
                        <img src="img/INFO_MDG_icon.png" class="img-responsive" alt=""><h5>Info MDG</h5>
                    </a>
                    
               
               </div>
				</li>
				<li>
					<h2>Section 10</h2>
					<p>Nullam et sem eget massa pellentesque dapibus. Nulla sollicitudin enim quis odio. Quisque ipsum lorem, volutpat eget, condimentum ac, posuere id, risus. Suspendisse tortor metus, aliquet in, varius nec, hendrerit a, libero. Suspendisse iaculis. Fusce commodo urna ut enim. Fusce tempus eros. Phasellus sodales tellus id dolor. Integer sollicitudin, turpis ac interdum condimentum, enim enim tempus metus, sed imperdiet massa diam nec elit. Mauris ante augue, hendrerit non, commodo ac, porttitor eu, turpis.</p>
					<p>In fermentum nibh ut diam. Mauris sagittis, tellus ac molestie fermentum, arcu orci pharetra mi, id vehicula massa leo vel pede. Nullam semper tincidunt lorem. Proin arcu libero, auctor sed, interdum egestas, ullamcorper et, lacus. Donec id lectus eget diam accumsan ullamcorper. Donec at urna et lacus condimentum pellentesque. Phasellus dapibus hendrerit massa.</p>
				</li>
			</ul>
		</div>
		<img class="next" src="img/next.gif" alt="next" width="42" height="53" />
	</div>
        <!-- new project slider end -->
       
    <!-- Project Grid Section
    <section id="portfolio">
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-lg-12 text-center">
                    <h2>Projects</h2>
                    
                    <hr class="star-primary">
                </div>
            </div>
            
           
           
           <div class="horizslide wow fadeIn">
           				<div class="proj">     
                <div class="wow fadeIn portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content"> <p>NGO Connect</p>
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/ngo-connect.jpg" class="img-responsive" alt=""><h5>NGO Connect</h5>
                    </a>
                    
                </div>
              
               <div class="portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                               Info MDG
                            </div>
                        </div>
                        <img src="img/INFO_MDG_icon.png" class="img-responsive" alt=""><h5>Info MDG</h5>
                    </a>
                    
               
               </div>
               	
                
                
              
               
                
               <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> <h5>NGO Connect</h5>
                    </a>
                   
                </div>
                
               
               
               
               <!-- repeating to check
                
          // <div class="slidingDivProject">
                
               
                <div class="portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> <h5>NGO Connect</h5>
                    </a>
                   
                </div>
           
           
                
                <div class="portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""><h5>NGO Connect</h5>
                    </a>
                    
                </div>
              
               
                
                <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">  <h5>NGO Connect</h5>
                    </a>
                  
                </div>
               
                
                <div class="portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""><h5>NGO Connect</h5>
                    </a>
                    
                </div>
                
                
                <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> <h5>NGO Connect</h5>
                    </a>
                   
                </div>
              
                
                <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> <h5>NGO Connect</h5>
                    </a>
                   
                </div>
                <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">NGO Connect
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> <h5>NGO Connect</h5>
                    </a>
                   
                </div>
                
                
               
                
               
                
              </div> <!--end proj 

	</div> <!--end horizslide -->
             
            
            
             <!--  repeating end 
               <div class="col-lg-12 text-center slideInRight">
                    <h2>Events</h2>
                    <hr class="star-primary">
                </div>
            <div class="horizslide wow fadeIn">
           				<div class="proj"> 
                <div class=" portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/open-dialogue.jpg" class="img-responsive" alt=""><h5>Open Dialogue</h5>
                    </a>
                    
                </div>
                <div class="portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""><h5>HACK day</h5>
                    </a>
                    
                </div>
                <!--
                  <a href="###" class="btn btn-primary btn-xl wow tada show_hide_event"  data-wow-delay="0.7s">Show all</a>-->
               <!-- repeating to check
                
           <!--<div class="slidingDivEvent">
                
               
                <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> <h5>NGO Connect</h5>
                    </a>
                   
                </div>
           
           
                
                <div class="portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""><h5>NGO Connect</h5>
                    </a>
                    
                </div>
              
               
                
                <div class="portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">  <h5>NGO Connect</h5>
                    </a>
                  
                </div>
               
                
                <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""><h5>NGO Connect</h5>
                    </a>
                    
                </div>
                
                
                <div class="portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""> <h5>NGO Connect</h5>
                    </a>
                   
                </div>
              
                
                <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt=""><h5>NGO Connect</h5>
                    </a>
                    
                </div>
                <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">  <h5>NGO Connect</h5>
                    </a>
                  
                </div>
                
                
                <div class="portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">       <h5>NGO Connect</h5>
                    </a>
             
                </div>
               
                
                <div class=" portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">   <h5>NGO Connect</h5>
                    </a>
                 
                </div>
               
               <!-- <a href="###" class="btn btn-primary btn-xl wow tada show_hide_event"  data-wow-delay="0.7s">Hide</a> -->             <!-- </div>
             
           
            
                repeating end 
               </div> <!-- end proj 
              </div><!-- end horizslider 
                
                </div>
            </div> -->
        </div>
    </section>

   

<!-- 
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
 -->
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>NGO Connect</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>
                            Our Mobile application, NGO Connect aims to connect Non Govenmental Organisations to prospective volunteers. With a database on NGOs classified on the basis of areas or work, the app has two sections, "I Want" and "I Have". The "I HAVE" section help the NGOs to post their volunteer requirements by setting up their profiles on the app and provides a simple platform for volunteers to apply for the various positions. The "I WANT" section aims to connect users to NGOs operating in specific regions. Appropriate filters give them a detailed insight into the kind of work they are engaged in and help them to apply in fields suitable for them.
App status: Developmental stage</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">---</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">Jun 2015</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>INFO MDG</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>INFO MDG is one of the first initiatives MASH Project took in the Tech Development sector. It is centered around the 8 Millennium Development Goals that the United Nations designed, all to be achieved by the target date 2015. These goals are chosen in context to the major issues that surround the world today, like educational levels, degrading health levels etc. INFO MDG, with its simple interface, provides its users with a thorough understanding of these goals and gives them an insight into the steps that have been taken by far and lists out various pointers that surround the 8 goals. It is purely a knowledge-sharing application.
App status: Pre-launch stage</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">---</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">----</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">----</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>OPEN Dialogue </h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p> MASH project organized its first on ground event, OPEN DIALOGUE in collaboration with Human Circle, an organisation which aims to bring together like-minded people driven by the motive of bringing about a change. The event, being an open forum discussion, aimed to bring students, social change makers and organisations to discuss, deliberate and find solutions to issues close to their hearts. After a very energetic and brainstorming session of Change makers, thinkers and revolutionaries gathered under a single roof, ready with their super ideas and transforming plans, we finally bid our good-byes with new friends, new ideas, the will to change, the hope to begin!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">---</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">----</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">---</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2> HACK day </h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>
                            MASH Project held it's first Hack-Day on March 29, 2014 to take-off it's Mobile Application - NGO Connect. An incredible opportunity that not only brought developers and programmers under one roof but also provided a platform wherein the collective effort set the foundation of the App. NGO Connect was developed with the motive of connecting NGO's with people to serve the society by encouraging volunteer participation with complete knowledge of the various organisation working in the field of development and empowerment.
                            </p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">--</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">--</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">----</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>TheAlternative.in</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>
                           They say, the best encouragement for an initiative to prosper, is it being noticed and appreciated. With immense pleasure, MASH Project shares with you all its own efforts of being noticed.
Read more at TheAlternative.in
                           </p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">---</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">Jun 2015</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>YouthMobile Experts Meeting</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>
                           The 1st YouthMobile Experts Meeting was held at UNESCO HQ on 19-20 March 2014. 
UNESCO has conducted a global search for the best, existing mobile applications training initiatives with openly-licensed training materials, and invited a selected group of training providers and app development tools makers.
MASH Project has been the only organisation to be selected from India and among 16 organisations selected from all over the world.
UNESCO seeks to extensively promote very high-quality, multi-lingual, comprehensive training materials for developing mobile apps. Openly-licensed, the training materials identified will allow for adaptations including translation, localization, and innovations. The YouthMobile experts meeting is part of UNESCO’s contribution to the 2014 celebrations for Open Education Week. Know more.

                           
                           </p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="#">---</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="#">Jun 2015</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="#">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
   

    <section id="team" class="bg-spr-3">
    	<div class="container" class="home-section bg-gray">
			<div class="container">
			  
                  <div class="row wow fadeIn">
                <div class="col-lg-12 text-center">
                    <h2>Our Team </h2>
                    <hr class="star-primary">
                </div>
			  </div>
				<div class="row wow" data-transition="fade">
					
					
					<ul class="lb-album">
						<li class="wow fadeInLeft" data-wow-delay="0.1s">
							<a href="#image-1">
								<img src="img/works/thumbs/8.jpg" alt="">
                                <span><h6>his/her interest here</h6></span>
                           </a>
							
                             <h5>Memeber Name :</h5>
                            <h6>His work</h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                  <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 
                                 </p>
                           <!-- <span class="company-social">
                           
                            <p style="height:2px;width:2px"class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></p></span>-->
                            
					
				
						</li>
						<li class="wow fadeInLeft" data-wow-delay="0.2s">
							<a href="#image-3">
								<img src="img/works/thumbs/8.jpg" alt="">
                                
							<span><h6>his/her interest here</h6></span>	
							
							</a>
                             <h5>Memeber Name :</h5>
                            <h6>His work </h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                  <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 
                                 </p>
						</li>
						<li class="wow fadeInLeft" data-wow-delay="0.3s">
							<a href="#image-4">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span><h6>his/her interest here</h6></span>
							</a>
							
                            <h5>Memeber Name :</h5>
                            <h6>His work </h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                  <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 
                                 </p>
						</li>
						
						<li class="wow fadeInLeft" data-wow-delay="0.4s">
							<a href="#image-5">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span><h6>his/her interest here</h6></span>
							</a>
							
                            <h5>Memeber Name :</h5>
                            <h6>His work </h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                  <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 
                                 </p>
						</li>
						<li class="wow fadeInLeft" data-wow-delay="0.5s">
							<a href="#image-6">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span><h6>his/her interest here</h6></span>
							</a>
							
                             <h4>Memeber Name :</h4>
                            <h6>His work </h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                  <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 
                                 </p>
						</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.6s">
							<a href="#image-3">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span><h6>his/her interest here</h6></span>
							</a>
							
                             <h5>Memeber Name :</h5>
                            <h6>His work </h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                  <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 
                                 </p>
						</li>
						<li class="wow fadeInLeft" data-wow-delay="0.7s">
							<a href="#image-4">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span><h6>his/her interest here</h6></span>
							</a>
							
                            <h5>Memeber Name :</h5>
                            <h6>His work </h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                  <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 
                                 </p>
						</li>
						
						<li class="wow fadeInLeft" data-wow-delay="0.8s">
							<a href="#image-5">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span><h6>his/her interest here</h6></span>
							</a>
							
                            <h5>Memeber Name :</h5>
                            <h6>His work </h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                  <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 
                                 </p>
						</li>
						<li class="wow fadeInLeft" data-wow-delay="0.9s">
							<a href="#image-6">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span><h6>his/her interest here</h6></span>
							</a>
							
                             <h5>Memeber Name :</h5>
                            <h6>His work </h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                  <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 </p>
						</li>
                        <li class="wow fadeInLeft" data-wow-delay="1s">
							<a href="#image-3">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span><h6>his/her interest here</h6></span>
							</a>
							
                             <h5>Memeber Name :</h5>
                            <h6>His work </h6>
                            <p style="padding-left:5px;margin-left:30%; letter-spacing:5px"> <span class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></span>
                               
                                 <span class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a> </span>
                                 <span class="social-linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a> </span>
                                 
                                 </p>
						</li>
						
					
						
                        
					</ul>
					
					</div>
				</div>
			</div>
            </div>
		</section>	 
        
	<section id="intern">
        <div class="container bg-spr-2>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                  <h2 class="section-heading">Internship</h2>
                    <hr class="primary wow fadeInLeft">
                    <h5 class="wow fadeIn" data-wow-delay="0.1s">MASH Project is open for all eager minds, be it a beginner or a master in any field. Check out our sections available for Internship and choose the one which excites you! 
For the Experienced ones, if you have any suggestions or believe you can contribute to us in your own way. Please visit our Contact us page.

Internship type: Work from home 
Time period: Minimum 3 months . 
Stipend: Unpaid (loads of experience as takeaway)</h5>
                </div>
                
			
				
				<div class="grid">
					<figure class="effect-sarah wow fadeInLeft" data-wow-delay="0.1s">
						<img src="img/download.jpg" alt="img13"/>
						<figcaption>
							<h4>Web & Android Development</h4>
							<p>We are looking for people with these skills : 
Front end developer: HTML+CSS+JavaScript 
Back end Developer: NodeJs/Php/Python/Java 
App Developer: Android/iOS.

							
							<a href="#" style="color:#90C; font-size:14px; bottom:10px" class="btn btn-success btn-block btn-primary"  >Join</a></p>
							
						</figcaption>			
					</figure>
					<figure class="effect-sarah wow fadeInLeft" data-wow-delay="0.2s">
						<img src="img/visual_communication_220.jpg" alt="img20"/>
						<figcaption>
							<h4>Design and Visual communication</h4>
							<p>A section meant for skilled Photoshoppers. Knowledge of CorelDRAW, Illustrator are a welcome deal!
                            <br><br>
							<a href="#" style="color:#90C; font-size:14px" class="btn btn-success btn-block btn-primary"  >Join</a></p>
							
						</figcaption>			
					</figure>
                    <figure class="effect-sarah wow fadeInLeft" data-wow-delay="0.3s">
						<img src="img/shutterstock_186584927.jpg" alt="img20"/>
						<figcaption>
							<h3> <span>Finance</span></h3>
							<p>We are looking for people who can come up with innovative fundraising strategies and help us in implementing them.
                           <br><br>
							<a href="#" style="color:#90C; font-size:14px" class="btn btn-success btn-block btn-primary"  >Join</a></p>
							
						</figcaption>			
					</figure>
                    <figure class="effect-sarah wow fadeInLeft" data-wow-delay="0.4s">
						<img src="img/social-media-day.png" alt="img20"/>
						<figcaption>
							<h3>Social Media</h3>
							<p>We are looking for people who can use Social media platforms like Facebook, Twitter, Reddit, etc. in the right manner for the right cause.
                           <br><br>
							<a href="#" style="color:#90C; font-size:14px" class="btn btn-success btn-block btn-primary"  >Join</a></p>
							
						</figcaption>			
					</figure>
                    <figure class="effect-sarah wow fadeInLeft" data-wow-delay="0.5s">
						<img src="img/event-management.jpg" alt="img20"/>
						<figcaption>
							<h3>Events <span>Management</span></h3>
							<p>If you believe events can power change, and are willing to put in your skills for the same, then MASH is the place for you!
                           <br><br>
							<a href="#" style="color:#90C; font-size:14px" class="btn btn-success btn-block btn-primary"  >Join</a></p>
							
						</figcaption>			
					</figure>
                    <figure class="effect-sarah wow fadeInLeft" data-wow-delay="0.6s">
						<img src="img/web-research.jpg" alt="img20"/>
						<figcaption>
							<h4><span>Content & Research</span></h4>
							<p>Believe you can develop awesome content on social cause? Join us as Content Writer! If you find your tastes in digging deep for stories online and offline, then apply for our Research team.
							
							<a href="#" style="color:#90C; font-size:14px; margin-bottom:500px" class="btn btn-success btn-block btn-primary"  >Join</a></p>
						</figcaption>			
					</figure>
				</div>
				
    </div>
    </div>
    </section>
    
    <!-- press section -->
    
     <section id="press">
        <div class="container" id ="portfolio">
        <div class="col-lg-12 text-center" style="padding-bottom:10px">
                    <h2>Press</h2>
                    <hr class="star-primary">
                    <p>
                    From our very inception, we have based our growth on the lines of infinite reach. Our online and offline audience have grown every passing day, owing to the authenticity of our notion and beliefs. Below are a few articles to know that'll help you know us better.
                    </p>
         </div>
            <div class="row ">
          <div class="col-xs-6 wow fadeInLeft">
           	<div class="modal-body">
                            <h4>TheAlternative.in</h4>
                            <hr>
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="" style="padding-bottom:10px">
                            <h6 class="text-faded" style="color:#000; text-align:center; white-space:!important; font-stretch:expanded">
                           They say, the best encouragement for an initiative to prosper, is it being noticed and appreciated. With immense pleasure, MASH Project shares with you all its own efforts of being noticed.
Read more at TheAlternative.in
                           </h6>
          </div>
        </div>
          <div class="col-xs-6 wow fadeInRight">
           		<div class="modal-body">
                            <h4>YouthMobile Experts Meeting</h4>
                            <hr>
                            <img src="img/youthmobile.jpg" class="img-responsive img-centered" alt="">
                            <h6 class="text-faded" style="color:#000; text-align:center; white-space:!important; font-stretch:expanded">
                           The 1st YouthMobile Experts Meeting was held at UNESCO HQ on 19-20 March 2014. 
UNESCO has conducted a global search for the best, existing mobile applications training initiatives with openly-licensed training materials, and invited a selected group of training providers and app development tools makers.
MASH Project has been the only organisation to be selected from India and among 16 organisations selected from all over the world.
UNESCO seeks to extensively promote very high-quality, multi-lingual, comprehensive training materials for developing mobile apps. Openly-licensed, the training materials identified will allow for adaptations including translation, localization, and innovations. The YouthMobile experts meeting is part of UNESCO’s contribution to the 2014 celebrations for Open Education Week. Know more.

                           
                           </h6>
                           </div>
          </div>
  
        </div>
            
            
            <!--<div class="row wow fadeInRight">
                <div class="col-lg-12 text-center">
                    <h2>Press</h2>
                    <hr class="star-primary">
                    <p>
                    From our very inception, we have based our growth on the lines of infinite reach. Our online and offline audience have grown every passing day, owing to the authenticity of our notion and beliefs. Below are a few articles to know that'll help you know us better.
                    </p>
                </div>
            </div>
            <div class="row wow fadeInLeft">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                    <h5>TheAlternative.in </h5>
                    
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                    <h5>YouthMobile Experts Meeting</h5>
                </div>
                    
                    
        </div>
        </div>-->
        </div>
    </section>
                    
                  
    <section id="contact" class="bg-spr">
    <div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
            </div>
       <div class="container">
    <div class="row ">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form" class= "wow fadeInLeft">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group wow slideInLeft">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required>
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right btn-primary btn-xl" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4 wow fadeInRight">
			<div class="widget-contact">
				<h5>Main Office</h5>
				
				<address>
				  <strong>Squas Design, Inc.</strong><br>
				  Tower 795 Folsom Ave, Beautiful Suite 600<br>
				  ,india CA 94107<br>
				  <abbr title="Phone">P:</abbr> (123) 456-7890
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">email.name@example.com</a>
				</address>	
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<!--<footer>
		<div class="container">
			<div class="row wow fadeInUp">
				<div class="col-md-4 col-lg-4">
					
					<p>&copy;Copyright 2014 - Comapny name. All rights reserved.</p>
                     <a href="#page-top" class="btn btn-primary btn-xl page-scroll wow tada" data-wow-delay="0.7s">Back to top</a>
				</div>
                <div class="col-md-4 col-lg-4">
                <a  class="twitter-timeline" href="https://twitter.com/Shekharrajak" data-widget-id="571221306528366592">Tweets by @Shekharrajak</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			</div>
           </div>	
		</div>
	</footer>-->
    
    
    <footer id="footer">
    <div class="container">
    <br>
        <div class="row">
            <div class="col-md-4 col-md-push-4 col-xs-12">
                <div id="fb-root"></div>
                <div class="fb-page" data-href="https://www.facebook.com/MashProject" data-width="300" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/MashProject"><a href="https://www.facebook.com/MashProject">MASH Project</a></blockquote></div></div>

            </div>
            <div class="col-md-4 col-md-push-4 col-xs-12">
                <a class="twitter-timeline" href="https://twitter.com/MASH_Project" data-widget-id="516945100421603329">Tweets by @MASH_Project</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<a href="#page-top" class="btn btn-primary btn-xl btn-block btn-success page-scroll wow tada" data-wow-delay="0.7s">back to top</a>
            </div>
            <div class="col-md-4 col-md-pull-8 col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                         <ul class="text-center">
                            <li><a href="team.html">Our team</a></li><br>
                                                         <li class="divider"></li>

                            <li><a href="contributors.html">Our Contributors</a></li><br>
                                                         <li class="divider"></li>

                            <li><a href="http://goo.gl/U3Swie" target="_blank">Join</a></li><br>
                                                         <li class="divider"></li>

                         <!--   <li><a href="contact.html">Contact Us</a></li><br>
                                                         <li class="divider"></li>-->
                        </ul>
                    </div>
                   
                    <div class="col-xs-12">
                          <form class="form-horizontal">
                <br><br>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Subscribe:&nbsp;</label><br><br>	
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email"/>
                                </div>
                            </div>
                             <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      
                    </div>
                    
                   
                    
                </div>
                         </form>
                    </div>
                    
                     
                </div>
            </div>
        </div>
    </div>        
</footer>
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>
    
    <script>
	
$( "div.logospr" )
  .mouseover(function() {
   
    $( this ).removeClass("wow flash").addClass("wow tada");
  })
  .mouseout(function() {
    $( this ).find( "span" ).removeClass("wow tada").addClass("wow flash");
 
  });
  </script>
  
   <!-- use jssor.slider.min.js instead for release -->
    <!-- jssor.slider.min.js = (jssor.js + jssor.slider.js) -->
 <!--   <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>-->
    
    <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
  <!--  <script src="js/jquery.inview.min.js"></script>-->
 
<!--

    <script>

        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: false,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 3,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 3,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 0,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $DisableDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
    </script>-->
	<!--<script>
            jssor_slider1_starter('slider1_container');
        </script>-->
</body>

</html>
