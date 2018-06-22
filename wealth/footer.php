<?php
/**
 * The template for displaying the footer
 */
 global $wealth_option; 
?>
<?php 
    if(isset($wealth_option['footer_layout']) and $wealth_option['footer_layout']=="footer2" ){
        get_template_part('framework/footers/footer2');
	}else{  
?>
<div class="lp-footer-1" id="lp-footer"><!--footer-->  
  	<div class="container">
	    <div class="row">
	      	<div class="col-md-12 center">
	      		<?php echo wp_kses( $wealth_option['footer_text'], wp_kses_allowed_html('post') ); ?>
	      	</div>	      
	    </div>
  	</div>
</div>
<?php } ?>
<!--/.tiny-footer--> 
<a href="#" class="cd-top" title="Go to top">Top</a> 

<?php wp_footer(); ?>
</body>
</html>