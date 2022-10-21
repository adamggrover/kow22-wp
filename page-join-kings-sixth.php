<?php
    get_header();




?>

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

                    <div class="form-container">

                        <form method="post" autocomplete="on">

                        <div class="form-contents" >


                            
                            <label for="first-name">First name:</label>
                            <input type="text" id="first-name" name="first-name" required>
                        

                            <label for="last-name">Last name:</label>
                            <input type="text" id="last-name" name="last-name" required>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>

                            <label for="tel">Phone number:</label>
                            <input type="tel" id="tel" name="tel" required>

                            <label for="datemax">Enter a date before 1980-01-01:</label>
                            <input type="date" id="datemax" name="datemax" max="1979-12-31" min="2000-01-02"> 

                            <label for="address-line1">Address:</label>
                            <input type="text" id="address" name="address-line1" required>

                            <label for="address-line2">Town/City</label>
                            <input type="text" id="address" name="address-line2">

                            <label for="address-level1">County</label>
                            <input type="text" id="address" name="addressline">

                            <label for="post-code">Postcode</label>
                            <input type="text" id="post-code" name="post-code" required>

                            <label for="current-school">Current school:</label>
                            <input type="text" id="current-school" name="current-school" required>

                            <label for="current-school">Name of parent/gaurdian</label>
                            <input type="text" id="current-school" name="current-school" required>

                            <label for="current-school">Parent/gaurdian contact number</label>
                            <input type="text" id="current-school" name="current-school" required>

                            <label for="current-school">Parent/gaurdian email address</label>
                            <input type="text" id="current-school" name="current-school" required>



                            <label for="tutor-group">Tutor group:</label>
                            <input type="text" id="tutor-group" name="tutor-group">

                            <label for="subjects1">Subject choice 1</label>

                            <select name="subjects1" id="subjects1" required>
                                <option value="" selected disabled hidden>Please make a selection</option>
                                <option value="1" >Fine Art A Level</option>
                                <option value="2" >Biology  A Level</option>
                                <option value="3" >Business Studies A Level</option>
                                <option value="4" >Chemistry A Level</option>
                                <option value="5" >Computer Science A Level</option>
                                <option value="6" >Design & Technology (PRODUCT DESIGN) A Level</option>
                                <option value="7" >Economics A Level</option>
                                <option value="8" >English Language A Level</option>
                                <option value="9" >English Literature A Level</option>
                                <option value="10" >Film Studies A Level</option>
                                <option value="11" >French A Level</option>
                                <option value="12" >Geography A Level</option>
                                <option value="13" >German A Level</option>
                                <option value="14" >History A Level</option>
                                <option value="15" >Maths A Level</option>
                                <option value="16" >Further maths A Level</option>
                                <option value="17" >Music A Level</option>
                                <option value="18" >Photography A Level</option>
                                <option value="19" >Physical Education A Level</option>
                                <option value="20" >Physics A Level</option>
                                <option value="21" >Psychology A Level</option>
                                <option value="22" >Religious Studies (Philosophy & Ethics) A Level</option>
                                <option value="23" >Sociology A Level</option>
                                <option value="24" >Textiles A Level</option>
                                <option value="25" >Criminology - BTEC Level 3 Certificate (worth 1)</option>
                                <option value="26" >Performing Arts - BTEC Level 3 Certificate (worth 1)</option>
                                <option value="27" >Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)</option>
                                <option value="28" >Applied Law - BTEC Level 3 National Diploma (worth 1)</option>
                                <option value="29" >Applied Science - BTEC Level 3 National Diploma (worth 2)</option>
                                <option value="30" >Business - BTEC Level 3 National Diploma (worth 2)</option>
                                <option value="31" >IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)</option>
                                <option value="32" >Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)</option>
                                <option value="33" >Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)</option>
                                </select>

                                <label for="subjects2">Subject choice 2</label>

                                <select name="subjects2" id="subjects2" required>
                                    <option value="" selected disabled hidden>Please make a selection</option>
                                    <option value="1" >Fine Art A Level</option>
                                    <option value="2" >Biology  A Level</option>
                                    <option value="3" >Business Studies A Level</option>
                                    <option value="4" >Chemistry A Level</option>
                                    <option value="5" >Computer Science A Level</option>
                                    <option value="6" >Design & Technology (PRODUCT DESIGN) A Level</option>
                                    <option value="7" >Economics A Level</option>
                                    <option value="8" >English Language A Level</option>
                                    <option value="9" >English Literature A Level</option>
                                    <option value="10" >Film Studies A Level</option>
                                    <option value="11" >French A Level</option>
                                    <option value="12" >Geography A Level</option>
                                    <option value="13" >German A Level</option>
                                    <option value="14" >History A Level</option>
                                    <option value="15" >Maths A Level</option>
                                    <option value="16" >Further maths A Level</option>
                                    <option value="17" >Music A Level</option>
                                    <option value="18" >Photography A Level</option>
                                    <option value="19" >Physical Education A Level</option>
                                    <option value="20" >Physics A Level</option>
                                    <option value="21" >Psychology A Level</option>
                                    <option value="22" >Religious Studies (Philosophy & Ethics) A Level</option>
                                    <option value="23" >Sociology A Level</option>
                                    <option value="24" >Textiles A Level</option>
                                    <option value="25" >Criminology - BTEC Level 3 Certificate (worth 1)</option>
                                    <option value="26" >Performing Arts - BTEC Level 3 Certificate (worth 1)</option>
                                    <option value="27" >Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)</option>
                                    <option value="28" >Applied Law - BTEC Level 3 National Diploma (worth 1)</option>
                                    <option value="29" >Applied Science - BTEC Level 3 National Diploma (worth 2)</option>
                                    <option value="30" >Business - BTEC Level 3 National Diploma (worth 2)</option>
                                    <option value="31" >IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)</option>
                                    <option value="32" >Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)</option>
                                    <option value="33" >Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)</option>
                                </select>

                                <label for="subjects3">Subject choice 3</label>

                                    <select name="subjects3" id="subjects3" required>
                                        <option value="" selected disabled hidden>Please make a selection</option>
                                        <option value="1" >Fine Art A Level</option>
                                        <option value="2" >Biology  A Level</option>
                                        <option value="3" >Business Studies A Level</option>
                                        <option value="4" >Chemistry A Level</option>
                                        <option value="5" >Computer Science A Level</option>
                                        <option value="6" >Design & Technology (PRODUCT DESIGN) A Level</option>
                                        <option value="7" >Economics A Level</option>
                                        <option value="8" >English Language A Level</option>
                                        <option value="9" >English Literature A Level</option>
                                        <option value="10" >Film Studies A Level</option>
                                        <option value="11" >French A Level</option>
                                        <option value="12" >Geography A Level</option>
                                        <option value="13" >German A Level</option>
                                        <option value="14" >History A Level</option>
                                        <option value="15" >Maths A Level</option>
                                        <option value="16" >Further maths A Level</option>
                                        <option value="17" >Music A Level</option>
                                        <option value="18" >Photography A Level</option>
                                        <option value="19" >Physical Education A Level</option>
                                        <option value="20" >Physics A Level</option>
                                        <option value="21" >Psychology A Level</option>
                                        <option value="22" >Religious Studies (Philosophy & Ethics) A Level</option>
                                        <option value="23" >Sociology A Level</option>
                                        <option value="24" >Textiles A Level</option>
                                        <option value="25" >Criminology - BTEC Level 3 Certificate (worth 1)</option>
                                        <option value="26" >Performing Arts - BTEC Level 3 Certificate (worth 1)</option>
                                        <option value="27" >Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)</option>
                                        <option value="28" >Applied Law - BTEC Level 3 National Diploma (worth 1)</option>
                                        <option value="29" >Applied Science - BTEC Level 3 National Diploma (worth 2)</option>
                                        <option value="30" >Business - BTEC Level 3 National Diploma (worth 2)</option>
                                        <option value="31" >IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)</option>
                                        <option value="32" >Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)</option>
                                        <option value="33" >Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)</option>
                                </select>

                                <label for="subjects4">Subject choice 4/Reserve choice</label>

                                    <select name="subjects4" id="subjects4" required>
                                        <option value="" selected disabled hidden>Please make a selection</option>
                                        <option value="1" >Fine Art A Level</option>
                                        <option value="2" >Biology  A Level</option>
                                        <option value="3" >Business Studies A Level</option>
                                        <option value="4" >Chemistry A Level</option>
                                        <option value="5" >Computer Science A Level</option>
                                        <option value="6" >Design & Technology (PRODUCT DESIGN) A Level</option>
                                        <option value="7" >Economics A Level</option>
                                        <option value="8" >English Language A Level</option>
                                        <option value="9" >English Literature A Level</option>
                                        <option value="10" >Film Studies A Level</option>
                                        <option value="11" >French A Level</option>
                                        <option value="12" >Geography A Level</option>
                                        <option value="13" >German A Level</option>
                                        <option value="14" >History A Level</option>
                                        <option value="15" >Maths A Level</option>
                                        <option value="16" >Further maths A Level</option>
                                        <option value="17" >Music A Level</option>
                                        <option value="18" >Photography A Level</option>
                                        <option value="19" >Physical Education A Level</option>
                                        <option value="20" >Physics A Level</option>
                                        <option value="21" >Psychology A Level</option>
                                        <option value="22" >Religious Studies (Philosophy & Ethics) A Level</option>
                                        <option value="23" >Sociology A Level</option>
                                        <option value="24" >Textiles A Level</option>
                                        <option value="25" >Criminology - BTEC Level 3 Certificate (worth 1)</option>
                                        <option value="26" >Performing Arts - BTEC Level 3 Certificate (worth 1)</option>
                                        <option value="27" >Sport & Fitness Services - BTEC Level 3 National Certificate (worth 1)</option>
                                        <option value="28" >Applied Law - BTEC Level 3 National Diploma (worth 1)</option>
                                        <option value="29" >Applied Science - BTEC Level 3 National Diploma (worth 2)</option>
                                        <option value="30" >Business - BTEC Level 3 National Diploma (worth 2)</option>
                                        <option value="31" >IT in Digital Media - Level 3 Cambridge TECHNICAL Diploma (worth 2)</option>
                                        <option value="32" >Sport and Fitness Services - BTEC Level 3 National Diploma (worth 2)</option>
                                        <option value="33" >Work Skills - Level 2 BTEC (Diploma or Extended Certificate) (worth 4)</option>
                                </select>

                                <label for="choices-information">Any further information about your choices</label>

                                <textarea rows="4" cols="50" name="comment" form="usrform"></textarea>



                                <label for="EPQ">Would you be interested in studying an EPQ alongside your choices?</label>
                                
                                <div class="epq-yes">
                                    <input type="radio" id="html" name="EPQ" value="Yes" required>
                                    <label for="yes">Yes</label>
                                </div>
                                <div class="epq-no">
                                    <input type="radio" id="css" name="EPQ" value="No">
                                    <label for="no">No</label>
                                </div>

                                <label for="Lv3-Maths">Would you be interested in studying a Core Maths Level 3 qualification alongside your choices?</label>
                                
                                <div class="core-maths-yes">
                                    <input type="radio" id="html" name="Lv3-Maths" value="Yes" required>
                                    <label for="yes">Yes</label>
                                </div>
                                <div class="core-maths-no">
                                    <input type="radio" id="css" name="Lv3-Maths" value="No">
                                    <label for="no">No</label>
                                </div>

                                <input type="submit" value="Submit">


                            </div>
                
                        </form>
                    </div>

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