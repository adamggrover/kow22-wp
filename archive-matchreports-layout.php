





  <div class="col">
  
  <div class="card h-100">
    <a href="<?php the_permalink();?>"><img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="..."></a>
    <div class="card-body" id ="news-card-body1">
      <!--<h6 class=""><?php the_tags('',' | ');?></h6>-->
      <a href="<?php the_permalink();?>"><h5 class=""><?php the_title();?></h5></a>
      <p><?php the_excerpt();?></p>
      
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
  
</div>


