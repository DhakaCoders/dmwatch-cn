<?php get_header(); ?>
<div class="home-sections-cntlr">
<?php  
  $slidersec = get_field('slidesec', HOMEID);
  $hslides = $slidersec['slides'];
  if($hslides):
?>
<section class="main-slider-sec">
  <div class="main-slider mainSlider">
    <?php 
      foreach( $hslides as $hslide ): 
        if( !empty($hslide['image']) )
          $slidesrc = cbv_get_image_src($hslide['image'], 'hmslide');
        else
          $slidesrc = '';

    ?>
    <div class="mainSLideItem" style="background: url(<?php echo $slidesrc; ?>);">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="main-slider-des">
                <?php 
                if( !empty($hslide['title']) ) printf('<strong class="main-slide-des-title">%s</strong>', $hslide['title']); 

                  $hlink = $hslide['link'];
                  if( is_array( $hlink ) &&  !empty( $hlink['url'] ) ){
                      printf('<a href="%s" target="%s">%s</a>', $hlink['url'], $hlink['target'], $hlink['title']); 
                  }
                ?>
              </div>
            </div>
          </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>    
</section>
<?php endif; ?>
<?php
  $showhideintro = get_field('showhideintro', HOMEID);
  if( $showhideintro ):
    $intro = get_field('introsec', HOMEID);
    if( $intro ):
?>
<section class="dm-watch-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="dm-watch-sec-cntlr clearfix">
            <?php if(!empty($intro['image'])): ?>
            <div class="dm-watch-sec-fea-img">
              <?php echo cbv_get_image_tag($intro['image']); ?>
            </div>
            <?php endif; ?>
            <div class="dm-watch-sec-des">
            <?php 
              if( !empty($intro['title']) ) printf('<h1 class="dmwsd-title">%s</h1>', $intro['title']);
              if( !empty($intro['description']) ) echo wpautop( $intro['description'] );
            ?>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>
<?php
  $showhidepractice = get_field('showhidepractice', HOMEID);
  if( $showhidepractice ):
    $practice = get_field('practicearea', HOMEID);
    if( $practice ):
?>
<section class="hm-practice-area-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-practice-area-sec-hdr">
        <?php 
          if( !empty($practice['title']) ) printf('<h2 class="hmpashdr-title">%s</h2>', $practice['title']);
          if( !empty($practice['description']) ) echo wpautop( $practice['description'] );
        ?>
        </div>
      </div>
    </div>
    <?php 
      $practices = $practice['practiceareas']; 
      if( $practices ):
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="hm-practice-area-items hmPracticeAreaSlider">
          <?php foreach( $practices as $pract ): ?>
          <div class="hmPracticeAreaSlideItem">
            <div class="hm-practice-area-item">
              <div class="hm-practice-area-fea-img">
                <?php 
                if( !empty($pract['image']) ):
                  echo cbv_get_image_tag($pract['image'], 'hareas');
                endif;
                ?>
              </div>
              <div class="hm-practice-area-item-des">
                <a href="#" class="overlay-link"></a>
                <?php 
                  if( !empty($pract['title']) ) printf('<h4 class="mHc hm-practice-area-item-title">%s</h4>', $pract['title']);
                  if( !empty($pract['description']) ) echo wpautop( $pract['description'] );
                ?>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>

<?php
  $showhideservices = get_field('showhideservices', HOMEID);
  if( $showhideservices ):
    $service = get_field('featuredservices', HOMEID);
    if( $service ):
?>
<section class="hm-fea-services-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-sec-hdr">
        <?php if( !empty($service['title']) ) printf('<h2 class="hmfsshdr-title">%s</h2>', $service['title']); ?>
        </div>
      </div>
    </div>
    <?php 
      $services = $service['fservices']; 
      if( $services ):
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-cntlr">
          <div class="hm-fea-services hmFeaServicesSlider">
            <?php foreach( $services as $serv ): ?>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img">
                <?php 
                  if( !empty($serv['icon']) ):
                    echo cbv_get_image_tag($serv['icon']);
                  endif;
                ?>
                </div>
                <div class="hm-fea-service-item-des">
                <?php 
                  if( !empty($serv['title']) ) printf('<h5 class="hmfsid-title mHc">%s</h5>', $serv['title']);
                  if( !empty($serv['description']) ) echo wpautop( $serv['description'] );
                ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>

<?php
  $showhideclients = get_field('showhideclients', HOMEID);
  if( $showhideclients ):
    $client = get_field('clientspartners', HOMEID);
    if( $client ):
?>
<section class="hm-clients-partners-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-clients-partners-sec-hdr">
        <?php 
          if( !empty($client['title']) ) printf('<h2 class="hmcpshdr-title">%s</h2>', $client['title']);
          if( !empty($client['description']) ) echo wpautop( $practice['description'] );
        ?>
        </div>
      </div>
    </div>
    <?php 
      $logos = $client['logos']; 
      if( $logos ):
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="clients-partners-logos-cntlr">
          <div class="clients-partners-logos clientsPartnersLogosSlider">
            <?php foreach( $logos as $logo ): ?>
            <div class="clientsPartnersLogosSlideItem">
              <div>
                <?php 
                  if( !empty($logo['icon']) ):
                    echo cbv_get_image_tag($logo['icon']);
                  endif;
                ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<?php
  $showhidecounter = get_field('showhidecounter', HOMEID);
  if( $showhidecounter ):
    $counters = get_field('countersec', HOMEID);
    if( $counters ):
      $counts = $counters['counterr'];
?>
<section class="hm-counter-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-counter-cntlr">
          <?php if( $counts ): ?>
          <ul class="reset-list">
            <?php foreach( $counts as $countr ): ?>
            <li>
              <div class="hm-counter-item">
                <?php 
                  if( !empty($countr['value']) ) printf('<strong class="counter">%s</strong>', $countr['value']);
                  if( !empty($countr['title']) ) printf('<span>%s</span>', $countr['title']);
                ?>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>

<section class="hm-projects-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fl-tabs clearfix hm-projects-tabs">
          <button class="tab-link current" data-tab="tab-1"><span>ONGOING PROJECTS </span></button>
          <button class="tab-link" data-tab="tab-2"><span>COMPLETED PROJECTS</span></button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="tab-1" class="fl-tab-content current">
          <div class="hm-projects-tab-con">
            <div class="hm-project-tab-short-des">
              <p>We are currently working with the  world renowned agencies. So far have completed several projects given by them.
              our dedicated and profesional team members are the key of our success</p>
            </div>
            <div class="hm-project-tab-slider hmProTabSlider">
              <div class="hmProTabSlideItem">
                <div class="hmProTabSlideItemCon" style="background: url(<?php echo THEME_URI; ?>/assets/images/project-slide-img-01.png);">
                  <a href="#" class="overlay-link"></a>
                  <div class="hmProTabSlideItemCon-hover">
                    <div class="hmProTabSlideItemCon-hover-inr">
                      <strong>Baseline Survey of Urban Climate
                      Change Resiliency</strong>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hmProTabSlideItem">
                <div class="hmProTabSlideItemCon" style="background: url(<?php echo THEME_URI; ?>/assets/images/project-slide-img-02.png);">
                  <a href="#" class="overlay-link"></a>
                  <div class="hmProTabSlideItemCon-hover">
                    <div class="hmProTabSlideItemCon-hover-inr">
                      <strong>Baseline Survey of Urban Climate
                      Change Resiliency</strong>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hmProTabSlideItem">
                <div class="hmProTabSlideItemCon" style="background: url(<?php echo THEME_URI; ?>/assets/images/project-slide-img-03.png);">
                  <a href="#" class="overlay-link"></a>
                  <div class="hmProTabSlideItemCon-hover">
                    <div class="hmProTabSlideItemCon-hover-inr">
                      <strong>Baseline Survey of Urban Climate
                      Change Resiliency</strong>
                    </div>
                  </div>
                </div>
              </div>
              <div class="hmProTabSlideItem">
                <div class="hmProTabSlideItemCon" style="background: url(<?php echo THEME_URI; ?>/assets/images/project-slide-img-01.png);">
                  <a href="#" class="overlay-link"></a>
                  <div class="hmProTabSlideItemCon-hover">
                    <div class="hmProTabSlideItemCon-hover-inr">
                      <strong>Baseline Survey of Urban Climate
                      Change Resiliency</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tab-2" class="fl-tab-content">
          <div class="hm-projects-tab-con">
            <div class="hm-project-tab-short-des">
              <p>We are currently working with the  world renowned agencies. So far have completed several projects given by them.
              our dedicated and profesional team members are the key of our success 2</p>
            </div>
            <div class="hm-project-tab-slider hmProTabSlider">
              <div class="hmProTabSlideItem">
                <div class="hmProTabSlideItemCon">
                  <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-01.png">
                </div>
              </div>
              <div class="hmProTabSlideItem">
                <div class="hmProTabSlideItemCon">
                  <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-02.png">
                </div>
              </div>
              <div class="hmProTabSlideItem">
                <div class="hmProTabSlideItemCon">
                  <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-03.png">
                </div>
              </div>
              <div class="hmProTabSlideItem">
                <div class="hmProTabSlideItemCon">
                  <img src="<?php echo THEME_URI; ?>/assets/images/project-slide-img-01.png">
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>    
</section>  
</div>

<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>