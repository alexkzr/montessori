/* Template Name: Calendar
*/

<?php get_header();?>

      <div class="section-events">
        <div class="container">
          <div class="event-wrap">
            <div class="event">
              <div class="event-heading">
                <div class="event-heading__date">26 декабря</div>
                <div class="event-heading__name">Новогодний утренник</div>
              </div>
              <div class="event-text">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                  ut turpis laoreet, ullamcorper lectus non, mattis enim. Donec
                  vehicula pulvinar risus, sit amet sollicitudin elit accumsan
                  scelerisque. Nullam lacus urna, commodo quis ligula id,
                  ultricies accumsan diam. Pellentesque habitant morbi tristique
                  senectus et netus et malesuada fames ac turpis egestas. Donec
                  ultrices rhoncus nunc, eu sodales ex. Donec sit amet dignissim
                  urna, fermentum iaculis justo. Donec et hendrerit nisl, nec
                  consectetur est. Suspendisse scelerisque, nibh nec suscipit
                  vehicula, mi libero hendrerit eros, sed efficitur quam felis
                  auctor ante. Duis egestas malesuada odio, vel vulputate nisl.
                  Curabitur massa sapien, tristique in semper eu, ultrices sed
                  augue. Fusce commodo pharetra urna at pulvinar. Nam porta
                  metus eu leo consequat ultricies. Suspendisse vel tincidunt
                  nibh. Aliquam sollicitudin dui sed neque finibus sollicitudin.
                  Aliquam eget venenatis erat.
                </p>
                <p>
                  Curabitur ullamcorper leo vel ante volutpat, sed imperdiet
                  neque lobortis. Quisque vestibulum eget nisl non congue. Morbi
                  blandit euismod fringilla. Nam lobortis nulla in ante
                  tristique condimentum. Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Nunc consequat augue urna, vel ullamcorper
                  elit facilisis eu. Duis eget lorem volutpat ex ultricies
                  congue. Sed erat arcu, lobortis ac leo sed, semper condimentum
                  metus. Cras justo dolor, placerat non metus eget, mollis
                  scelerisque tellus. Quisque bibendum magna eget nisi
                  vestibulum iaculis. Aenean sagittis, arcu varius pharetra
                  volutpat, diam sem molestie neque, sed faucibus diam mauris in
                  arcu. Praesent orci nunc, dapibus ac lacinia a, bibendum vitae
                  neque. Praesent rhoncus, sem nec suscipit ornare, tellus massa
                  tempus ipsum, sit amet finibus tortor lacus nec mi. Donec sed
                  neque ut ipsum ultricies elementum. Vivamus ac sem bibendum,
                  blandit lacus sagittis, aliquam metus. Praesent sagittis
                  pretium sem pulvinar maximus. Nam bibendum dui libero,
                  pulvinar eleifend ante vestibulum nec. Praesent a molestie
                  quam. Phasellus congue turpis est, vitae ultricies lectus
                  molestie quis. Maecenas ut risus imperdiet, ultricies risus a,
                  finibus massa.
                </p>
                <p>
                  Nullam scelerisque in ligula nec ultrices. Donec laoreet
                  sapien eget ultricies hendrerit. Vivamus pulvinar quis elit
                  non ultricies. Vivamus luctus mauris non metus suscipit,
                  viverra elementum augue tristique. Cras volutpat dolor turpis,
                  et bibendum nisl aliquet at. Proin malesuada aliquet mi eget
                  convallis. Aenean vehicula mauris vitae lacus aliquet, quis
                  sodales dui maximus. In a venenatis purus. Suspendisse
                  tincidunt consequat ligula ac mattis. Morbi blandit commodo
                  malesuada. Donec a aliquet dolor. Nulla efficitur viverra
                  faucibus. Phasellus ultrices posuere arcu, in pellentesque
                  justo dapibus eu. Suspendisse erat nisl, finibus a sapien sit
                  amet, imperdiet mollis mi. Pellentesque pulvinar, ipsum id
                  tincidunt fermentum, augue velit pharetra est, nec mollis odio
                  ligula eu mi. Nullam eu fringilla tortor. Nunc et ultrices
                  felis. Vestibulum ut mollis sem. Mauris dui arcu, dapibus quis
                  nibh in, facilisis consequat mauris. Nullam in rhoncus enim.
                  Proin nec vehicula justo. Morbi eleifend maximus lorem sed
                  interdum. Orci varius natoque penatibus et magnis dis
                  parturient montes, nascetur ridiculus mus. In hac habitasse
                </p>
              </div>
            </div>
            <!-- /.event -->
            <div class="calendar-wrap">
              <div class="calendar"></div>
              <!-- /.calendar -->
              <button class="button calendar-button">
                записаться <span class="hidden-mobile">на мероприятие</span>
              </button>
              <!-- /.button calendar-button -->
              <a href="#" class="year-plan">Обзор 2018-2019 учебного года</a>
              <!-- /.year-plan -->
            </div>
            <!-- /.calendar-wrap -->
          </div>
          <?php 
  $id=19; 
  $post = get_post($id); 
  $content = apply_filters('the_content', $post->post_content); 
  echo $content;  
  ?>
        </div>
        <!-- /.container -->
      </div>
      <!-- /.section-events -->

      <?php include 'contacts-b.php'?>

    <?php get_footer();?>