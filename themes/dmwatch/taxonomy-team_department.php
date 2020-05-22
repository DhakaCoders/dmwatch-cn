<?php
get_header(); 
$cterm = get_queried_object();
?>
<section class="page-banner page-bnr-research-team-members" style="overflow: hidden;">
  <div class="page-banner-controller">
    <div class="page-banner-bg" style="background-image:url(<?php echo THEME_URI; ?>/assets/images/page-bnr-team-members.jpg);">
    </div>
    <div class="page-banner-des">
      <div class="page-banner-inr">
        <div>
          <h1 class="page-banner-title">TEAM MRMBERS</h1>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->
<?php 
  $child_terms = get_terms( array(
    'taxonomy' => 'team_department',
    'hide_empty' => false,
    'parent' => $cterm->term_id
) );

if ( ! empty( $child_terms ) && ! is_wp_error( $child_terms ) ){
  get_template_part( 'templates/team', 'subcat' ); 
} else {
  get_template_part( 'templates/team', 'individual' );
} 
?>
<?php 
get_template_part('templates/footer', 'top');
get_footer(); 
?>