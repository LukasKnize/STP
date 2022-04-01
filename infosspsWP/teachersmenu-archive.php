<?php

/* 
Template Name: UčiteléMenu
*/

get_header();
?>


  <main class="mainTeachersMenu">
    <div class="mainContainer">
      <h1>Pedagogický sbor</h1>
      <div class="MainContentItem menuHeadline">
        <p class="teacherName"><span>Jméno</span></p>
        <p class="teacherShort">Zkratka</p>
        <p class="teacherComission">Komise</p>
        <p class="teacherEmail"><span>E-Mail</span></p>
        <p class="teacherCabinet">Kabinet</p>
      </div>
      <?php
        // WP_Query arguments
        $args = array (
            'post_type'      => array( 'eachteacher' ),
            'post_status'    => array( 'publish' ),
            'posts_per_page' => '-1',
        );

        // The Query
        $post_query = new WP_Query( $args );

        if ( $post_query->have_posts() ) : ?>
            <?php
            // Start the Loop.
            while ( $post_query->have_posts() ) :
                // You can list your posts here
                $post_query->the_post();
                $teacherInfo = get_field('teacherInfo');
                ?>
      <div class="MainContentItem">
        <a href="<?php the_permalink(); ?>" class="teacherName"><?php the_title(); ?></a>
        <p class="teacherShort"><?php echo $teacherInfo['shortcut']; ?></p>
        <p class="teacherComission"><?php echo $teacherInfo['commision']; ?></p>
        <a href="" class="teacherEmail"><?php echo $teacherInfo['email']; ?></a>
        <p class="teacherCabinet"><?php echo $teacherInfo['cabinetNumber']; ?></p>
      </div>
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
  </main>

  <?php
  get_footer();
  ?>
  