<?php 
get_header();
?>
<?php
$title = get_field('title');
$text = get_field('text');
?>

<main class="mainForm">
    <div class="mainContainer">
      <h1>
        <?php echo $title; ?>
      </h1>
      <p>
        <?php echo $text; ?>
      </p>
    </div>
  </main>


<?php
    get_footer();
    ?>