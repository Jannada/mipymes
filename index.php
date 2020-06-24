
<?php get_header(); ?>

        <!-- main -->
        <main>
            <!-- .section-one -->
            <div class="section_one">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="<?php bloginfo('template_url')?>/images/store-1a.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?php bloginfo('template_url')?>/images/store-2a.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="<?php bloginfo('template_url')?>/images/store-3a.jpg" class="d-block w-100" alt="...">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </div>
            <!-- .section-one -->
            <!-- <div class="section_two">
                nuse
            </div> -->
            <div class="section_contact">
                <h3 class="titulo">Contacto</h3>

                <div class="contenedor-contacto">

                    <div class="ubicacion">
                        <p>Santo Domingo Este,</p>
                        <p>República Dominicana</p>
                    </div>

                    <div class="contacto-detalle">
                        <p>(829) 738-4852</p>
                        <p>centromipymes @itla.edu.do</p>
                    </div>
                    
                </div>
                <div class="social">
                    <i class="icon blue fab fa-facebook-f"></i>
                    <i class="icon pink fab fa-instagram "></i>
                    <i class="icon blue-light fab fa-twitter"></i>
                </div>
                <div class="form">
                    <p>
                        <a class="d-block text-center  mt-4" data-toggle="collapse" href="#form_contact" role="button" aria-expanded="false" aria-controls="form_contact">¡Envíanos un mensaje!</a>
                        
                      </p>
                      <div class="row">
                        <div class="col">
                          <div class="collapse multi-collapse" id="form_contact">
                            <div class="container card card-body col-lg-6 col-md-8 col-sm-12">
                                <h4 class="text-center mb-4">Contáctanos</h4>
                                <form>
                                    <!-- email -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email_person" aria-describedby="emailHelp" placeholder="Email">
                                        <small id="emailHelp" class="form-text text-muted">No compartiremos tu email con nadie más.</small>
                                    </div>
                                    <!-- email -->
                                    <!-- nombre -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name_person" placeholder="Nombre">
                                    </div>
                                    <!-- nombre -->

                                    <!-- Cuerpo del mensaje -->
                                    <div class="form-group">
                                        <textarea class="form-control" id="message_body" rows="3" placeholder="Mensaje"></textarea>
                                      </div>
                                    <!-- Cuerpo del mensaje -->


                   

                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                  </form>
                            </div>
                          </div>
                        </div>

                      </div>
                </div>
            </div>
            <div class="section_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.7134172626925!2d-69.66484998544895!3d18.451316676105087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf7ff3f1653e37%3A0xc80c36909a523777!2sInstituto%20Tecnol%C3%B3gico%20de%20Las%20Am%C3%A9ricas%20(ITLA)!5e0!3m2!1ses-419!2sdo!4v1592880151719!5m2!1ses-419!2sdo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </main>
        <!-- main -->
        <!-- Footer -->
<?php get_footer(); ?>
