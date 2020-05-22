<?php
/*
  Template Name: Participate Us
*/
get_header(); 
$thisID = get_the_ID();
$pageTitle = get_the_title($thisID);
$custom_page_title = get_field('custom_page_titel', $thisID);
if(!empty(str_replace(' ', '', $custom_page_title))){
  $pageTitle = $custom_page_title;
}

$standaardbanner = get_field('bannerimage', $thisID);
if( empty($standaardbanner) ) $standaardbanner = THEME_URI.'/assets/images/page-bnr-participate-with-us.jpg';
?>
<section class="page-banner page-bnr-lft-con page-bnr-participate-with-us" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo $standaardbanner; ?>);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title"><?php echo $pageTitle; ?></h1>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh <br>euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->




<section class="dm-us-contact-form-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="dm-us-contact-form-cntrl">
          <div class="dm-contact-form-head">
            <h2 class="dm-contact-form-head-title">JOIN WITH US</h2>
            <p>JOIN US TO INSPIRE US, TO TEACH US, TO GROW WITH US.</p>
          </div>
          <div class="dm-us-contact-form-wrp clearfix">
            <div class="wpforms-container">
              <form class="wpforms-form">
                
                <div class="wpforms-field-container">
                  
                  <div class="wpforms-field">
                    <label class="wpforms-field-label">NAME</label>
                    <input type="text" name="name" placeholder="Your full name" required>
                  </div>
                  <div class="wpforms-field">
                    <label class="wpforms-field-label">PHONE NUMBER</label>
                    <input type="text" name="name" placeholder="Phone Number" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">EMAIL</label>
                    <input type="email" name="email" placeholder="Email adress" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">DATE OF BIRTH</label>
                    <input type="date" name="text" placeholder="DD/MM/YY" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">NID NUMBER</label>
                    <input type="text" name="text" placeholder="****************" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">PERMANENT ADDRESS</label>
                    <input type="email" name="email" placeholder="Permanent Address" class="form-control" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">PRESENT ADDRESS</label>
                    <input type="text" name="text" placeholder="Present Address" required>
                  </div>

                  <!-- <div class="wpforms-field">
                    <label class="wpforms-field-label">INTERESTED FOR THE POSITION OF</label>
                    <input type="text" name="text" placeholder="[Please Select-]" class="form-control" required>
                  </div> -->

                  <div class="wpforms-field wpforms-field-select">
                    <label class="wpforms-field-label" for="select1">INTERESTED FOR THE POSITION OF</label>
                    <select id="select1" name="select1">
                      <option value="First Choice">[Please Select-]</option>
                      <option value="Second Choice">Selecteer hier</option>
                      <option value="Third Choice">Selecteer hier</option>
                    </select>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">LAST DEGREE NAME</label>
                    <input type="text" name="text" placeholder="Degree Name" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">LAST EDUCATIONAL INSTITUTE NAME</label>
                    <input type="text" name="text" placeholder="Educational Institute Name" class="form-control" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">LIST OF PUBLICATIONS (IF ANY)</label>
                    <input type="text" name="text" placeholder="Name Of Publication" required>
                  </div>

                  <div class="wpforms-field">
                    <label class="wpforms-field-label">AREA OF EXPERTISE</label>
                    <input type="text" name="text" placeholder="Year" class="form-control" required>
                  </div>

                  <div class="wpforms-field wpforms-field-checkbox">
                    <ul class="reset-list clearfix">
                      <li class="wpforms-selected">
                        <label class="container">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </li>
                    </ul>
                  </div>


                </div><!-- end of .wpforms-field-container-->

                <div class="wpforms-submit-container">
                  <button type="submit" name="submit" class="wpforms-submit">SUBMITE</button>
                </div>

                <div class="dm-member-msg">
                  <span>I’m already a member</span>
                </div>

              </form>
            </div>
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