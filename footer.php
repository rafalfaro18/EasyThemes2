
<!-- Footer -->


<footer class="bg4" >



	<div class="container-fluid  text-right">
		<div class="row">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer_left' ); ?>
				</div><!-- End Widget footer left .col-md-4 -->
				<div class="col-md-4">
					<?php dynamic_sidebar( 'footer_center' ); ?>
				</div><!-- End Widget footer center .col-md-4 -->

				<div class="col-md-4">
				<?php dynamic_sidebar( 'footer_right' ); ?>	
				</div><!-- End Widget footer right .col-md-4 -->

		</div><!-- End .row -->
	</div><!-- End .container -->


		
      
	
</footer>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> USE wp_enqueue_script  -->
	<!--	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> USE wp_enqueue_script Will CLASH with Walker Menu Script -->
	<?php wp_footer(); ?>	<!-- Adds Injection Point to Footer REQUIRED -->
</body>
</html>
