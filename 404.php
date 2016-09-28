/*
* Custom 404 Template for Bootstrap-based WordPress themes
* Designer: Alexander P. Floyd Marshall, Soren LLC
* url: http://soren.tech
* version: 0.3
* contact: joysandconcerns@soren.tech
* contribute by forking and issuing a pull-request on git hub
* installation and use: add a submodule to your theme repository, then use get_template_part ('404/404'); wherever you need to include this file in your theme
*/

<div class="container-fluid 404-container" style="background-image: url('https://media.giphy.com/media/fRZn2vraBGiA0/giphy.gif'); background-size: cover; background-position: center center; padding: 16px;" >
     <div class="row 404-logo-row">
     	  <div class="col-xs-10 col-xs-offset-1 404-logo">
	      <img src="https://s3.amazonaws.com/SorenTech/media/404.png" class="404-logo" />
	  </div><!-- 404-logo -->
     </div><!-- logo-row -->
     <div class="row 404-text-row">
     	  <div class="col-sm-4 col-xs-offset-2 404-explanation" style="color: white">
	       <h1>Oops!</h1>
	       <p>We can't seem to find the page you requested.</p>
	       <p>Sorry to leave you swimming!</p>
	       <p>We recommend you try one of the following:<p>
	       <ul>
	           <li>Return <a title="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" role="home">home</a></li>
		   <li>Use the search bar above to try to find your page</li>
		   <li>Check your spelling to make sure you are searching for the right thing</li>
		   <li>Email <a title="Soren LLC" href="http://soren.tech">S&oslash;ren</a> to <a title="Soren feedback email" href="mailto:joysandconcerns@soren.tech">report an issue</a></li>
		   <li>Take a snack break</li>
	        </ul>
	  </div><!-- 404-explanation -->
	  <div class="row search-row">
	      <div class="col-xs-8 col-xs-offset-4 search-form">
		  <?php get_search_form(); ?>
	      </div><!-- search-form -->
	  </div><!-- search-row -->
     </div><!-- 404-text-row -->
</div><!-- 404-container -->
