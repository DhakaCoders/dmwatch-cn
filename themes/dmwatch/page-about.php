<?php
/*
  Template Name: About Us
*/
get_header(); 
$thisID = get_the_ID();
$intro = get_field('introsec', $thisID);
?>
<section class="page-banner page-bnr-rgt-con page-bnr-about" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo THEME_URI; ?>/assets/images/page-bnr-about.jpg);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title">ABOUT DM WATCH</h1>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->


<?php if( $intro ): ?>
<section class="dm-about-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-about-sec-inr">
          <?php 
          if( !empty($intro['title']) ) printf('<h2 class="dm-about-sec-title">%s</h2>', $intro['title'] );
          if(!empty($intro['description'])) echo wpautop( $intro['description'] ); 
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
  $showhidevm = get_field('showhidevm', $thisID);
  if( $showhidevm ):
    $vmsec = get_field('vision_mission', $thisID);
    if( $vmsec ):
?>
<section class="dm-vision-mision-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-vision-mision-sec-inr">
          <?php if( !empty($vmsec['title']) ) printf('<h2 class="dm-vm-title">%s</h2>', $vmsec['title'] ); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
$vision = $vmsec['vision']; 
$mission = $vmsec['mission']; 
?>
<section class="dm-vision-mision-grd-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="dm-vision-mision-grd-sec-inr">
          <ul class="reset-list clearfix">
            <?php if( $vision ): ?>
            <li>
              <div class="dm-vm-grd-item mHc">
                <?php
                  if( !empty($vision['title']) ) printf('<h2 class="dm-vm-grd-item-title">%s</h2>', $vision['title'] );
                  if(!empty($vision['description'])) echo wpautop( $vision['description'], true );
                ?>
              </div>
            </li>
          <?php endif; ?>
          <?php if( $mission ): ?>
            <li>
              <div class="dm-vm-grd-item mHc">
                <?php
                  if( !empty($mission['title']) ) printf('<h2 class="dm-vm-grd-item-title">%s</h2>', $mission['title'] );
                  if(!empty($mission['description'])) echo wpautop( $mission['description'], true );
                ?>
              </div>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
  $showhidedw = get_field('showhidedw', $thisID);
  if( $showhidedw ):
    $dmwatch = get_field('dmwatch', $thisID);
    if( $dmwatch ):
?>
<section class="dm-about-value-sec">
  <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="dm-about-value-sec-inr">
        <?php
          if( !empty($dmwatch['title']) ) printf('<h2 class="dm-about-value-title">%s</h2>', $dmwatch['title'] );
          if(!empty($dmwatch['description'])) echo wpautop( $dmwatch['description'], true );
        ?>
       </div>
     </div>
   </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>


<section class="footer-top-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-top-sec-inr clearfix">
          <div class="ftr-top-sec-title">
            <h2 class="ftr-top-title">Ready to start your project with us ?</h2>
          </div>
          <div class="ftr-top-sec-link">
            <a href="#">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>