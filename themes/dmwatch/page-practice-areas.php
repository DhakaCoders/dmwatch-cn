<?php
/*
  Template Name: Practice Areas
*/
get_header(); 
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_titel', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/page-bnr-practice-areas.jpg';

$intro = get_field('introsec', $thisID);
?>
<section class="page-banner page-bnr-rgt-con page-bnr-title-semi page-bnr-practice-areas" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <?php if( $intro ): ?>
      <div class="page-bnr-top-logo">
        <?php 
          if( !empty($intro['logo']) ):
            echo cbv_get_image_tag($intro['logo']);
          endif;
        ?>
      </div>
      <?php endif; ?>
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->
<?php if( $intro ): ?>
<section class="dm-we-do-content-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-we-do-dsc-wrp">
          <div class="dm-we-do-dsc">
          <?php 
            if( !empty($intro['title']) ) printf('<h2 class="dm-we-do-dsc-title">%s</h2>', $intro['title'] );
            if(!empty($intro['description'])) echo wpautop( $intro['description'] ); 
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
  $showhidestatus = get_field('showhidestatus', $thisID);
  if( $showhidestatus ):
    $pstatus = get_field('projectstatus', $thisID);
    if( $pstatus ):
     $status = $pstatus['pstatus'];
?>
<section class="dm-pa-counter-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-pa-counter-cntlr">
        <?php if( !empty($pstatus['title']) ) printf('<h3 class="dm-pa-counter-title">%s</h3>', $pstatus['title'] ); ?>
          <ul class="reset-list">
            <li>
              <div class="dm-pa-counter-item">
                 <?php 
                   if( !empty($status['value1']) ) printf('<strong class="counter">%s</strong>', $status['value1'] ); 
                   if( !empty($status['title1']) ) printf('<span>%s</span>', $status['title1'] ); 
                 ?>
              </div>
            </li>
            <li>
              <div class="dm-pa-counter-item">
               <?php 
                 if( !empty($status['value2']) ) printf('<strong class="counter">%s</strong>', $status['value2'] ); 
                 if( !empty($status['title2']) ) printf('<span>%s</span>', $status['title2'] ); 
               ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php
  $showhideex = get_field('showhideex', $thisID);
  if( $showhideex ):
    $expertp = get_field('expertperson', $thisID);
    if( $expertp ):
?>
<section class="dm-pa-grid-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-pa-grid-wrp">
          <?php if( !empty($expertp['title']) ) printf('<h2 class="dm-pa-grid-head-title">%s</h2>', $expertp['title'] ); ?>
          <?php 
            $teamIDS = $expertp['select_members'];
            if( !empty($teamIDS) ){
              $count = count($teamIDS);
              $query = new WP_Query(array( 
              'post_type'=> 'teams',
              'post_status' => 'publish',
              'posts_per_page'=> $count,
              'post__in' => $teamIDS
              ) 
            );
                  
            }else{
              $query = new WP_Query(array( 
              'post_type'=> 'teams',
              'post_status' => 'publish',
              'posts_per_page' => 4,
              'orderby' => 'date',
              'order'=> 'desc'
              ) 
            );
            }
          ?>
          <?php if( $query->have_posts() ):?>
          <ul class="reset-list clearfix">
            <?php 
              while($query->have_posts()): $query->the_post();
              $attach_id = get_post_thumbnail_id(get_the_ID());
            ?>
            <li>
              <div class="dm-pa-grid-innr">
                <div class="dm-pa-grid-img-cntlr">
                  <div class="dm-pa-grid-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-grid-img.png">
                    <div class="dm-pa-grid-img-hover"></div>
                    <a href="#" class="overlay-link"></a>
                  </div>
                </div>
                <div class="dm-pa-grid-dsc">
                  <h4 class="dm-pa-grid-dsc-title">PERSON NAME</h4>
                  <span>DESIGNATION</span>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
          </ul>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<section class="dm-pa-service-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-pa-service-wrp">
          <ul class="clearfix reset-list">
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-1.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-2.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-3.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-4.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-5.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-6.png">
                </div>
              </div>
            </li>
            <li>
              <div class="dm-pa-service-innr">
                <div class="dm-pa-service-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-pa-service-img-7.png">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>