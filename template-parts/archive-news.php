





  <div class="col">
  <a href="https://www.google.com" class="news-card" id="news-card-container">
    <div class="card h-100">
      <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
      <div class="card-body" id ="news-card-body1">
        <h6 class="card-link-text news-tags">TECHNOLOGY, COMPETITIONS</h6>
        <h5 class="card-link-text news-title"><?php the_title();?></h5>
        
        <p class="card-link-text news-date"><small><?php the_date(); ?></small></p>
      </div>
    </div>
   <!--<div class="overlay" id="overlay1" 
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
                        
                
                    </div>-->
    </a>
  </div>



