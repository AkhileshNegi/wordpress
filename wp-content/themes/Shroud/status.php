<?php /* Template Name: status */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Thankyou</title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">
	<style>
	.clr {
		color: green;
	}
	div.gallery {
	    margin: 5px;
	    border: 1px solid #ccc;
	    float: left;
	    width: 180px;
	}
	div.gallery:hover {
	    border: 1px solid #777;
	}
	div.gallery img {
	    width: 100%;
	    height: auto;
	}
	div.desc {
		padding: 15px;
		text-align: center;
	}
	</style>
</head>
<body>
	<div class="blog-masthead">   
	  <div class="container">
			<nav class="blog-nav">
			<a class="blog-nav-item " href="../">Home</a>
			<a class="blog-nav-item " href="registration">Registration</a>
			<a class="blog-nav-item active" href="status">Status</a>
			</nav>
	  </div>
	</div>
    <div class="container">
		<div class="blog-header">
			<h4 class="blog-title"><font face="Gloucester MT">Attendees</font></h4>
			<p class="lead blog-description"><h2><font face="Freestyle Script">
				To have a quick look of people attending the party</font></h2>
			</p>
		</div>
		<div class="row">
			<div class="col-sm-8 blog-main">
          		<div class="blog-post">
            		<h4 class="blog-title"><font face="Gloucester MT">Invited People</font></h4>
              		<p class="blog-post-meta"><h2><font face="Freestyle Script">For the upcoming party</font></h2> </p>
						<div class="container">
				<?php
					$args = array(
							'post_type' => 'guest',
							'post_status' => 'publish',
							'meta_key' =>'guest_status',
							'meta_value' =>'accepted',
							'posts_per_page' => '-1'
					);
				$guest_accepted = new WP_Query($args);
					if($guest_accepted->have_posts()) : 
						while($guest_accepted->have_posts()) : 
						$guest_accepted->the_post();
				?>
        			 <h3><span class="glyphicon glyphicon-ok clr">&nbsp</span><?php the_title() ?></h3>
     					 <div class='post-content'>
      			<?php 
      			the_content()
      			?>
      					 </div>      
				<?php
     				endwhile;
   					else: 
				?>
   					No Guests are Confirmed Yet!
				<?php
   					endif;
				?>
					</div>
				</div><br/>
        			  <div class="blog-post">
            				<h2 class="blog-title">Highlights</h2>
            				<p class="blog-post-meta">May 5, 2018</p>
           				<div class="gallery">
  							<a target="_blank" href="Cheers!.jpg">
    						<img src="<?php echo get_bloginfo('template_directory'); ?>/img/drnk.jpg" alt="Cheers!" width="300" height="200">
 							</a>
  								<div class="desc">Cheers
  								</div>
						</div>
						<div class="gallery">
  						<a target="_blank" href="dance.jpg">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/img/dance.jpg" alt="Disco" width="300" height="200">
						</a>
							<div class="desc">Dance</div>
						</div>
						<div class="gallery">
							<a target="_blank" href="songs.jpg">
							<img src="<?php echo get_bloginfo('template_directory'); ?>/img/songs.jpg" alt="Melody" width=300" height="200">
							</a>
							<div class="desc">Music
							</div>
						</div>
  			</div>
 		</div>
        	<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          		<div class="sidebar-module sidebar-module-inset">
		            <h4>About Lake Fest</h4>
		           <p>Lakefest is a fairly new festival, which began as a music and cider festival, yet in its second year has booked big UK bands propelling it to the status of a full blown music festival.Lakesfest grew out from when Croft Farm Waterpark hosted its music and cider festival on 9th April 2011[1] It was attended by just over 1,500 people consuming 8,500 pints of cider. Bands including The Stages of Dan, The Roving Crows and The Wurzels starred. Classic West Country games like Welly Wanging and skittles were available to play with a prizes up for grabs. The feedback was so positive that planning went immediately into "Lakefest".</p>
          </div>
        	</div>
  		</div>
	</div>
    <footer class="blog-footer">
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
  	</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
 	</script>
</body>
</html>