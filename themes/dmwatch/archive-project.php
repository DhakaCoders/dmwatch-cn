<?php
get_header(); 
$thisID = 306;

$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_title', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-our-project.jpg';


$description = get_field('description', $thisID);
?>
<section class="page-banner page-bnr-lft-con page-bnr-our-project" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
          <p>Water, sanitation and hygiene are at the very core of sustainable development, crucial for survival of people and the planet. Water scarcity affects more than 40 percent of people around the world, which is projected to increase <a href="#">Continue Reading.</a></p>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->


<section class="our-project-filter-hdr-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our-project-filter-hdr">
          <h2 class="opfhdr-title">OUR PROJECTS</h2>
        </div>
        <div class="our-project-filter-btns">
          <form action="" method="get">
          <ul class="reset-list clearfix">
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button type="button"><span>PRACTICE AREA</span></button></div>
                <div class="filter-btn-dorpdown">
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa1" name="show_ongoing_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa1"> SHOW ONGOING PROJECTS</label> 
                    </div>
                  </div>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa2" name="show_completed_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa2"> SHOW COMPLETED PROJECTS</label> 
                    </div>
                  </div>

                </div>
              </div>
            </li>
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button type="button"><span>CLIENT</span></button></div>
                <div class="filter-btn-dorpdown">
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa3" name="show_client_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa3"> SHOW CLIENT PROJECTS</label> 
                    </div>
                  </div>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa4" name="show_client_c_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa4"> SHOW CLIENT COMPLETED PROJECTS</label> 
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="filter-btn-cntlr">
                <div class="filter-btn"><button><span>REGION</span></button></div>
                <div class="filter-btn-dorpdown">
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa5" name="show_regoing_project" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa5"> SHOW REGION PROJECTS</label> 
                    </div>
                  </div>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa6" name="show_regoing_project_2" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa6"> SHOW REGION PROJECTS</label> 
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="filter-btn-cntlr filter-btn-year-cntlr">
                <div class="filter-btn"><button><span>YEAR</span></button></div>
                <div class="filter-btn-dorpdown">
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa7" name="year_1" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa7">2019</label> 
                    </div>
                  </div>
                  <div class="filter-btn-dorpdown-item">
                    <div class="filter-check-row clearfix">
                      <input type="checkbox" id="pa8" name="year_2" value="YES">
                      <span class="checkmark"></span> 
                      <label for="pa8">2020</label> 
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="search-filter-btn">
            <button type="submit">FILTER NOW</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query = new WP_Query(array( 
    'post_type'=> 'project',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'paged' => $paged,
    'orderby' => 'date',
    'order'=> 'ASC'
  ) 
);
if($query->have_posts()):
?>
<section class="our-project-filter-results-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filter-results-sec-hdr">
          <h3 class="filter-results-sec-hdr-title">FILTER RESULT</h3>
        </div>
      </div>
      <div class="col-md-12">
        <div class="filter-results-grd-cntlr">
          <ul class="clearfix reset-list">
            <?php 
              while($query->have_posts()): $query->the_post();
                $pintro = get_field('introsec', get_the_ID());
            ?>
            <li>
              <div class="filter-results-grd-item">
                <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                <div class="filter-results-img-cntlr">
                  <?php if( !empty($pintro['image']) ): ?>
                  <div class="filter-results-img" style="background: url(<?php echo cbv_get_image_src($pintro['image'], 'projectgrid'); ?>);">
                    <?php echo cbv_get_image_tag($pintro['image'], 'projectgrid'); ?>
                  </div>
                  <?php else: ?>
                    <div class="filter-results-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/filter-results-img-01.jpg);">
                    <img src="<?php echo THEME_URI; ?>/assets/images/filter-results-img-01.jpg">
                  </div>
                  <?php endif; ?>
                </div>
                <div class="filter-results-img-hover">
                  <div>
                    <strong><?php the_title(); ?><i><img src="<?php echo THEME_URI; ?>/assets/images/link-clip-icon.png"></i></strong>
                  </div>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
          </ul>

          <div class="dm-blog-pagi-ctlr">
          <?php
          if( $query->max_num_pages > 1 ):
            $big = 999999999; // need an unlikely integer
            echo paginate_links( array(
              'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'type'      => 'list',
              'prev_text' => __('Prev'),
              'next_text' => __('Next'),
              'format'    => '?paged=%#%',
              'show_all'  => false,
              'end_size'  => 1,
              'mid_size'  => 5,
              'total'     => $wp_query->max_num_pages
            ) );
            endif; 
        ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php else: ?>
  <section class="our-project-filter-results-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="filter-results-sec-hdr">
          <h3 class="filter-results-sec-hdr-title">NO RESULT!</h3>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif;  wp_reset_postdata(); ?>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>