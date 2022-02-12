<?php
get_header();
?>
<?php
$teacherInfo = get_field('teacherInfo');
$aboutTeacher = get_field('aboutTeacher');
$teachingPlan = get_field('teachingPlan');
?>


<main class="mainEachTeacher">
    <div class="mainContainer">
      <h1><?php echo $teacherInfo['nameAndTitle'];?></h1>
      <div class="info">
        <div class="contacts">
          <div class="eachElement">
            <i class="fas fa-chalkboard-teacher"></i>
            <div>
              <p class="header">Jméno a titul</p>
              <p class="text"><?php echo $teacherInfo['nameAndTitle'];?></p>
            </div>
          </div>
          <div class="eachElement">
            <i class="fas fa-ellipsis-h"></i>
            <div>
              <p class="header">Zkratka</p>
              <p class="text"><?php echo $teacherInfo['shortcut'];?></p>
            </div>
          </div>
          <div class="eachElement">
            <i class="far fa-compass"></i>
            <div>
              <p class="header">Číslo kabinetu</p>
              <p class="text"><?php echo $teacherInfo['cabinetNumber'];?></p>
            </div>
          </div>
        </div>
        <div class="contacts">
          <div class="eachElement">
            <i class="fas fa-envelope"></i>
            <div>
              <p class="header">Email</p>
              <p class="text"><?php echo $teacherInfo['email'];?></p>
            </div>
          </div>
          <div class="eachElement">
            <i class="fas fa-users"></i>
            <div>
              <p class="header">Komise</p>
              <p class="text"><?php echo $teacherInfo['commision'];?></p>
            </div>
          </div>
          <div class="eachElement">
            <img src="<?php echo get_template_directory_uri().'/assets/images/cast_for_education_black_24dp_green.svg' ?>" alt="" />
            <div>
              <p class="header">Systémy</p>
              <p class="text"><?php echo $teacherInfo['systems'];?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="aboutTeacher">
        <?php echo $aboutTeacher; ?>
      </div>
      <div class="teacherPlan">
        <img src="<?php echo esc_url($teachingPlan['url']); ?>" alt="" />
      </div>
    </div>
  </main>



  <?php
  get_footer();
  ?>

