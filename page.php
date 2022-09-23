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
                <div class="col-lg-3" id="sidebar-section-nav-col">
                    <div id="sidebar-section-nav">
                        <div id="SideNav">
                            <div class="list-group panel">
                              <a href="#" class="list-group-item list-group-item-success" data-parent="#SideNav">Home</a>
                              <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#SideNav">Our Academy<i class="fa fa-caret-down nav-arrow"></i></a>
                              <div class="collapse" id="demo3">
                                <a href="#SubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubMenu1">Subitem 1 <i class="fa fa-caret-down nav-arrow"></i></a>
                                <div class="collapse list-group-submenu" id="SubMenu1">
                                  <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 1 a</a>
                                  <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 2 b</a>
                                  <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse" data-parent="#SubSubMenu1">Subitem 3 c <i class="fa fa-caret-down nav-arrow"></i></a>
                                  <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
                                    <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 1</a>
                                    <a href="#" class="list-group-item" data-parent="#SubSubMenu1">Sub sub item 2</a>
                                  </div>
                                  <a href="#" class="list-group-item" data-parent="#SubMenu1">Subitem 4 d</a>
                                </div>
                                <a href="javascript:;" class="list-group-item">Subitem 2</a>
                                <a href="javascript:;" class="list-group-item">Subitem 3</a>
                              </div>
                              <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#SideNav">Item 4  <i class="fa fa-caret-down nav-arrow"></i></a>
                              <div class="collapse" id="demo4">
                                <a href="" class="list-group-item">Subitem 1</a>
                                <a href="" class="list-group-item">Subitem 2</a>
                                <a href="" class="list-group-item">Subitem 3</a>
                              </div>
                            </div>
                          </div>

                    </div>

                </div>
            </div>
        </div>
       
   </main>



<?php
    get_footer();
    ?>