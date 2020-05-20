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

<section class="hm-practice-area-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-practice-area-sec-hdr">
          <h2 class="hmpashdr-title">practice area</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="hm-practice-area-items hmPracticeAreaSlider">
          <div class="hmPracticeAreaSlideItem">
            <div class="hm-practice-area-item">
              <div class="hm-practice-area-fea-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/hm-practice-area-fea-img-01.png">
              </div>
              <div class="hm-practice-area-item-des">
                <h4 class="mHc hm-practice-area-item-title">Environmental Inspection</h4>
                <p >We are a group of people motivated to work
                  in the field of environmental betterment and
                  to ensure a safe and sustainable future for all
                  of us</p>
              </div>
            </div>
          </div>
          <div class="hmPracticeAreaSlideItem">
            <div class="hm-practice-area-item">
              <div class="hm-practice-area-fea-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/hm-practice-area-fea-img-02.png">
              </div>
              <div class="hm-practice-area-item-des">
                <h4 class="mHc hm-practice-area-item-title">Higg Index consultancy</h4>
                <p >We provide full support and solution for
                  HIGG FEM 3.0 for manufacturers to better
                    measure and manage comprehensive
                    environmental and social impacts of apparel</p>
              </div>
            </div>
          </div>
          <div class="hmPracticeAreaSlideItem">
            <div class="hm-practice-area-item">
              <div class="hm-practice-area-fea-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/hm-practice-area-fea-img-03.png">
              </div>
              <div class="hm-practice-area-item-des">
                <h4 class="mHc hm-practice-area-item-title">Environmental Management Plan</h4>
                <p>Environmental Management Plans describe
                  how an action might impact on the natural
                  environmental. We have qualified team to run
                  down the operations</p>
              </div>
            </div>
          </div>
          <div class="hmPracticeAreaSlideItem">
            <div class="hm-practice-area-item">
              <div class="hm-practice-area-fea-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/hm-practice-area-fea-img-01.png">
              </div>
              <div class="hm-practice-area-item-des">
                <h4 class="mHc hm-practice-area-item-title">Environmental Inspection</h4>
                <p >We are a group of people motivated to work
                  in the field of environmental betterment and
                  to ensure a safe and sustainable future for all
                  of us</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>


<section class="hm-fea-services-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-sec-hdr">
          <h2 class="hmfsshdr-title">FEATURED SERVICES</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="hm-fea-services-cntlr">
          <div class="hm-fea-services hmFeaServicesSlider">
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-01.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc">Climate Resiliency Assessment</h5>
                  <p>Climate resilience assenssment is one of our core service. We have DEdicaed team members to contaucted this assessment. </p>
                </div>
              </div>
            </div>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-01.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc">City Profiling & Poverty Assessment</h5>
                  <p>Climate resilience assenssment is one of our core service. We have DEdicaed team members to contaucted this assessment. </p>
                </div>
              </div>
            </div>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-01.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc">WASH</h5>
                  <p>Climate resilience assenssment is one of our core service. We have DEdicaed team members to contaucted this assessment. </p>
                </div>
              </div>
            </div>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-01.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc">Improving Urban Functionality</h5>
                  <p>Climate resilience assenssment is one of our core service. We have DEdicaed team members to contaucted this assessment. </p>
                </div>
              </div>
            </div>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-01.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc">Capacity Building</h5>
                  <p>Climate resilience assenssment is one of our core service. We have DEdicaed team members to contaucted this assessment. </p>
                </div>
              </div>
            </div>
            <div class="hmFeaServicesSlideItem">
              <div class="hm-fea-service-item">
                <div class="hm-fea-service-item-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/fea-services-icon-01.png">
                </div>
                <div class="hm-fea-service-item-des">
                  <h5 class="hmfsid-title mHc">Capacity Building</h5>
                  <p>Climate resilience assenssment is one of our core service. We have DEdicaed team members to contaucted this assessment. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>


<section class="hm-clients-partners-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-clients-partners-sec-hdr">
          <h2 class="hmcpshdr-title">Clients and partners</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="clients-partners-logos-cntlr">
          <div class="clients-partners-logos clientsPartnersLogosSlider">
            <div class="clientsPartnersLogosSlideItem">
              <div><img src="<?php echo THEME_URI; ?>/assets/images/clients-partners-logo-01.png"></div>
            </div>
            <div class="clientsPartnersLogosSlideItem">
              <div><img src="<?php echo THEME_URI; ?>/assets/images/clients-partners-logo-01.png"></div>
            </div>
            <div class="clientsPartnersLogosSlideItem">
              <div><img src="<?php echo THEME_URI; ?>/assets/images/clients-partners-logo-01.png"></div>
            </div>
            <div class="clientsPartnersLogosSlideItem">
              <div><img src="<?php echo THEME_URI; ?>/assets/images/clients-partners-logo-01.png"></div>
            </div>
            <div class="clientsPartnersLogosSlideItem">
              <div><img src="<?php echo THEME_URI; ?>/assets/images/clients-partners-logo-01.png"></div>
            </div>
            <div class="clientsPartnersLogosSlideItem">
              <div><img src="<?php echo THEME_URI; ?>/assets/images/clients-partners-logo-01.png"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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