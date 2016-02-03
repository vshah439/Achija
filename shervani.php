
<!-- Main -->
<div id="main-wrapper">
		<div class="container">
					<div class="row">
							<div class="12u" style="padding-top: 0px;">

								
	                    	<ul class="flexy-menu flexy-menu-safe"><li style="display: none;" class="showhide"><span class="title">MENU</span><span class="icon"><em></em><em></em><em></em><em></em></span></li>
	                            <li><span class="collection-label">Our Collection : </span></li>
	                            <li><a ui-sref="shirts" >Shirts</a></li>
								<li><a ui-sref="short_kurta">Short Kurta</a></li>
								<li><a ui-sref="shervani">Shervani</a></li>
								<li><a ui-sref="kurta_payajama">Kurta Payjama</a></li>                        									                                
								   		
							 </ul> 
                       	<section>
									<div class="row no-pad-mar">
										<?php
										$dir = "images/shervani/";
										$dh  = opendir($dir);
										while (false !== ($filename = readdir($dh))) {
										if($filename !="." && $filename !="..") {
										?>
										<div class="4u 12u(mobile)" style="padding-top: 0px;">
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
		