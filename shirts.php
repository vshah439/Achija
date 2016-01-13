



<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						
					
					<div class="row">
							<div class="12u">

								<!-- Portfolio -->
									<section>
									
										<header class="major collection">
											<h2>Shirts</h2>
										</header>
										<div class="row no-pad-mar">
										
										<?php
										$dir = "images/shirts/";
										$dh  = opendir($dir);
										while (false !== ($filename = readdir($dh))) {
										if($filename !="." && $filename !="..") {
										?>
										<div class="4u 12u(mobile)">
												<section class="box">
													<a href="<?php echo $dir.$filename?>"  title="This is the description" rel="grouped_elements" class="image featured"><img class=" " src="<?php echo $dir.$filename?>" alt="" /></a>
													
													
												</section>
											</div>
   									
										<?php	
											}	
										}
										?>
										
									</section>

							</div>
						</div>
						
					</div>
				</div>
				<script>
				$(document).ready(function(){
					scrollToTop();
				});
				
$(document).ready(function() {

	
	/* Apply fancybox to multiple items */
	var $= jQuery.noConflict();
	$("a[rel=grouped_elements]").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	true
	});
	
});

</script>		
		