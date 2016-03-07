<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<ul id="home-slideshow">
	<?php 
		// arrays of custom field_names --not sure how to grab this info from ACF
		$images = array('background_image_1', 'background_image_2', 'background_image_3', 'background_image_4', 'background_image_5');
		$headers = array('header-1', 'header-2', 'header-3', 'header-4', 'header-5',); //place header info
		$subheaders = array('sub-header_1', 'sub-header_2', 'sub-header_3', 'sub-header_4', 'sub-header_5',);
		// foreach loop leveraged from user 'cHao' @ http://stackoverflow.com/questions/10326346/how-to-use-multiple-arrays-in-single-foreach-loop
		foreach($images as $key => $image) {
			$header = $headers[$key];
			$subheader = $subheaders[$key];
			$background = get_field($image);//this grabs an array of info on the field $image
			echo '<li style="background: url(\'';
			echo $background['url']; //this will grab the img src and set it to the background style
			echo '\') no-repeat; background-position: 50% 50%; background-size: cover">';
			echo '<div id="';
			echo $background['title'];//set unique id for each div using img title
			echo '">';
			echo '<h2>';
			echo the_field($header);
			echo '</h2>';
			echo '<p>';
			echo the_field($subheader);
			echo '</p>';
			echo '</div>';
			echo '</li>';
		
		}
	?>
</ul>

<?php get_footer(); ?>