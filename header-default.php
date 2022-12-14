
     <header id="header" class="header2 row p-0 m-0 g-0">
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




        <div class="header-container row g-0 p-0" id="header-container">
            <div class="col-5 hamburger-col pt-0 p-0 text-left">
                <div class="nav-box pt-1">
                    <button onclick="openNav();"><i class="fa-solid fa-bars fa-xl header-icon hamburger"></i></button> 

                    <div class="dropdown">
                        <button onclick="quickLinksMenuButton()" class="dropbtn d-none d-md-block">QUICK LINKS<span class="quick-links-spacer"></span><i class="fa-solid fa-angle-down quick-links-arrow"></i></button>
                        <button onclick="quickLinksMenuButton()" class="dropbtn d-md-none"><i class="fa-solid fa-angle-down quick-links-arrow"></i></button>
                        <div id="myDropdown" class="dropdown-content">
                            <?php wp_nav_menu( array( 'theme_location' => 'quick-links-header' ) ); ?>
                        </div>
                    </div>
                </div>          
            </div>
            
            <div class="col-2 logo-col text-center">
                <a href="<?php echo get_home_url(); ?>"><img alt="Kings Academy Logo" class="logo2 img-fluid"></a>
            </div>
                    
            <div class="social-col col-5 pt-1 p-0">
                <a href="https://twitter.com/kowessex" target="_blank" class="social-links"><i class="fa-brands fa-twitter header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>
                <a href="https://www.facebook.com/kowessex/" target="_blank" class="social-links"><i class="fa-brands fa-facebook-f header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>
                <button onclick="openSearch()" class="social-links"><i class="fa-solid fa-magnifying-glass header-icon"></i></button>
            </div>
        </div>
    </header>
