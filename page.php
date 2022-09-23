<?php
    get_header();
?>

<div class="container" id="main-page-area">
            <div class="content-header row">
                <div class="content-header-breadcrumb col-lg-5 col-md-12">
                    <i class="fa-solid fa-house fa-xs"></i><span class="breadcrumb-spacer"></span>
                    <h6 class="mb-0 content-header-breadcrumb-links">Home / Our Academy / Welcome</h6>
                    

                </div>
                <div class="content-header-social col-lg-4 col-md-12">
                    <h6 class="mb-0 text-muted">Share This Page</h6><span class="breadcrumb-spacer"></span>
                    <div class="content-area-social-links text-muted">
                        <i class="fa-brands fa-twitter fa-sm ps-2"></i>
                        <i class="fa-brands fa-facebook-f fa-sm ps-2"></i>
                        <i class="fa-solid fa-envelope fa-sm ps-2"></i>

                    </div>
                    
                    
                </div>
            </div>
            <div class="content-area row">
                <div class="col-lg-9 content-column">
                    
                    <h1 id="content-h1">Welcome</h1>

                    <div id="content-body">

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
                <div class="col-lg-3 p-4" id="sidebar-section-nav-col">
                    <div id="sidebar-section-nav">

                    </div>

                </div>
            </div>
        </div>
       

        
    



   </main>



<?php
    get_footer();
    ?>