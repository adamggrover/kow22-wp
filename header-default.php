
     <header id="header" class="header2 row container-fluid p-0 m-0 ">
        <div class="container-fluid" id="header-search-container">
            <div class="container d-flex align-items-center search-input-box justify-content-between">
                <div class="search-left">
                    <i class="fa-solid fa-xl fa-magnifying-glass " id="site-search-icon"></i><input type="search" id="site-search" name="site-search" placeholder="Search the site">
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
                </div>          
            </div>
            
            <img alt="Kings Academy Logo" class="logo2 col-6">
                    
            <div class="social col-3 pt-4">
                <a href="https://twitter.com/kowessex" target="_blank" class="social-links"><i class="fa-brands fa-twitter header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>
                <a href="https://www.facebook.com/kowessex/" target="_blank" class="social-links"><i class="fa-brands fa-facebook-f header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>
                <button onclick="openSearch()" class="social-links"><i class="fa-solid fa-magnifying-glass header-icon"></i></button>
            </div>
        </div>
    </header>
