<footer class="container-fluid text-center">
<div class="container">
    <div class="row">
        <div class="col-md-6">
           <!-- <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange"> WHITKIN</span></a> -->
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?>


            <div class="col-md-6">
               <!--  <p>Terms and Conditions</p> -->
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?>

                </div>
        </div> <!-- column-->
    </div> <!-- row -->
</footer>
<?php wp_footer(); ?>