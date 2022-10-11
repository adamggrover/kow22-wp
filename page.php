<?php
    get_header();
    ?>

<div class="header-image">
<?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>

    </div>

<div class="container" id="main-page-area">
            <div class="content-header row">
                <div class="content-header-breadcrumb col-lg-5 col-md-12">
                    <i class="fa-solid fa-house fa-xl"></i><span class="breadcrumb-spacer"></span>
                    <h6 class="mb-0 content-header-breadcrumb-links"><?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?></h6>
                    

                </div>
                <div class="content-header-social col-lg-4 col-md-12">
                    <h6 class="mb-0">Share This Page</h6><span class="breadcrumb-spacer"></span>
                    <div class="content-area-social-links">
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"><i class="fa-brands fa-twitter ps-2 fa-xl"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank"><i class="fa-brands fa-facebook-f ps-2 fa-xl"></i></a>
                        <a href="mailto:office@kowessex.co.uk"><i class="fa-solid fa-envelope ps-2 fa-xl"></i></a>   

                    </div>
                    
                    
                </div>
            </div>
            <div class="content-area row">
                <div class="col-lg-9 content-column">
                    
                    <h1 id="content-h1"><?php the_title(); ?></h1>

                    <div class="content-body">

                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
                        ?>



                    </div>
                </div>
                <div class="col-lg-3" id="sidebar-section-nav-col">
                    <div id="sidebar-section-nav">
                        <div id="SideNav">
                        	
                    
    
                              </div>
                            </div>
                          </div>

                    </div>

                </div>
            </div>
        </div>
       




<?php
    get_footer();
    ?>