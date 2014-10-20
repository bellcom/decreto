<?php
/**
 * @file
 * page--front.tpl.php
 */
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Decreto</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#product">Produktet</a></li>
          <li><a href="#prices">Priser</a></li>
          <li><a href="#contact">Kontakt</a></li>
          <li><a href="#support">Support</a></li>
          <li class="signup">
            <button type="button" class="signup btn btn-default navbar-btn" onclick="window.location.href='#signup'">Bestil</button>
          </li>
          <li class="login"><a href="/user">Log ind</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<section class="container-fluid download parallax">
  <div class="wrapper" data-speed="8" data-type="background">
    <div class="container">
      <div class="col-md-6">
        <h2>Din online dagsorden til aæsjkfaælskj dfaæ lorem lipsum dfaæ lorem lipsum.</h2>
        <button type="button" class="signup btn btn-default">Download demo</button>
      </div>
      <div class="col-md-6">
        <?php print '<img src="' . base_path() . drupal_get_path('theme', 'decreto_theme') . '/img/laptop.png">'; ?>
      </div>
    </div>
  </div>
</section>

<section class="container buzz" id="product">
  <div class="row">
    <div class="col-md-offset-1 col-md-5">
      <h3>Altid tilgængelig</h3>
      Sed iaculis molestie dui, sit amet iaculis tortor ultricies id. Maecenas non diam enim.
    </div>
    <div class="col-md-5">
      <h3>Grøn teknologi</h3>
      Sed iaculis molestie dui, sit amet iaculis tortor ultricies id. Maecenas non diam enim.
    </div>
  </div>
  <div class="row">
    <div class="col-md-offset-1 col-md-5">
      <h3>Support på dansk</h3>
      Sed iaculis molestie dui, sit amet iaculis tortor ultricies id. Maecenas non diam enim.
    </div>
    <div class="col-md-5">
      <h3>Sikkerhed</h3>
      Sed iaculis molestie dui, sit amet iaculis tortor ultricies id. Maecenas non diam enim.
    </div>
  </div>
  <div class="row">
    <div class="col-md-offset-1 col-md-5">
      <h3>Integration</h3>
      Sed iaculis molestie dui, sit amet iaculis tortor ultricies id. Maecenas non diam enim.
    </div>
    <div class="col-md-5">
      <h3>Overblik</h3>
      Sed iaculis molestie dui, sit amet iaculis tortor ultricies id. Maecenas non diam enim.
    </div>
  </div>

</section>

<section class="container-fluid orange-bg description">
  <div class="container">
    <div class="col-md-8">
      <h2>Some other stuff</h2>
      <p>
        Sed fringilla feugiat mi non placerat. Etiam sit amet quam bibendum, imperdiet nulla et, ornare felis. Sed iaculis molestie dui, sit amet iaculis tortor ultricies id. Maecenas non diam enim. Proin nisi augue, interdum non porta quis, placerat quis nulla. Nulla non ligula ultrices, sollicitudin dolor sed, euismod felis.
      </p>
      <p>
        Praesent sodales felis non nulla imperdiet egestas. Etiam vel erat elementum, dictum augue sed, congue justo. Ut volutpat ipsum purus, sit amet posuere eros lobortis in. Aenean non tortor id tellus malesuada suscipit sed et leo.
      </p>
      <p>
        Praesent sodales felis non nulla imperdiet egestas. Etiam vel erat elementum, dictum augue sed, congue justo. Ut volutpat ipsum purus, sit amet posuere eros lobortis in. Aenean non tortor id tellus malesuada suscipit sed et leo.
      </p>
    </div>
    <div class="col-md-4">
      <?php print '<img src="' . base_path() . drupal_get_path('theme', 'decreto_theme') . '/img/phone.png">'; ?>
    </div>
  </div>
</section>

<section class="container-fluid parralax" id="parralax-banner-2" data-speed="6" data-type="background"></section>

<section class="container text-center spacer">
  <h2>Køb din online dagsorden herunder</h2>
  <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
</section>

<section class="container-fluid gray-bg features" id="prices">
  <div class="container">
    <div class="col-md-3">
      <ul class="list-unstyled text-left">
        <li class="heading"><br /><strong>Indhold</strong></li>
        <li>ajsk ldljasdf</li>
        <li>kja sldaskfd</li>
        <li>asdfaskfka slasdf</li>
        <li>a sdas asdfasd asdf</li>
        <li>sdfsio sjlks</li>
        <li>s kdjsljasdfasf dsfs</li>
        <li>sdfs fsdfsdf sf</li>
        <li>s dsf sd fsdfsf</li>
        <li>s fsf sf</li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="list-unstyled">
        <li class="heading">Lille<strong>1 bruger</strong></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li class="na"> - </li>
        <li class="na"> - </li>
        <li class="na"> - </li>
        <li class="na"> - </li>
        <li class="na"> - </li>
        <li class="price">Gratis</li>
      </ul>
    </div>
    <div class="col-md-3 white">
      <ul class="list-unstyled">
        <li class="heading">Mellem<strong>2-10 brugere</strong></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li class="na"> - </li>
        <li class="na"> - </li>
        <li class="na"> - </li>
        <li class="price">DKK 99,- <small>/mdr</small></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="list-unstyled">
        <li class="heading">Stor<strong>Frit antal brugere</strong></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li><i class="glyphicon glyphicon-ok"></i></li>
        <li class="price">DKK 149,- <small>/mdr</small></li>
      </ul>
    </div>
  </div>
</section>

<section class="container" id="signup">
  <div class="row">
    <div class="col-md-12">
      <?php print $signup_form; ?>
    </div>
  </div>
</section>

<section class="container-fluid parralax" id="parralax-banner-3" data-speed="8" data-type="background"></section>

<address class="container-fluid" id="contact">
    <p>Bredgade 20 · 6000 Kolding · <a href="tel:70260085">70 26 00 85</a> · <a href="mailto:hello@decreto.dk">hello@decreto.dk</a></p>
</address>

<section  class="container-fluid orange-bg support" id="support">
  <div class="container">
    <p class="text-center">For support og hjælp brug da vores <a href="http://support.bellcom.dk/">support</a> forum.</p>
  </div>
</section>

<footer class="container-fluid gray-bg">
  <div class="container">
    <p>
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
      <small>Copyright © Bellcom ApS</small>
    </p>
  </div>
</footer>

<?php print '<script src="' . base_path() . drupal_get_path('theme', 'decreto_theme') . '/js/frontpage.js"></script>'; ?>
