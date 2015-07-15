<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Shekhar Prasad Rajak">

    <title><?php echo $title ; ?></title>

    <!-- Bootstrap Core CSS -->
    <!--<link rel="stylesheet" href="<? php echo base_url(); ?>css/bootstrap.min.css" type="text/css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css">
     <link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.gif">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" type="text/css">

   
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/project.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style_team.css" type="text/css">
    
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/intern_list.css" />
        
          
    <link href="<?php echo base_url(); ?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style_projectNew.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js" > </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.serialScroll.js" > </script>
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
