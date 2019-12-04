<?php get_header(); ?>

<div class="container-fluid" id="front-page">
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flota.jpg" class="img-fluid" alt="bus1">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flota2.jpg" class="img-fluid" alt="bus2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/man.jpg" class="img-fluid" alt="bus3">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="about-page">
    <div class="row">
        <div class="col">
            <h1 class="h1-responsive font-weight-bold text-center my-4">O nas</h1>
            <p>Oferujemy wynajem turystycznych busów i autokarów w przewozach krajowych i zagranicznych oraz
                podmiejskich autobusów na krótkich trasach po Warszawie. Posiadamy rozbudowaną flotę transportową,
                dzięki czemu możemy dopasować odpowiedni środek transportu dla każdej grupy pasażerów. Zatrudniamy
                doświadczonych kierowców z wysoką kulturą osobistą.</p>
            <p>Oferujemy nie tylko wynajem autokarów, ale również wynajem małych busów turystycznych, mieszczących
                kilka osób oraz wielkopojemnych autobusów podmiejskich. W skład naszej floty wchodzą pojazdy, takich
                marek jak Mercedes, Man, Bova czy Renault i to właśnie dzięki nim jesteśmy w stanie profesjonalnie
                oraz kompleksowo obsłużyć różnego rodzaju wydarzenia - śluby, wycieczki, konferencje, pogrzeby, a
                także zapewnić codzienny transport pracowników itp. Dostosowujemy działania do zapotrzebowania i
                oczekiwań Klientów. Nasza propozycja skierowana jest do firm, instytucji oraz osób prywatnych.</p>
        </div>
    </div>
</div>
<div class="container-fluid" id="fleet-page">
    <div class="row">
        <div class="col-sm-6 fleet-left">
            <h2 class="font-weight-bold" id="btn-left">Busy</h2>
            <div class="view overlay zoom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flota2.jpg" class="img-fluid photo"
                    id="img-left" alt="buses">
            </div>
        </div>
        <div class="col-sm-6 fleet-right">
            <h2 class="font-weight-bold" id="btn-right">Autokary</h2>
            <div class="view overlay zoom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flota.jpg" class="img-fluid photo"
                    id="img-right" alt="coaches">
            </div>
        </div>
        <div class="col-sm-12" id="coaches">
            <i class="fas fa-times fa-3x mr-5 d-flex justify-content-end text-white" id="btn-right-close"></i>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay" id="coaches-1">
                            <img class="card-img-top"
                                src="<?php echo get_template_directory_uri(); ?>/images/scania-new.jpg"
                                alt="Card image cap">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">SCANIA TOURING</h4>
                            <!-- Text -->
                            <ul>
                                <li>AUTOKAR TURYSTYCZNY NA 50 OS.</li>
                                <li>klimatyzacja z indywidualnym rozprowadzaniem</li>
                                <li>DVD, MP3, radio, WC, lodówka, mikrofon</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay" id="coaches-2">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/man.jpg"
                                alt="Card image cap">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">MAN LION STARS</h4>
                            <!-- Text -->
                            <ul>
                                <li>AUTOKAR TURYSTYCZNY NA 50 OS.</li>
                                <li>klimatyzacja z indywidualnym rozprowadzaniem</li>
                                <li>DVD, MP3, radio, WC, lodówka, mikrofon</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay" id="coaches-3">
                            <img class="card-img-top"
                                src="<?php echo get_template_directory_uri(); ?>/images/volvo-new.jpg"
                                alt="Card image cap">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">VOLVO IRIZAR CENTURY</h4>
                            <!-- Text -->
                            <ul>
                                <li>AUTOKAR TURYSTYCZNY NA 63 OS.</li>
                                <li>klimatyzacja z indywidualnym rozprowadzaniem</li>
                                <li>WC, mikrofon</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay" id="coaches-4">
                            <img class="card-img-top"
                                src="<?php echo get_template_directory_uri(); ?>/images/renault.jpg"
                                alt="Card image cap">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">RENAULT ILLIADE</h4>
                            <!-- Text -->
                            <ul>
                                <li>AUTOKAR TURYSTYCZNY NA 56 OS.</li>
                                <li>klimatyzacja, ogrzewanie postojowe</li>
                                <li>DVD, radio, lodówka, mikrofon, WC</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" id="buses">
            <!-- <button class="btn btn-primary" id="btn-right-close">Zamknij</button> -->
            <i class="fas fa-times fa-3x mr-5 d-flex justify-content-end text-white" id="btn-left-close"></i>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay" id="buses-1">
                            <img class="card-img-top"
                                src="<?php echo get_template_directory_uri(); ?>/images/mercedes2-side-new.jpg"
                                alt="Card image cap">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">MERCEDES SPRINTER 518</h4>
                            <!-- Text -->
                            <ul>
                                <li>BUS TURYSTYCZNY NA 24 OS. VIP</li>
                                <li>klimatyzacja z indywidualnym nawiewem</li>
                                <li>DVD, telewizja, rozkładane fotele</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay" id="buses-2">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/images/iveco.jpg"
                                alt="Card image cap">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">IVECO PRODIG</h4>
                            <!-- Text -->
                            <ul>
                                <li>BUS TURYSTYCZNY NA 32 OS.</li>
                                <li>klimatyzacja z indywidualnym rozprowadzaniem</li>
                                <li>radio, stoliki, rozkładane fotele</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay" id="buses-3">
                            <img class="card-img-top"
                                src="<?php echo get_template_directory_uri(); ?>/images/mercedes-side3-new.jpg"
                                alt="Card image cap">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">MERCEDES SPRINTER MERCUS</h4>
                            <!-- Text -->
                            <ul>
                                <li>BUS TURYSTYCZNY NA 20 OS. VIP</li>
                                <li>klimatyzacja z indywidualnym rozprowadzaniem</li>
                                <li>DVD, telewizja, wi-fi, rozkładane fotele</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card image -->
                        <div class="view overlay" id="buses-4">
                            <img class="card-img-top"
                                src="<?php echo get_template_directory_uri(); ?>/images/mercedes515-new.jpg"
                                alt="Card image cap">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title">MERCEDES SPRINTER 515</h4>
                            <!-- Text -->
                            <ul>
                                <li>BUS TURYSTYCZNY NA 20 OS.</li>
                                <li>klimatyzacja z indywiduanym nawiewem</li>
                                <li>DVD, telewizja, rozkładane fotele</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="coaches-modal-1" tabindex="-1" role="dialog"
            aria-labelledby="coaches-modal-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="carousel-coaches-1" class="carousel-coaches-1 carousel slide"
                            data-ride=".carousel-coaches-1">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/scania.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/scania-side.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/scania-side2.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href=".carousel-coaches-1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href=".carousel-coaches-1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" id="coaches-modal-2" tabindex="-1" role="dialog"
            aria-labelledby="coaches-modal-2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="carousel-coaches-2" class="carousel-coaches-2 carousel slide"
                            data-ride=".carousel-coaches-2">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/man.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/man-w2.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/man-side.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href=".carousel-coaches-2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href=".carousel-coaches-2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" id="coaches-modal-3" tabindex="-1" role="dialog"
            aria-labelledby="coaches-modal-3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="carousel-coaches-3" class="carousel-coaches-3 carousel slide"
                            data-ride=".carousel-coaches-3">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/volvo.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/volvo-w.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/volvo-back.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href=".carousel-coaches-3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href=".carousel-coaches-3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" id="coaches-modal-4" tabindex="-1" role="dialog"
            aria-labelledby="coaches-modal-3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="carousel-coaches-4" class="carousel-coaches-4 carousel slide"
                            data-ride=".carousel-coaches-4">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/renault.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/renault2.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/DSC01202.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href=".carousel-coaches-4" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href=".carousel-coaches-4" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="buses-modal-1" tabindex="-1" role="dialog"
            aria-labelledby="buses-modal-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="carousel-buses-1" class="carousel-buses-1 carousel slide"
                            data-ride=".carousel-buses-1">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mercedes2.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mercedes2-back.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mercedes2-side-new.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href=".carousel-buses-1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href=".carousel-buses-1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" id="buses-modal-2" tabindex="-1" role="dialog"
            aria-labelledby="buses-modal-2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="carousel-buses-2" class="carousel-buses-2 carousel slide"
                            data-ride=".carousel-buses-2">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/iveco.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/iveco-side.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/iveco-w.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href=".carousel-buses-2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href=".carousel-buses-2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" id="buses-modal-3" tabindex="-1" role="dialog"
            aria-labelledby="buses-modal-3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="carousel-buses-3" class="carousel-buses-3 carousel slide"
                            data-ride=".carousel-buses-3">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mercedes-side4.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mercedes-back2.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mercedes-w.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href=".carousel-buses-3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href=".carousel-buses-3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade bs-example-modal-lg" id="buses-modal-4" tabindex="-1" role="dialog"
            aria-labelledby="buses-modal-3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="carousel-buses-4" class="carousel-buses-4 carousel slide"
                            data-ride=".carousel-buses-4">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mercedes515-new.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mercedes5152.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/mercedes515w.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href=".carousel-buses-4" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href=".carousel-buses-4" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--Section: Contact v.2-->
<section class="mb-4" id="contact-page">

    <!--Section heading-->
    <h1 class="h1-responsive font-weight-bold text-center my-4">Kontakt</h1>

    <div class="row">
        <!--Grid column-->
        <div class="col-md-12 text-center pb-5">
            <div class="row">
                <div class="col-md-4">
                    <a href="https://goo.gl/maps/Z1G4ZJB1KRWvh9mQ6" target="_blank">
                        <i class="fas fa-map-marker-alt mt-4 fa-2x"></i>
                        <p>Domaniewek 2/2, 05-840 Brwinów</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-phone mt-4 fa-2x"></i>
                    <p><a href="tel:222154183"> (22) 215 41 83</a>, <a href="tel:691487883"> 691 487 883</a></p>
                </div>
                <div class="col-md-4">
                    <a href="mailto:biuro@mk2.com.pl" target="_blank">
                        <i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>biuro@mk2.com.pl</p>
                    </a>
                </div>
            </div>
        </div>
        <!--Grid column-->
        <div class="container-fluid" id="orders-page">
            <div class="row">
                <div class="col">
                    <h3 class="h3-responsive font-weight-bold text-center my-4">Wycena</h3>
                    <ul>
                        <li>Aby otrzymać wycenę prosimy o kontakt telefoniczny pod numerami:
                            <b><a href="tel:222154183"> (22) 215 41 83</a>, <a href="tel:691487883">kom.
                                    691-487-883</a></b> lub mailowy na adres <b><a href="mailto:biuro@mk2.com.pl"
                                    target="_blank">biuro@mk2.com.pl</a></b>.</li>
                        <li>Wskazane jest przygotowanie informacji na temat:</li>
                        <li>przewidywanej ilości pasażerów</li>
                        <li>trasy przejazdu (miejsca podstawienia i miejsca docelowego)</li>
                        <li>daty przejazdu</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <h3 class="h3-responsive font-weight-bold text-center my-4">Zlecenie</h3>
                    <p>W celu zamówienia prosimy przesłać wypełnione zlecenie mailem lub pocztą tradycyjną.
                        Aby pobrać wzór zlecenia kliknij -> <b><a
                                href="<?php echo get_template_directory_uri(); ?>/zlecenie_przewozu_osob.doc"
                                download="zlecenie_przewozu_osob.doc">ZLECENIE</a></b></p>
                </div>
            </div>
        </div>
        <!--Grid column-->
        <p class="text-center w-responsive mx-auto pt-4">Aby wysłać wiadomość korzystając z poniższego formularza,
            należy wypełnić wszystkie pola.</p>
        <div class="col-md-12 mb-md-0 mb-5">
            <!-- Default unchecked -->
            <form id="contact-form" name="contact-form" action="<?php echo get_template_directory_uri();?>/mail.php"
                method="POST" onsubmit="return validateForm()">
                <!--Grid row-->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="form" name="form" value="1">
                    <label for="form" class="custom-control-label underline">Wyrażam zgodę na
                        przetwarzanie moich
                        danych osobowych zawartych w poniższym formularzu.</label>
                </div>
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Imię i nazwisko</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Temat</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2"
                                class="form-control md-textarea"></textarea>
                            <label for="message">Treść</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6Ld3c8EUAAAAACoJsx3GDBBlZnKoHoli9pL9H0uW"
                        data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback">
                    </div>
                    <input class="form-control d-none" data-recaptcha="true" name="recaptcha" required
                        data-error="Please complete the Captcha">
                    <div class="help-block with-errors"></div>
                </div>
            </form>
            <div class="text-center text-md-left pl-4">
                <a class="btn btn-send" onclick="validateForm()">Wyślij</a>
            </div>
            <div id="status"></div>
        </div>
    </div>

</section>

<?php
    get_footer();
?>