<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container">
    <h1>Portfolio</h1>
    <div class="row">
        <div class="col-6">
            <a href="#">Sites</a>
        </div>
        <div class="col-6">
            <a href="#">Gallery</a>
        </div>
    </div>
</div>
<div class="container-fluid">
    
    <?php 
        for($i = 1; $i <= 10; $i++){?>
            <div class="row ">
                <div class="col-6">
                    <div class="SiteImage" style="background-image: url('/wp-content/uploads/2019/03/Untitled.png')"></div>
                </div>
                <div class="col-6">
                    <h2>Title of Site</h2>
                    <p>Lorem ipsum dolor sit amet, laoreet nibh iaculis metus sit ad, aenean commodo in sociosqu vestibulum dolor, ultricies cras tempus ac sollicitudin. Curabitur vestibulum tincidunt rhoncus massa parturient, magna accumsan varius est ligula, donec ligula at quisque dui leo, aliquam ut sed faucibus nam nullam. Nunc donec, scelerisque et neque, quis odio elementum pharetra. Ante magna mollis mollis. Interdum nec culpa. Curabitur lectus ut pede vitae, in sed volutpat, bibendum mollis ipsum erat sed, nec ullamcorper vestibulum sapien.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h2>Title of Site</h2>
                    <p>Lorem ipsum dolor sit amet, laoreet nibh iaculis metus sit ad, aenean commodo in sociosqu vestibulum dolor, ultricies cras tempus ac sollicitudin. Curabitur vestibulum tincidunt rhoncus massa parturient, magna accumsan varius est ligula, donec ligula at quisque dui leo, aliquam ut sed faucibus nam nullam. Nunc donec, scelerisque et neque, quis odio elementum pharetra. Ante magna mollis mollis. Interdum nec culpa. Curabitur lectus ut pede vitae, in sed volutpat, bibendum mollis ipsum erat sed, nec ullamcorper vestibulum sapien.
                    </p>
                </div>
                <div class="col-6">
                    <div class="SiteImage" style="background-image: url('/wp-content/uploads/2019/03/Untitled.png')"></div>
                </div>
            </div>
        <?php }?>
    
</div>





<?php get_footer(); ?>
