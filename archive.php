<?php
    get_header();
?>

<div class="container" id="blog-archive-main-page-area">
    <div class="content-header row gx-5">
                    <div class="content-header-breadcrumb col-lg-6 col-md-12">
                        <i class="fa-solid fa-house fa-xl"></i><span class="breadcrumb-spacer"></span>
                        <h6 class="mb-0 content-header-breadcrumb-links"><small><?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?></small></h6>
                        

                    </div>
                    <div class="content-header-social col-lg-6 col-md-12">
                        <h6 class="mb-0"><small>Share This Page</small></h6><span class="breadcrumb-spacer"></span>
                        <div class="content-area-social-links">
                            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"><i class="fa-brands fa-twitter fa-sm ps-2 fa-xl"></i></a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank"><i class="fa-brands fa-facebook-f ps-2 fa-xl"></i></a>
                            <a href="mailto:office@kowessex.co.uk"><i class="fa-solid fa-envelope fa-sm ps-2 fa-xl"></i></a>   

                        </div>
                        
                        
                    </div>
                </div>

            <div class="content-area row gx-5">
                <div id="post-content-column col-12">
                    
                    <h1 id="content-h1">News</h1>




                    <div class="content-body">

                    <div class="row row-cols-1 row-cols-md-3 g-4">

                     


                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();

                            get_template_part('archive', 'news');

                            
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
                        ?>



                     

                        


                        </div>


                        <div class="content-footer">

                        	

                        <?php the_posts_pagination( array(
                        'prev_text'  => __( '??? Previous' ),
                        'next_text'  => __( 'Next ???' ),
                        ) );
                        ?>

                 

           

                        </div>


                </div>

            </div>
        </div>
       

        
    



  




<?php
    get_footer();
    ?>