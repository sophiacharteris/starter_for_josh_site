<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->
<section class="container-fluid aboutbg text-center">
    <div class="container">
    <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
    <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
    <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

    <div class="blocker"></div>
    </div> <!-- container -->
</section>

<section class="container-fluid articlesbg">
    <div class="container">
        <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
        <div class="row">

<div class="col-md-4">
<?php
$image = get_field('articleimage_port1');?>
<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
<h4 class="article-title"><?php the_field('articletitle_left'); ?></h4>
<p class="date" ><?php the_field('articledate_left'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt_left'); ?> </p>
<a href="<?php the_field('readmore_left'); ?>" class="readmore">CONTINUE READING</a>
</div>

<div class="col-md-4">
<?php
$image = get_field('articleimage_port2');?>
<img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
<h4 class="article-title"><?php the_field('articletitle_middle'); ?></h4>
<p class="date" ><?php the_field('articledate_middle'); ?></p>
<p class="article-p"><?php the_field('articleexcerpt_middle'); ?> </p>
<a href="<?php the_field('readmore_middle'); ?>" class="readmore">CONTINUE READING</a>
    </div>

    <div class="col-md-4">
    <?php
        $image = get_field('articleimage_port3');?>
        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <h4 class="article-title"><?php the_field('articletitle_right'); ?></h4>
        <p class="date" ><?php the_field('articledate_right'); ?></p>
        <p class="article-p"><?php the_field('articleexcerpt_right'); ?> </p>
        <a href="<?php the_field('readmore_right'); ?>" class="readmore">CONTINUE READING</a>
        </div>

        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->