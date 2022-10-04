<?php
    get_header();
?>

<div class="container" id="single-post-main-page-area">
    <div class="content-header row">
                    <div class="content-header-breadcrumb col-lg-6 col-md-12">
                        <i class="fa-solid fa-house fa-xs"></i><span class="breadcrumb-spacer"></span>
                        <h6 class="mb-0 content-header-breadcrumb-links"><?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?></h6>
                        

                    </div>
                    <div class="content-header-social col-lg-6 col-md-12">
                        <h6 class="mb-0">Share This Page</h6><span class="breadcrumb-spacer"></span>
                        <div class="content-area-social-links">
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"><i class="fa-brands fa-twitter fa-sm ps-2"></i></a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank"><i class="fa-brands fa-facebook-f fa-sm ps-2"></i></a>
                            <a href="mailto:office@kowessex.co.uk"><i class="fa-solid fa-envelope fa-sm ps-2"></i></a>   

                        </div>
                        
                        
                    </div>
                </div>

            <div class="content-area row">
                <div class="post-content-column col-12">
                    
                    <h1 id="content-h1">News</h1>

                    <h2 id="content-subheading">EPQ Student Interview</h2>

                    <div id ="post-image-container">
                        <img src="Assets/images/art-girls.jpg" alt="" id="post-image">


                    </div>

                    <div class="content-body">


                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();
                            get_template_part('template-parts/content', 'news');
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
                        ?>
                    </div>
                </div>

            </div>
        </div>
       

        
    



  




<?php
    get_footer();
    ?>