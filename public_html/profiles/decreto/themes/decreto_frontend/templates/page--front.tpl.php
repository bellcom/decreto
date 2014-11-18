<?php
/**
 * @file
 * page--front.tpl.php
 */
?>

<!-- Begin - wrapper -->
<div id="wrapper">

    <!-- Begin - header -->
    <header class="header header-sticky">

        <!-- Begin - navbar -->
        <section class="header-navbar">
            <div class="container">
                <div class="row">

                    <!-- Begin - content -->
                    <div class="col-md-4 header-navbar-content">

                        <!-- Begin - logo -->
                        <a class="header-logo" href="#" data-scroll-to="#banner" data-toggle="tooltip" data-placement="bottom" title="Gå til toppen af siden"></a>
                        <!-- End - logo -->

                    </div>
                    <!-- End - content -->

                    <!-- Begin - content -->
                    <div class="col-md-8 header-navbar-content hidden-xs">

                        <!-- Begin - navigation -->
                        <ul class="header-nav header-right header-md-left">

                            <!-- Begin - product -->
                            <li class="header-nav-link active"><a href="#" data-scroll-to="#buzzbox">Produktet</a></li>
                            <!-- End - product -->

                            <!-- Begin - prices -->
                            <li class="header-nav-link"><a href="#" data-scroll-to="#prices">Priser</a></li>
                            <!-- End - prices -->

                            <!-- Begin - contact -->
                            <li class="header-nav-link"><a href="#" data-scroll-to="#contact">Kontakt</a></li>
                            <!-- End - contact -->

                            <!-- Begin - support -->
                            <li class="header-nav-link"><a href="#" data-scroll-to="#support">Support</a></li>
                            <!-- End - support -->

                            <!-- Begin - order -->
                            <li class="header-nav-button"><a class="btn btn-primary" href="#" data-scroll-to="#signup">Bestil</a></li>
                            <!-- End - order -->

                            <!-- Begin - sign in -->
                            <li class="header-nav-link">
                                <a href="/user/login" data-toggle="tooltip" data-placement="bottom" title="Log ind">
                                    <img src="<?php print $image_path . "header/icon-lock.png"; ?>" class="icon-lock" alt=""/>
                                </a>
                            </li>
                            <!-- End - sign in -->

                        </ul>
                        <!-- End - navigation -->

                    </div>
                    <!-- End - content -->

                </div>
            </div>
        </section>
        <!-- End - navbar -->

    </header>
    <!-- End - header -->

    <!-- Begin - content -->
    <div id="content">

        <!-- Begin - top banner -->
        <div class="banner-top background-parallax" id="banner" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="700">
            <div class="background-overlay-secondary">
                <div class="container">
                    <div class="row padding-top-l">

                        <!-- Begin - text -->
                        <div class="col-md-10 col-md-offset-1 text-center">

                            <h1>
                                Dette er vores seje produkt
                            </h1>

                            <p>
                                Aenean mattis venenatis lacus, vitae varius dui molestie vitae. Proin id lacus.
                            </p>

                        </div>
                        <!-- End - text -->

                    </div>
                    <div class="row padding-top-l padding-bottom-s">

                        <!-- Begin - try button -->
                        <div class="col-xs-12 col-sm-5 text-center-xs text-right">
                            <a class="btn btn-primary" href="#" data-scroll-to="#signup">Prøv <span class="semi-bold">gratis</span></a>
                        </div>
                        <!-- End - try button -->

                        <!-- Begin - text -->
                        <div class="col-xs-12 col-sm-2 text-center">
                            <p>- eller -</p>
                        </div>
                        <!-- End - text -->

                        <!-- Begin - read more button -->
                        <div class="col-xs-12 col-sm-5 text-center-xs text-left">
                            <a class="btn btn-primary" href="#" data-scroll-to="#buzzbox">læs mere</a>
                        </div>
                        <!-- End - read more button -->

                    </div>
                    <div class="row">

                        <!-- Begin - image -->
                        <div class="col-xs-12 text-center">
                            <img src="<?php print $image_path . 'banner/desktop-screenshots.png'; ?>" class="appear animation animation-appear-from-bottom" alt=""/>
                        </div>
                        <!-- End - image -->

                    </div>
                </div>
            </div>
        </div>
        <!-- End - top banner -->

        <!-- Begin - buzz boxes -->
        <div class="buzz-boxes padding-top-xxl padding-bottom-l" id="buzzbox">
          <div class="container">

              <!-- Begin - first row -->
              <div class="row">

                  <!-- Begin - available -->
                  <div class="col-sm-6 buzz-box appear animation animation-appear-from-left">

                      <!-- Begin - icon -->
                      <div class="buzz-box-icon-container">
                          <img src="<?php print $image_path . 'buzz-box-icons/available.png'; ?>" class="buzz-icon" alt=""/>
                      </div>
                      <!-- End - icon -->

                      <!-- Begin - content -->
                      <div class="buzz-box-content-container">

                          <!-- Begin - headline -->
                          <h3>Altid tilgængelig</h3>
                          <!-- End - headline -->

                          <!-- Begin - text -->
                          <p>Tilgå møder og dagsordner på farten - med Decreto er du altid opdateret.</p>
                          <p>Lige meget om du bruger PC, Mac, tablets eller smartsphones, så er Decreto tilgængelig og tilpasset din enhed.</p>
                          <!-- End - text -->

                      </div>
                      <!-- End - content -->

                  </div>
                  <!-- End - available -->

                  <!-- Begin - green tech -->
                  <div class="col-sm-6 buzz-box appear animation animation-appear-from-right animation-delay-0-1">

                      <!-- Begin - icon -->
                      <div class="buzz-box-icon-container">
                          <img src="<?php print $image_path . 'buzz-box-icons/green-tech.png'; ?>" class="buzz-icon" alt=""/>
                      </div>
                      <!-- End - icon -->

                      <!-- Begin - content -->
                      <div class="buzz-box-content-container">

                          <!-- Begin - headline -->
                          <h3>Grøn teknologi</h3>
                          <!-- End - headline -->

                          <!-- Begin - text -->
                          <p>Decreto er en hostet løsning, der ikke kræver investeringer i en dedikeret server eller eget driftsmiljø.</p>
                          <p>Løsningen har desuden miljømæssige fordele via de reducerede omkostninger til produktion af mødematerialer.</p>
                          <!-- End - text -->

                      </div>
                      <!-- End - content -->

                  </div>
                  <!-- End - green tech -->

              </div>
              <!-- End - first row -->

              <!-- Begin - second row -->
              <div class="row">

                  <!-- Begin - support -->
                  <div class="col-sm-6 buzz-box appear animation animation-appear-from-left animation-delay-0-2">

                      <!-- Begin - icon -->
                      <div class="buzz-box-icon-container">
                          <img src="<?php print $image_path . 'buzz-box-icons/support.png'; ?>" class="buzz-icon" alt=""/>
                      </div>
                      <!-- End - icon -->

                      <!-- Begin - content -->
                      <div class="buzz-box-content-container">

                          <!-- Begin - headline -->
                          <h3>Support på dansk</h3>
                          <!-- End - headline -->

                          <!-- Begin - text -->
                          <p>Vi tilbyder hjælp, vejledning og support i brugen af Decreto. Supporten ydes af dansktalende og veluddannet personale, som dagligt tester, udvikler og afprøver Decreto.</p>
                          <p>Via vores FAQ kan du desuden nemt finde svar på de mest indkommen spørgsmål.</p>
                          <!-- End - text -->

                      </div>
                      <!-- End - content -->

                  </div>
                  <!-- End - support -->

                  <!-- Begin - overview -->
                  <div class="col-sm-6 buzz-box appear animation animation-appear-from-right animation-delay-0-3">

                      <!-- Begin - icon -->
                      <div class="buzz-box-icon-container">
                          <img src="<?php print $image_path . 'buzz-box-icons/overview.png'; ?>" class="buzz-icon" alt=""/>
                      </div>
                      <!-- End - icon -->

                      <!-- Begin - content -->
                      <div class="buzz-box-content-container">

                          <!-- Begin - headline -->
                          <h3>Overblik</h3>
                          <!-- End - headline -->

                          <!-- Begin - text -->
                          <p>Hjælper mødedeltagere til at forberede og deltage i fokuserede og effektive møder.</p>
                          <p>Decreto søgefunktionalitet gør det endvidere muligt at søge på tværs af alle møder, billag og dokumenter.</p>
                          <!-- End - text -->

                      </div>
                      <!-- End - content -->

                  </div>
                  <!-- End - overview -->

              </div>
              <!-- End - second row -->

              <!-- Begin - third row -->
              <div class="row">

                  <!-- Begin - integration -->
                  <div class="col-sm-6 buzz-box appear animation animation-appear-from-left animation-delay-0-4">

                      <!-- Begin - icon -->
                      <div class="buzz-box-icon-container">
                          <img src="<?php print $image_path . 'buzz-box-icons/integration.png'; ?>" class="buzz-icon" alt=""/>
                      </div>
                      <!-- End - icon -->

                      <!-- Begin - content -->
                      <div class="buzz-box-content-container">

                          <!-- Begin - headline -->
                          <h3>Integration</h3>
                          <!-- End - headline -->

                          <!-- Begin - text -->
                          <p>Decreto giver dig mulighed for integration med en række eksterne dagsordensystemer.</p>
                          <!-- End - text -->

                      </div>
                      <!-- End - content -->

                  </div>
                  <!-- End - integration -->

                  <!-- Begin - security -->
                  <div class="col-sm-6 buzz-box appear animation animation-appear-from-right animation-delay-0-5">

                      <!-- Begin - icon -->
                      <div class="buzz-box-icon-container">
                          <img src="<?php print $image_path . 'buzz-box-icons/security.png'; ?>" class="buzz-icon" alt=""/>
                      </div>
                      <!-- End - icon -->

                      <!-- Begin - content -->
                      <div class="buzz-box-content-container">

                          <!-- Begin - headline -->
                          <h3>Sikkerhed</h3>
                          <!-- End - headline -->

                          <!-- Begin - text -->
                          <p>Dokumenter opbevares fortroligt. Kontakter samt tidligere mødedata kan altid findes i Decreto.</p>
                          <!-- End - text -->

                      </div>
                      <!-- End - content -->

                  </div>
                  <!-- End - security -->

              </div>
              <!-- End - third row -->

          </div>
        </div>
        <!-- End - buzz boxes -->

        <!-- Begin - owl carousel -->
        <div class="owl-carousel owl-theme">

            <!-- Begin - slide -->
            <div>

                <div class="owl-carousel-content">
                    <div class="container">
                        <div class="row">

                            <img src="<?php print $image_path . "phone.png"; ?>" class="owl-carousel-image-phone" alt=""/>

                            <div class="col-sm-8 owl-carousel-content-text">
                                <h1>
                                    Adipisicing elitsed do
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End - slide -->

            <!-- Begin - slide -->
            <div>

                <div class="owl-carousel-content">
                    <div class="container">
                        <div class="row">

                            <img src="<?php print $image_path . "phone.png"; ?>" class="owl-carousel-image-phone" alt=""/>

                            <div class="col-sm-8 owl-carousel-content-text">
                                <h1>
                                    Adipisicing elitsed do
                                </h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End - slide -->

        </div>
        <!-- End - owl carousel -->

        <!-- Begin - banner background -->
        <div class="banner-background banner-background-1 background-parallax" data-stellar-background-ratio="0.5"></div>
        <!-- End - banner background -->

        <!-- Begin - banner buy -->
        <div class="padding-y-xl">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h1>Køb din online dagsorden herunder</h1>
                        <h3 class="text-muted">Lorem ipsum dolor sit amet Gratis hvis du er eneste bruger consectetur adipisicing elit, sed do eiusmod 2-10 brugere samt frit antal tempor</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End - banner buy -->

        <!-- Begin - price table -->
        <div class="background-color-tertiary price-table" id="prices">
            <div class="container">
                <div class="row">
                	<div class="price-table-content">

        				<!-- Begin - feature list -->
        				<div class="col-sm-3 price-table-column price-table-feature-list appear animation animation-appear-from-left animation-delay-0-6">

        					<ul>
        						<li class="price-table-header">
        							<p>&nbsp;<small>Indhold</small></p>
        						</li>
        						<li class="price-table-feature-description">Mødeoprettelse</li>
        						<li class="price-table-feature-description">Planlægger</li>
        						<li class="price-table-feature-description">Brugere</li>
        						<li class="price-table-feature-description">Opsigelse</li>
        						<li class="price-table-feature-description">Virksomhed</li>
        						<li class="price-table-feature-description">Notifikation</li>
        						<li class="price-table-feature-description">Medlem</li>
        					</ul>

        				</div>
        				<!-- End - feature list -->

        				<!-- Begin - product list -->
        				<div class="col-sm-3 price-table-product-list appear animation animation-appear-from-left animation-delay-0-4">

        					<ul>
        						<li class="price-table-header">
        							<p>Lille<small>1 bruger</small></p>
        						</li>
        						<li class="price-table-product-feature" data-feature="Møde oprettelse">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Planlægger">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Brugere">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Opsigelse">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Virksomhed">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Medlem">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Notifikation">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-price">
        							<p>Gratis</p>
        						</li>
        					</ul>

        				</div>
        				<!-- End - product list -->

        				<!-- Begin - product list -->
        				<div class="col-sm-3 price-table-product-list price-table-highlight appear animation animation-appear-from-left animation-delay-0-2">

        					<ul>
        						<li class="price-table-header">
        							<p>Mellem<small>2-10 brugere</small></p>
        						</li>
        						<li class="price-table-product-feature" data-feature="Møde oprettelse">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Planlægger">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Brugere">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Opsigelse">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Virksomhed">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Medlem">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Notifikation">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-price">
        							<p>99,- <small>kr./md.</small></p>
        						</li>
        					</ul>

        				</div>
        				<!-- End - product list -->

        				<!-- Begin - product list -->
        				<div class="col-sm-3 price-table-product-list appear animation animation-appear-from-left">

        					<ul>
        						<li class="price-table-header">
        							<p>Stor<small>Frit antal brugere</small></p>
        						</li>
        						<li class="price-table-product-feature" data-feature="Møde oprettelse">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Planlægger">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Brugere">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Opsigelse">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Virksomhed">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Medlem">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-feature" data-feature="Notifikation">
        							<span class="icon icon-l fa fa-check"></span>
        						</li>
        						<li class="price-table-product-price">
        							<p>149,- <small>kr./md.</small></p>
        						</li>
        					</ul>

        				</div>
        				<!-- End - product list -->

        			</div>
                </div>
            </div>
        </div>
        <!-- End - price table -->

        <!-- Begin - sign up form -->
        <div class="padding-y-xl" id="signup">
            <div class="container">
                <div class="row">
                    <?php print $signup_form; ?>
                </div>
            </div>
        </div>
        <!-- End - sign up form -->

        <!-- Begin - banner background -->
        <div class="banner-background banner-background-2 background-parallax" data-stellar-background-ratio="0.5"></div>
        <!-- End - banner background -->

        <!-- Begin - contact information -->
        <div class="padding-y-xl contact-information" id="contact">
            <div class="container">
                <div class="row">

                    <!-- Begin - address -->
                    <div class="col-sm-4 contact-information-box text-center appear animation animation-appear-from-left">
                        <span class="icon icon-xl fa fa-map-marker font-color-secondary"></span>
                        <h3 class="semi-bold">Adresse</h3>
                        <p>Bredgade 20, 6000 Kolding</p>
                    </div>
                    <!-- End - address -->

                    <!-- Begin - phone number -->
                    <div class="col-sm-4 contact-information-box text-center appear animation animation-appear-from-bottom animation-delay-0-2">
                        <span class="icon icon-xl fa fa-phone font-color-secondary"></span>
                        <h3 class="semi-bold">Ring til os</h3>
                        <a href="tel:+4570260085" data-toggle="tooltip" data-placement="bottom" title="Tryk for at ringe op.">(+45) 7026 0085</a>
                    </div>
                    <!-- End - phone number -->

                    <!-- Begin - email address -->
                    <div class="col-sm-4 contact-information-box text-center appear animation animation-appear-from-right animation-delay-0-4">
                        <span class="icon icon-xl fa fa-envelope-o font-color-secondary"></span>
                        <h3 class="semi-bold">E-mail</h3>
                        <a href="mailto:hello@decreto.dk" data-toggle="tooltip" data-placement="bottom" title="Tryk for at åbne din mail klient.">hello@decreto.dk</a>
                    </div>
                    <!-- End - email address -->

                </div>
            </div>
        </div>
        <!-- End - contact information -->

        <!-- Begin - banner support -->
        <div class="background-color-primary banner-support" id="support">
            <div class="container">
                <div class="row">

                    <!-- Begin - text -->
                    <div class="col-sm-offset-1 col-sm-7 padding-y-m">

                        <h3 class="font-color-white" style="margin: 0;padding: 0;">
                            For support og hjælp brug da vores
                        </h3>

                    </div>
                    <!-- End - text -->

                    <!-- Begin - button -->
                    <div class="col-sm-4 padding-y-m text-center-xs text-right">
                        <a class="btn btn-tertiary" href="#" style="margin-top: -4px;">
                            support forum
                        </a>
                    </div>
                    <!-- End - button -->

                </div>
            </div>
        </div>
        <!-- End - banner support -->

    </div>
    <!-- End - content -->

    <!-- Begin - footer -->
    <footer class="footer hidden-print">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center-xs padding-top-xl">

                    <!-- Begin - logo -->
                    <a class="footer-logo" href="#" data-scroll-to="#banner"></a>
                    <!-- End - logo -->

                </div>
            </div>
            <div class="row">

                <!-- Begin - content -->
                <div class="col-md-8 col-md-offset-1 text-center-xs padding-bottom-xxl">
                    <h5>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </h5>
                </div>
                <!-- End - content -->

            </div>
            <div class="row">

                <!-- Begin - copyright text -->
                <div class="col-xs-12 text-center-xs text-right padding-bottom-m">
                    <p>
                        <small>
                            Copyright &copy; <?php print date( 'Y' ); ?> Decreto ApS
                        </small>
                    </p>
                </div>
                <!-- End - copyright text -->

            </div>
        </div>
    </footer>
    <!-- End - footer -->

</div>
<!-- End - wrapper -->