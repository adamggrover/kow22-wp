





  <div class="col d-flex align-items-stretch">
    
    <div id="#news-card-container">
     
        <div class="card h-100 news-card">
          <a href="<?php the_permalink();?>">
          
            <div class="news-card-content">
              <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="...">
            </a>
              <div class="card-body" id ="news-card-body">
                <!--<h6 class=""><?php the_tags('',' | ');?></h6>-->
                <a href="<?php the_permalink();?>"><h5 class="news-card-title"><?php the_title();?></h5>
                <p><?php the_excerpt();?></p>
                
                <p class="card-link-text news-card-date"><small><?php the_date(); ?></small></p>
              </div>
              
            </div>
            
      
      
        </a>
      <div class="news-overlay"></div>
      
    </div>
    
   </div>
  
    
  </div>



