<div class="hero-wrapper" id="hero-wrapper">
     <header id="header" class="header1 row containerp-0 m-0 ">
        <div class="container" id="header-search-container">
            <div class="container d-flex align-items-center search-input-box justify-content-between">
                <div class="search-left">
                <?php get_search_form(); ?>

                </div>
                <div class="search-right">
                    <button onclick="closeSearch()">
                        <i class="fa-solid fa-xmark fa-lg mb-3"></i>                        
                    </button>
                </div>
            </div>
        </div>

        <div class="header-container" id="header-container">
            <div class="col-3 hamburger-col pt-0 text-left">
                <div class="nav-box pt-3">

                    <button onclick="openNav();"><i class="fa-solid fa-bars fa-xl header-icon hamburger"></i></button> 

                    <div class="dropdown">
                        <button onclick="quickLinksMenuButton()" class="dropbtn">QUICK LINKS<i class="fa-solid fa-angle-down quick-links-arrow"></i></button>
                        <div id="myDropdown" class="dropdown-content">
                        <?php wp_nav_menu( array( 'theme_location' => 'quick-links-header' ) ); ?>
                        </div>
                    </div>

                </div>          
            </div>
            
            <img alt="Kings Academy Logo" class="logo1 col-6">
                    
            <div class="social col-3 pt-4">
                <a href="https://twitter.com/kowessex" target="_blank" class="social-links"><i class="fa-brands fa-twitter header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>
                <a href="https://www.facebook.com/kowessex/" target="_blank" class="social-links"><i class="fa-brands fa-facebook-f header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>
                <button onclick="openSearch()" class="social-links"><i class="fa-solid fa-magnifying-glass header-icon"></i></button>
            </div>
        </div>
    </header>



  <!--
    
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>  

-->
     
    <div class="slider">


       
        <div class="slide">
            <video id="hero-video" autoplay muted loop class="slide hero-video animate__animated animate__fadeIn" poster="data:image/gif,AAAA">
                <source src="wp-content/themes/kow22/Assets/video/kowcut-v2.mp4" type="video/mp4">
                
            </video>
            <div class="overlay-hero"></div>
        </div>
        <div class="slide">
          <img class="slide"src="wp-content/themes/kow22/Assets/images/teacher-and-kids.jpg" alt=""> 
            <div class="overlay-hero"></div>
        </div>
        <div class="slide">
            <img class="slide"src="wp-content/themes/kow22/Assets/images/boy-on-pc.jpg" alt="">
            <div class="overlay-hero"></div>
        </div>
        <div class="slide">
            <img class="slide"src="wp-content/themes/kow22/Assets/images/sixth-formers.jpg" alt="">
            <div class="overlay-hero"></div>
        </div>
        
    </div>

    
        <div class="hero-arrow-container text-center">
            <a class="hero-arrow " href="#welcome"><i class="fa-solid fa-circle-arrow-down fa-2x animate__animated animate__fadeIn animate__delay-2s animate__slower"></i></a>
        </div>
        <div class="hero-banner-text-container">
            <h4 class="hero-banner-text text-center h2 text-white animate__animated animate__fadeIn  animate__slower">Believe and Succeed!</h4>
        </div>
    

    <div class="announcement-component animate__animated animate__fadeInRight animate__delay-2s">       

            <div class="announcement-wrapper p-2 " id="announcement-wrapper">
                <div class="announcement-box col-4 d-none d-lg-block">
                    <div class="title-line">
                        <h5 class="announcements-title">Annoucements</h5>
                        <button class="announcement-close-btn" onclick="announcementClose()">
                            <i class="fa-solid fa-xmark"></i>                        
                        </button>
                    </div>

                        <div class="announcement-slider">

                            <?php $query = new WP_Query( [
                                'post_type'      => 'announcements',
                                'nopaging'       => true,
                                'posts_per_page' => '1',
                            ] ); ?>

                        
                            
                            <?php if ( $query->have_posts() ) : ?>
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                                <div class="announcement-content">

                                
                                <h6><?php the_title(); ?></h6>

                                <p><?php the_date(); ?></p>
                                
                                <a class="announcement-link" href="<?php the_permalink();?>">Read More</a>  
                                </div>   
                                <?php endwhile; ?>
                                <?php endif; ?>

                            <?php wp_reset_postdata(); ?>
                           
                            
                            

                            


                
                            
                            


                        </div>
                </div>
                
            </div>
            
            <a id="bell-button" class="bell-button-mobile d-lg-none" href="#announcement-section" >
            <div class="bell-background">                      
                
                <i class="fa fa-bell faa-ring animated fa-md ringing-bell"></i>
            </div>
            </a>

            <a id="bell-button" class="bell-button-desktop d-none d-lg-block" href="https://google.com" >
                <div class="bell-background">                      
                    
                    <i class="fa fa-bell faa-ring animated fa-md ringing-bell"></i>
                </div>
            </a>

     </div>



     

   

   


</div>

<section id="announcement-section">

    <div class="container-fluid pt-5 ps-5 d-lg-none" id="announcement-area">
        <div class="announcement-div-container-box"></div>
        <h2>Announcements</h2>
            <div class="announcement-div-slider animate__animated animate__fadeIn animate__slower animate__delay-1s" id="announcement-slider-div">
            <div class="announcement-slider">

                <?php $query = new WP_Query( [
                    'post_type'      => 'announcements',
                    'nopaging'       => true,
                    'posts_per_page' => '1',
                ] ); ?>



                <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <div class="announcement-div-content">

                    
                        <h5><?php the_title(); ?></h5>
                        <h6><?php the_date(); ?></h6>
                        <p><?php the_excerpt(); ?></p>
                        
                        <a class="announcement-link" href="<?php the_permalink();?>">Read More</a>  
                        </div>   
                        <?php endwhile; ?>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>

             </div>
        </div>

</section>









