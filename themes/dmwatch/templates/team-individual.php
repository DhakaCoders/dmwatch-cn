<?php 
$cterm = get_queried_object();
?>
<section class="rs-mangmnt-tm-sec sec-bg-gray individual-team-mambers-page-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="management-sec-hdr">
          <h2 class="mngs-hdr-title">
            OUR <?php printf('%s', $cterm->name); ?> <span>TEAM</span>
          </h2>
          <?php if( !empty($cterm->description) ) echo wpautop($cterm->description); ?>
        </div>
      </div>

      <?php 
      $query = new WP_Query(array( 
          'post_type'=> 'teams',
          'post_status' => 'publish',
          'posts_per_page' =>-1,
          'orderby' => 'date',
          'order'=> 'ASC',
          'tax_query' => array(
            array(
              'taxonomy' => 'team_department',
              'field' => 'term_id',
              'terms' => $cterm->term_id
            )
          )
        ) 
      );
      if($query->have_posts()):
      ?>
      <div class="col-md-12">
        <div class="individual-team-mambers-grd-cntlr">
          <ul class="reset-list clearfix">
            <?php 
            while($query->have_posts()): $query->the_post();  
             $position = get_field('position', get_the_ID()); 
             $profileimage = get_field('profile_image', get_the_ID()); 
            ?>
            <li>
              <div class="crkmts-grd-item">
                <a href="#" class="popup-btn"></a>
                <div class="itm-grd-img-bx">
                  <?php if(!empty( $profileimage )): echo cbv_get_image_tag( $profileimage ); endif;?>
                </div>
                <div class="itm-short-des mHc">
                  <strong><?php the_title( );?></strong>
                  <?php if( !empty($position) ) printf('<span>%s</span>', $position); ?>
                </div>
              </div>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
      </div>
    <?php endif;  wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<div class="info-popup-cntlr">
  <div class="info-popup-container">
    <div class="info-popup-cntlr-inr clearfix">
      <span class="popup-close"><img src="<?php echo THEME_URI; ?>/assets/images/close-icon.jpg"></span>
      <div class="info-popup-sidebar">
        <div class="crkmts-grd-item">
          <div class="itm-grd-img-bx">
            <img src="<?php echo THEME_URI; ?>/assets/images/itm-grd-img-bx-01.jpg">
          </div>
          <div class="itm-short-des">
            <strong>Khan Moniruzzaman Munna</strong>
            <span>Manager</span>
          </div>
        </div>
        <div class="popup-social">
          <label>Social Media</label>
          <ul class="reset-list">
            <li><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/instagram.png"></a></li>
            <li><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/facebook.png"></a></li>
            <li><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/whatsapp.png"></a></li>
            <li><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/twitter.png"></a></li>
            <li><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/linkedin.png"></a></li>
          </ul>
        </div>
      </div>
      <div class="info-popup-des">
        <p><span>Khan Moniruzzaman Munna</span> is an Architect and Environment enthusiast, having received his Master of Science degrees in Environmental Management form National University of Singapore (NUS) with a prestigious ABD-Japan Scholarship, in 2020. Prior to this he obtained his bachelor's degrees in architecture form AIUB (American International University Bangladesh) in 2015.</p>

        <p>Tosnim has a diverse field of interest which emanates from his diverse background in study and work experiences. Right after accomplishing his training in Architecture successfully, he joined Housing and Building Research Institute(HBRI) as a research fellow where he pursued different research areas like Disaster resilient urban and regional settlements, Sustainable and Argo-friendly Building Materials and technology, Public toilet and public space in an Urban setting etc.</p>
      </div>
    </div>
  </div>
</div>