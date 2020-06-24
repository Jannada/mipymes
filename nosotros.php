
        <main>
            <div class="contenedor-nosotros">
            <?php if(have_posts()) : while(have_posts()) :  the_post(); ?>
                <div class="mision">
                    <h3>Nuestra misión</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa facilis necessitatibus amet optio recusandae vel quas numquam dolore, assumenda eum neque, officia veniam accusamus laboriosam!</p>
                </div>
                <?php endwhile; else: ?>
                <?php endif;?>

                <div class="mision">
                    <h3>Nuestra visión</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa facilis necessitatibus amet optio recusandae vel quas numquam dolore, assumenda eum neque, officia veniam accusamus laboriosam!</p>
                </div>

                <div class="mision">
                    <h3>Nuestros valores</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa facilis necessitatibus amet optio recusandae vel quas numquam dolore, assumenda eum neque, officia veniam accusamus laboriosam!</p>
                </div>

            </div>

        </main>
  
       
