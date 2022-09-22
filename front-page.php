<?php
    get_header();
?>

    

<main>
    
<div class="hero-wrapper" id="hero-wrapper">
     <header id="header" class="header1 row container-fluid p-0 m-0 ">
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
            
            <img alt="Kings Academy Logo" id="logo1" class="logo1 col-6">
                    
            <div class="social col-3 pt-4">
                <a href="https://twitter.com/kowessex" target="_blank" class="social-links"><i class="fa-brands fa-twitter header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>
                <a href="https://www.facebook.com/kowessex/" target="_blank" class="social-links"><i class="fa-brands fa-facebook-f header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>
                <button onclick="openSearch()" class="social-links"><i class="fa-solid fa-magnifying-glass header-icon"></i></button>
            </div>
        </div>
    </header>

   

  
        
     
    <div class='slider'>

       
        <div class="">
            <video autoplay muted loop class="slide hero-video animate__animated animate__fadeIn">
                <source src="wp-content/themes/kow22/Assets/video/kowcut-v2.mp4" type="video/mp4">
                
            </video>
            <div class="overlay-hero"></div>
        </div>
        <div class='slide slide-img'>
          <img class="slide"src="wp-content/themes/kow22/Assets/images/teacher-and-kids.jpg" alt=""> 
            <div class="overlay-hero"></div>
        </div>
        <div class='slide'>
            <img class="slide"src="wp-content/themes/kow22/Assets/images/boy-on-pc.jpg" alt="">
            <div class="overlay-hero"></div>
        </div>
        <div class='slide'>
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
                    <div class="title-line d-flex justify-content-between">
                        <h5>Annoucements</h5>
                        <button onclick="announcementClose()">
                            <i class="fa-solid fa-xmark"></i>                        
                        </button>
                    </div>

                        <div class="announcement-slider">
                            <div class="announcement-content">
                                <p class="announcement-preview pb-4">The school will be closed on April 1st</p>
                                <a class="announcement-link" href="https://google.com">Read More</a>  
                            </div> 

                            <div class="announcement-content">
                                <p class="announcement-preview pb-4">Kings is the best!</p>
                                <a class="announcement-link" href="https://google.com">Read More</a>  
                            </div> 
                            
                            


                        </div>
                </div>
                
            </div>
            
            <a id="bell-button" class="bell-button-mobile d-lg-none" href="#announcement-section" >
            <div class="bell-background">                      
                
                <i class='fa fa-bell faa-ring animated fa-md ringing-bell'></i>
            </div>
            </a>

            <a id="bell-button" class="bell-button-desktop d-none d-lg-block" href="https://google.com" >
                <div class="bell-background">                      
                    
                    <i class='fa fa-bell faa-ring animated fa-md ringing-bell'></i>
                </div>
            </a>

     </div>



     

   

   


</div>

<section id="announcement-section">

    <div class="container-fluid pt-5 ps-5 d-lg-none" id="announcement-area">
        <div class="announcement-div-container-box"></div>
        <h2>Announcements</h2>
            <div class="announcement-div-slider animate__animated animate__fadeIn animate__slower animate__delay-1s" id="announcement-slider-div">
                <div class="announcement-div-content">
                    <p class="announcement-preview">The school will be closed on April 1st</p>
                    <a class="announcement-link" href="https://google.com">Read More</a>  
                </div> 

                <div class="announcement-div-content">
                    <p class="announcement-preview">Kings is the best!</p>
                    <a class="announcement-link" href="https://google.com">Read More</a>  
                </div> 
                    
            </div>
        </div>
    </div>

</section>
    
    
    <main>
        
<!-- New welcome section-->
    <section id="welcome">

        <div class="welcome-background pt-4 pb-4">

            <div class="container">

                <div class="row p-5">

                    <div class="col-lg-6 d-flex align-items-center pt-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
                        <div class="left-welcome-content col-10 p-0">
                                <h3 CLASS="h2">WELCOME</h3>
                            <h4 class="mt-2">TO KINGS OF WESSEX ACADEMY</h4>
                            <p class="mt-4 mb-4">"We are delighted that you wish to find out about our school – a place that we consider to be a fantastic community to work and to learn. By ensuring your child’s happiness remains our first priority, we know they will go onto achieve their full potential here with us."</p>
                            <a href="" class="">READ MORE</a>
                        </div>
                    </div>   
                    <div class="welcome-right-background col-lg-6 pt-5">
                        
                        <div class="welcome-img-container pe-5" data-aos="fade-left" data-aos-delay="600" data-aos-duration='800'>
                            <img src="wp-content/themes/kow22/Assets/images/teacher-and-child.jpg" alt="Teacher explaining something to two children" class="img-fluid welcome-img">
                        </div>
                        
        
                    </div>

                </div>  


            </div>

        </div>
              

        <!-- New links section-->

        <div class="container p-5">
            <div class="row mb-5">
              
         <div class="col-sm-3 p-2">
                
                
          
          <div class="img-container img-link-1" style="position: relative;
          width: 100%;" data-aos="fade-up" data-aos-delay="200">


            <a href="https://www.google.com">
            <div class="mask" style="  position: absolute;
            background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(20, 20, 20, 0.3));
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;"></div>    
            
            <img src="wp-content/themes/kow22/Assets/images/hockey-church.jpg" alt="Avatar" class="image" style="width: 100%;
            max-height: 200px;
            object-fit:cover;">
            <div class="text h6" style="  color: white;
            
            position: absolute;
            left: 50%;
            bottom: 0;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;">Prospectus</div>

            <div class="overlay" 
            onMouseOver="this.style.opacity='1'"
            onMouseOut="this.style.opacity='0'"
            style="  position: absolute;
            opacity: 0;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            
            transition: .5s ease;
            background-color: rgba(192, 214, 48, 0.85);">
            
              <div class="text h6" style="  color: white;
              
              position: absolute;
              left: 50%;
              bottom: 0;
              -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
              text-align: center;">Prospectus</div>
            </div>
          </div>
        </a>
         </div>

         <div class="col-sm-3 p-2">
                
                
          
            <div class="img-container img-link-2" style="position: relative;
            width: 100%;" data-aos="fade-up" data-aos-delay="600">
  
  
              <a href="https://www.google.com">
              <div class="mask" style="  position: absolute;
              background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(20, 20, 20, 0.3));
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;"></div>    
              
              <img src="wp-content/themes/kow22/Assets/images/microsope.jpg" alt="Avatar" class="image" style="width: 100%;
              max-height: 200px;
              object-fit:cover;">
              <div class="text h6" style="  color: white;
              
              position: absolute;
              left: 50%;
              bottom: 0;
              -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
              text-align: center;">Firefly</div>
  
              <div class="overlay" 
              onMouseOver="this.style.opacity='1'"
              onMouseOut="this.style.opacity='0'"
              style="  position: absolute;
              opacity: 0;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;
              
              transition: .5s ease;
              background-color: rgba(192, 214, 48, 0.85);">
              
                <div class="text h6" style="  color: white;
                
                position: absolute;
                left: 50%;
                bottom: 0;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;">Firefly</div>
              </div>
            </div>
          </a>
           </div>

           <div class="col-sm-3 p-2">
                
                
          
            <div class="img-container img-link-3" style="position: relative;
            width: 100%;" data-aos="fade-up" data-aos-delay="700">
  
  
              <a href="https://www.google.com">
              <div class="mask" style="  position: absolute;
              background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(20, 20, 20, 0.3));
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;"></div>    
              
              <img src="wp-content/themes/kow22/Assets/images/violin.jpg" alt="Avatar" class="image" style="width: 100%;
              max-height: 200px;
              object-fit:cover;">
              <div class="text h6" style="  color: white;
              
              position: absolute;
              left: 50%;
              bottom: 0;
              -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
              text-align: center;">Safegaurding</div>
  
              <div class="overlay" 
              onMouseOver="this.style.opacity='1'"
              onMouseOut="this.style.opacity='0'"
              style="  position: absolute;
              opacity: 0;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;
              
              transition: .5s ease;
              background-color: rgba(192, 214, 48, 0.85);">
              
                <div class="text h6" style="  color: white;
                
                position: absolute;
                left: 50%;
                bottom: 0;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;">Safegaurding</div>
              </div>
            </div>
          </a>
           </div>

           <div class="col-sm-3 p-2">
                
                
          
            <div class="img-container img-link-4" style="position: relative;
            width: 100%;" data-aos="fade-up" data-aos-delay="800">
  
  
              <a href="https://www.google.com">
              <div class="mask" style="  position: absolute;
              background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(20, 20, 20, 0.3));
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;"></div>    
              
              <img src="wp-content/themes/kow22/Assets/images/sixth-formers.jpg" alt="Avatar" class="image" style="width: 100%;
              max-height: 200px;
              object-fit:cover;">
              <div class="text h6" style="  color: white;
              
              position: absolute;
              left: 50%;
              bottom: 0;
              -webkit-transform: translate(-50%, -50%);
              -ms-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
              text-align: center;">Payments</div>
  
              <div class="overlay" 
              onMouseOver="this.style.opacity='1'"
              onMouseOut="this.style.opacity='0'"
              style="  position: absolute;
              opacity: 0;
              top: 0;
              bottom: 0;
              left: 0;
              right: 0;
              height: 100%;
              width: 100%;
              
              transition: .5s ease;
              background-color: rgba(192, 214, 48, 0.85);">
              
                <div class="text h6" style="  color: white;
                
                position: absolute;
                left: 50%;
                bottom: 0;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;">Payments</div>
              </div>
            </div>
          </a>
           </div>
            
          

            
              

              
            </div>
            
          </div>


          

            
         
              
      </section>





        <!--NEWS LINKS SECTION-->

        <section id="news">

            <div class="section-headings text-center row">
                <h2 class="mt-5 mb-3 section-title">Latest News</h2>
                <a href="" class="mb-3 section-link">VIEW ALL NEWS</a>
            </div> 

            <div class="container mb-5 ps-5 pe-5">
                <div class="row mb-5 mt-5 " data-aos="fade-up" data-aos-delay="100">
                
            <div class="col-sm-4 p-4">
                    
                    
            
            <div class="img-container img-link-1" style="position: relative;
            width: 100%;" >


                <a href="https://www.google.com" class="news-card">
                
            
                    <div class="card shadow">
                            
                        <img src="wp-content/themes/kow22/Assets/images/3d-printer.jpg" class="card-img-top" style="width: 100%;
                        max-height: 70%;
                        object-fit:cover;" alt="...">

                        
                    
                    <div class="card-body p-3 d-flex-column" id ="news-card-body1">
                        <h6 class="card-link-text news-tags">TECHNOLOGY, COMPETITIONS</h6>
                        <h4 class="card-link-text news-title">Technology Competition</h4>
                        <p class="card-link-text news-date"><small>Sept 2022</small></p>
                    </div>
                </div>

                
                <div class="overlay" id="overlay1" 
                onMouseOver="opacityFunction(); zIndexFuction();"
                
                onMouseOut="opacityFunctionR(); zIndexFuctionR();"
                style="  position: absolute;
                opacity: 0;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                
                transition: .5s ease;
                background-color: rgba(192, 214, 48, 0.90);">
                
        
            </div>
            

            </a>
            </div>
            </div>

            <div class="col-sm-4 p-4">
                    
                    
            
                <div class="img-container img-link-1" style="position: relative;
                width: 100%;">
    
    
                 <a href="https://www.google.com" class="news-card">
                
            
                    <div class="card shadow">
                            
                        <img src="wp-content/themes/kow22/Assets/images/art-girls.jpg" class="card-img-top" style="width: 100%;
                        max-height: 70%;
                        object-fit:cover;" alt="...">
    
                        
                    
                    <div class="card-body p-3 d-flex-column" id ="news-card-body2">
                        <h6 class="card-link-text news-tags">STUDENTS, ART</h6>
                        <h4 class="card-link-text news-title">EPQ Student Experience</h4>
                        <p class="card-link-text news-date"><small>Sept 2022</small></p>
                    </div>
                </div>
    
                
                <div class="overlay" id="overlay2" 
                onMouseOver="opacityFunctionTwo(); zIndexFuctionTwo();"
                
                onMouseOut="opacityFunctionRTwo(); zIndexFuctionRTwo();"
                style="  position: absolute;
                opacity: 0;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                
                transition: .5s ease;
                background-color: rgba(192, 214, 48, 0.90);">
                
            
                </div>
                
    
            </a>
            </div>
            </div>

            <div class="col-sm-4 p-4">
                    
                    
            
                <div class="img-container img-link-1" style="position: relative;
                width: 100%;" >
    
    
                <a href="https://www.google.com" class="news-card">
                
            
                    <div class="card shadow">
                            
                        <img src="wp-content/themes/kow22/Assets/images/sixth-formers-boy-and-girl.jpg" class="card-img-top" style="width: 100%;
                        max-height: 70%;
                        object-fit:cover;" alt="...">
    
                        
                    
                    <div class="card-body p-3 d-flex-column" id ="news-card-body3">
                        <h6 class="card-link-text news-tags">STUDENTS, EXAMS</h6>
                        <h4 class="card-link-text news-title">Top Revision Tips</h4>
                        <p class="card-link-text news-date"><small>Sept 2022</small></p>
                    </div>
                </div>
    
                
                <div class="overlay" id="overlay3" 
                onMouseOver="opacityFunctionThree(); zIndexFuctionThree();"
                
                onMouseOut="opacityFunctionRThree(); zIndexFuctionRThree();"
                style="  position: absolute;
                opacity: 0;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                height: 100%;
                width: 100%;
                
                transition: .5s ease;
                background-color: rgba(192, 214, 48, 0.90);">
                
            
                </div>
                
    
            </a>
            </div>
            </div>

            

            </div>
            </div>

    </section>


        <!--CALENDAR SECTION-->
        <section id="calendar-section">

            <div class="section-headings mb-5 text-center">
                <h2 class="section-title">Calendar</h2>
                <a class ="section-link" href="">VIEW FULL CALENDAR</a>
            </div>

            <div class="calendar-card-group justify-content-center row">

                <div class="calendar-card card col-sm-6 shadow" data-aos="fade-up" data-aos-delay="100">
                  
                  <div class="card-body text-center mt-5">
                        <h5 class="card-title h1 calendar-date">25</h5>
                        <p class="card-text calendar-month fw-bold">SEPT</p>
                        <p class="card-text calendar-event fw-bold">GCSE Results Day</p>
                        <p class="card-text calendar-time mt-5"><small>1800-1930</small></p>
                  </div>
                </div>

                <div class="calendar-card card col-sm-6 shadow" data-aos="fade-up" data-aos-delay="200">

                    <div class="card-body text-center mt-5">
                        <h5 class="card-title h1 calendar-date">25</h5>
                        <p class="card-text calendar-month fw-bold">JAN</p>
                        <p class="card-text calendar-event fw-bold">GCSE Results Day</p>
                        <p class="card-text calendar-time mt-5"><small>1800-1930</small></p>
                    </div>
                  
                  
                </div>
            </div>


        </section>
    </main>


    <?php
    get_footer();
    ?>


