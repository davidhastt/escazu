</body>
<!-- Inicio footer -->
    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
             <!--a href="#" class="logo_footer"> <img src="<?= base_url ?>/assets/page/img/logo2.png" alt="#"/></a-->
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                  <div class="address">
                    <h3>Escreva para nós </h3>
                    <ul class="loca">
                      <!--li>
                        <a href="#"></a><p>Sadi Carnot 89 G2 Col. San Rafael</p><p> Alcaldía Cuauhtémoc C.P. 06470</p>
                      </li-->
                        <li>
                          <a href="#"></a>(+52)55 56 06 38 32</li>
                          <li>
                            <a href="#"></a>centrovirtualescazu@gmail.com</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="address">
                          <h3>Redes sociais</h3>
                          <ul class="Menu_footer">
                            <li class="active"> <a href="https://twitter.com/EscazuCentro?s=08">Twitter</a> </li>
                            <li><a href="https://www.facebook.com/centrovirtualescazu/?ref=pages_you_manage">Facebook</a> </li>
                            <li><a href="https://instagram.com/centrovirtualescazu?utm_medium=copy_link">Instagram</a> </li>
                            <li><a href="https://www.linkedin.com/mwlite/in/centro-virtual-escaz%C3%BA-75a38321b">Linkdin</a> </li>
                            <li><a href="https://youtube.com/channel/UCDT1F-p0vrvyyzJF53CzZGg">Youtube</a> </li>
                          </ul>
                        </div>
                      </div>
                     

                      <!--div class="col-lg-4 col-md-6 col-sm-6 ">
                        <div class="address">
                          <h3>Boletín de noticias</h3>
                           <form class="news">
                           <input class="newslatter" placeholder="Escribe tu email" type="text" name=" Enter your email">
                            <button class="submit">Suscribete</button>
                            </form>
                        </div>
                      </div-->
                    </div>
                  </div>

                </div>

              </div>
              <div class="copyright">
                <div class="container">
                    <p>Copyright © 2021 Criado pela <a href="http://geografia.mx/" target="_blank">GeografiaMX</a></p>
                </div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="<?= base_url ?>/assets/page/js/jquery.min.js"></script>
          <script src="<?= base_url ?>/assets/page/js/popper.min.js"></script>
          <script src="<?= base_url ?>/assets/page/js/bootstrap.bundle.min.js"></script>
          <script src="<?= base_url ?>/assets/page/js/jquery-3.0.0.min.js"></script>
          <script src="<?= base_url ?>/assets/page/js/plugin.js"></script>
          <!-- sidebar -->
          <script src="<?= base_url ?>/assets/page/js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="<?= base_url ?>/assets/page/js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>          


          <script>
// This example adds a marker to indicate the position of Bondi Beach in Sydney,
// Australia.
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 11,
    center: {
      lat: 40.645037,
      lng: -73.880224
    },
  });

  var image = 'images/maps-and-flags.png';
  var beachMarker = new google.maps.Marker({
    position: {
      lat: 40.645037,
      lng: -73.880224
    },
    map: map,
    icon: image
  });
}
</script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->



<!-- fin footer -->

</html>