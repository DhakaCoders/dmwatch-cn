<?php
get_header();

$pageID = 306;
$standaardbanner = get_field('bannerimage', $pageID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-our-management-bio.jpg';

$thisID = get_the_ID();
$details = get_field('description', $thisID);

$client = get_field('clientinfo', $thisID);
?>

<section class="page-banner page-bnr-lft-con page-bnr-an-our-project-details" style="overflow: hidden;">
  <div class="page-bnr-btm-logo">
    <img src="<?php echo THEME_URI; ?>/assets/images/page-bnr-btm-logo-01.png">
  </div>
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title">LOREM IPSUM</h1>
          <p>LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE PRINTING AND TYPESETTING INDUSTRY. LOREM IPSUM HAS BEEN <br>THE INDUSTRY'S STANDARD DUMMY TEXT EVER SINCE THE 1500S, WHEN AN UNKNOWN PRINTER TOOK A GALLEY <br>OF TYPE AND SCRAMBLED IT TO MAKE A TYPE SPECIMEN BOOK.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="page-bnr-btm-logo">
    <img src="<?php echo THEME_URI; ?>/assets/images/page-bnr-btm-logo-02.png">
  </div>

</section><!-- end of page-banner -->

<?php $intro = get_field('introsec', $thisID); ?>
<section class="dm-project-info-sec-wrp">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="dm-project-info-wrp">
            <div class="dm-project-info-inr clearfix">
              <div class="dm-project-info-lft">

                <?php if( $intro ): ?>
                <div class="dm-project-info-lft-img">
                <?php if( !empty($intro['image']) ): ?>
                <div class="dm-project-info-lft-img" data-fancybox="gallery" href="<?php echo cbv_get_image_src( $intro['image'] ); ?>">
                  <?php echo cbv_get_image_tag( $intro['image'], 'projectsingle' ); ?>
                </div>
                <?php endif; ?>
                <?php
                $galleries = $intro['gallery']; 
                if($galleries): 
                ?>
                <div class="dm-thumb-images clearfix">
                  <?php foreach( $galleries as $gallery ): ?>
                  <div class="dm-thumb-img">
                    <?php if( !empty($gallery['id']) ): ?>
                    <div data-fancybox="gallery" href="<?php echo cbv_get_image_src( $gallery['id'] ); ?>">
                      <?php echo cbv_get_image_tag( $gallery['id'], 'projectthumb' ); ?>
                    </div>
                    <?php endif; ?>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
                </div>
                <?php endif; ?>
              </div>
              <div class="dm-project-info-rgt-dsc">
                <h2 class="dm-info-dsc-title">PROJECT INFORMATION</h2>
                <h4 class="dm-info-dsc-title-1">TITLE:</h4>
                <p><?php the_title(); ?></p>
                <h4 class="dm-info-dsc-title-1">CLIENT:</h4>
                <?php if( !empty($client['name']) ) printf('<span>%s</span>', $client['name']); ?>
                <?php if( !empty($client['logo']) ): ?>
                <div class="dm-project-info-logo">
                  <?php echo cbv_get_image_tag($client['logo']); ?>
                </div>
                <?php else: ?>
                <div class="dm-project-info-logo">
                  <img src="<?php echo THEME_URI; ?>/assets/images/dm-project-info-logo-img.png">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="dm-project-info-btm-dsc">
              <h4 class="dm-project-info-btm-dsc-title">PROJECT DESCRIPTION:</h4>
              <?php if( !empty($details) ) echo wpautop($details); ?>
              <a href="<?php echo esc_url( home_url('project') );?>" >BACK TO THE PORTFOLIO</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>