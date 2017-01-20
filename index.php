<?php get_header(); ?>
		<div class="row">
			<div class="col-sm-8 blog-main">
				<?php get_template_part( 'content', get_post_format() );?>
			</div>
			<!-- <div class="col-md-12">
				<h2>Gettin' hitched!</h2>
				<table>
					<tr>
						<td>When</td>
						<td>Day of the Week, Month Day, Year</td>
					</tr>
					<tr>
						<td>Time</td>
						<td>00:00 pm</td>
					</tr>
					<tr>
						<td>Where</td>
						<td><a href="<?php bloginfo('template_directory');?>/location.php">Venue, Los Angeles, CA</a></td>
					</tr>
				</table>
				<button>Where to stay</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<button>RSVP</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2>The playas</h2>
				<h4>Our wedding party</h4>
				<img src="#" alt="photo of wedding party member 1">
				<p>Name</p>
				<h4>Our family</h4>
				<img src="#" alt="photo of family">
				<p>Name</p>
			</div> -->
		</div>
<?php get_footer(); ?>