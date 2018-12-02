<footer class="footer">
      <div class="container">
        <div class="footer-links">
          <p>&copy; INTERNATIONAL MONTESSORI SCHOOL</p>
          <div class="footer-links_social">
            <a href="#" class="inst"><img src="img/main/inst.png" alt=""></a>
            <a href="#" class="vk"><img src="img/main/vk.png" alt=""></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- /.footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/slick.min.js"></script>

    <script>
      $('.main-slider').slick({
        responsive: [
          {
            breakpoint: 576,
            settings: {
              arrows: false,
              dots: true,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
      $('.gallery-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
         responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
      $('.menu-cover').click(function(e){
        e.preventDefault();
        $('.hamburger').toggleClass('hidden')
        $('.menu').toggleClass('open');

      })

    </script>
</body>

</html>
