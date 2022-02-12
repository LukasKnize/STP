<?php 
/* 
Template Name: Systémy
*/

get_header();
?>
<main class="mainSystems">
    <div class="mainContainer">
      <h1>
        Systémy
      </h1>
      <div class="content">
      <?php
        // WP_Query arguments
        $args = array (
            'post_type'      => array( 'system' ),
            'post_status'    => array( 'publish' ),
        );

        // The Query
        $post_query = new WP_Query( $args );

        if ( $post_query->have_posts() ) : ?>
            <?php
            // Start the Loop.
            while ( $post_query->have_posts() ) :
                // You can list your posts here
                $post_query->the_post();
                $platformName = get_field('platformName');
                $logo = get_field('logo');
                ?>
        <a href="<?php the_permalink(); ?>">
          <div class="systemItem">
            <div class="iconContainer">
              <img src="<?php echo esc_url($logo['url']); ?>" alt="">
            </div>
            <p><?php echo $platformName; ?></p>
          </div>
        </a>
        <?php
            endwhile;

            // Navigation
            the_post_navigation();
        else :
            // No Post Found
        endif;

        // Restore original Post Data
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </main>

  <?php
    get_footer();
    ?>