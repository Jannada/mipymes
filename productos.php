
        <main>
            <div class="contenedor-productos ">
                <div class="contenedor">
                    <h3 class="titulo">Productos</h3>
                    <div class="contenedor-productos_1">
                        <?php if(have_posts()) : while(have_posts()) : the_post();?>
                        <div class="producto">
                            <div class="thumb">
                                <a href="#" target="_blanq"><img height="250px" src="<?php bloginfo('template_url')?>/images/product1.jpg" class="d-block w-100" alt="..."></a>
                            </div>
                            <div class="descripcion">
                                <p class="nombre">Nombre producto</p>
                                <p class="detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <i class="fas fa-shopping-cart pointer pink_cart"> Add to cart</i>

                            </div>
                        </div>

                        <?php endwhile; else : ?>
                        <?php endif; ?>

                        <div class="producto">
                            <div class="thumb">
                                <a href="#" target="_blanq"><img height="250px" src="<?php bloginfo('template_url')?>/images/product1.jpg" class="d-block w-100" alt="..."></a>
                            </div>
                            <div class="descripcion">
                                <p class="nombre">Nombre producto</p>
                                <p class="detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <i class="fas fa-shopping-cart pointer pink_cart"> Add to cart</i>
                            </div>
                        </div>

                        <div class="producto">
                            <div class="thumb">
                                <a href="#" target="_blanq"><img height="250px" src="<?php bloginfo('template_url')?>/images/product1.jpg" class="d-block w-100" alt="..."></a>
                            </div>
                            <div class="descripcion">
                                <p class="nombre">Nombre producto</p>
                                <p class="detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <i class="fas fa-shopping-cart pointer pink_cart"> Add to cart</i>

                            </div>
                        </div>

                        <div class="producto">
                            <div class="thumb">
                                <a href="#" target="_blanq"><img height="250px" src="<?php bloginfo('template_url')?>/images/product2.jpg" class="d-block w-100" alt="..."></a>
                            </div>
                            <div class="descripcion">
                                <p class="nombre">Nombre producto</p>
                                <p class="detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <i class="fas fa-shopping-cart pointer pink_cart"> Add to cart</i>

                            </div>
                        </div>

                        <div class="producto">
                            <div class="thumb">
                                <a href="#" target="_blanq"><img height="250px" src="<?php bloginfo('template_url')?>/images/product2.jpg" class="d-block w-100" alt="..."></a>
                            </div>
                            <div class="descripcion">
                                <p class="nombre">Nombre producto</p>
                                <p class="detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <i class="fas fa-shopping-cart pointer pink_cart"> Add to cart</i>

                            </div>
                        </div>
                        <div class="producto">
                            <div class="thumb">
                                <a href="#" target="_blanq"><img height="250px" src="<?php bloginfo('template_url')?>/images/product2.jpg" class="d-block w-100" alt="..."></a>
                            </div>
                            <div class="descripcion">
                                <p class="nombre">Nombre producto</p>
                                <p class="detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <i class="fas fa-shopping-cart pointer pink_cart"> Add to cart</i>

                            </div>
                        </div>

                        <div class="producto">
                            <div class="thumb">
                                <a href="#" target="_blanq"><img height="250px" src="<?php bloginfo('template_url')?>/images/product3.jpg" class="d-block w-100" alt="..."></a>
                            </div>
                            <div class="descripcion">
                                <p class="nombre">Nombre producto</p>
                                <p class="detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <i class="fas fa-shopping-cart pointer pink_cart"> Add to cart</i>

                            </div>
                        </div>

                        <div class="producto">
                            <div class="thumb">
                                <a href="#" target="_blanq"><img height="250px" src="<?php bloginfo('template_url')?>/images/product3.jpg" class="d-block w-100" alt="..."></a>
                            </div>
                            <div class="descripcion">
                                <p class="nombre">Nombre producto</p>
                                <p class="detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <i class="fas fa-shopping-cart pointer pink_cart"> Add to cart</i>

                            </div>
                        </div>
                        
                        <div class="producto">
                            <div class="thumb">
                                <a href="#" target="_blanq"><img height="250px" src="<?php bloginfo('template_url')?>/images/product3.jpg" class="d-block w-100" alt="..."></a>
                            </div>
                            <div class="descripcion">
                                <p class="nombre">Nombre producto</p>
                                <p class="detalle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <i class="fas fa-shopping-cart pointer pink_cart"> Add to cart</i>

                            </div>
                        </div>
    
                </div>
            </div>
        <!-- paginacion -->
        <div class="row pagnt">
            <div class="col-md-12">
                <ul>
                    <li class="disabled">P. 1 de 6</li>
                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">></a></li>
                </ul>
            </div>
        </div>
        <!-- paginacion -->

        </main>
        