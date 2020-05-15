<?php /* Template Name: Home */ ?>


<?php get_header(); ?>

<?php
	$loopearrings = new WP_Query( array(
	    'post_type' => 'earrings',
	    'posts_per_page' => 4,
	    'orderby' => 'rand',
	  )
    );

    
?>
<?php
    $looprings = new WP_Query( array(
	    'post_type' => 'rings',
	    'posts_per_page' => 4,
	    'orderby' => 'rand',
	  )
    );
?>

<div class="container">
    
    <div class="row">
        <h2 class="title__two">Anillos</h2>
        <?php while ( $looprings->have_posts() ) : $looprings->the_post(); ?>
            <div class="col col-md-4">
                <div class="card homeProducts__card">
                    <?php if ( get_field( 'rings_image') ) { ?>
                        <img src="<?php the_field( 'rings_image' ); ?>" class="homeProducts__img" />
                    <?php } ?>
                    <h2 class="homeProducts__title"><?php the_field( 'rings__title' ); ?></h2>
                    <p class="homeProducts__text"><?php the_field( 'rings__description' ); ?></p>
                    <?php if( get_field( 'postype_price' ) ): ?>
                        <p class="homeProducts__price">Precio: <span><?php the_field( 'postype_price' ); ?></span></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>   
    </div>
    <div class="row">
        <h2 class="title__two">Aretes</h2>
        <?php while ( $loopearrings->have_posts() ) : $loopearrings->the_post(); ?>
            <div class="col col-md-4">
                <div class="card homeProducts__card">
                    <?php if ( get_field( 'earrings_image') ) { ?>
                        <img src="<?php the_field( 'earrings_image' ); ?>" class="homeProducts__img" />
                    <?php } ?>
                    <h2 class="homeProducts__title"><?php the_field( 'earrings__title' ); ?></h2>
                    <p class="homeProducts__text"><?php the_field( 'earrings__description' ); ?></p>
                    <?php if( get_field( 'postype_price' ) ): ?>
                        <p class="homeProducts__price">Precio: <span><?php the_field( 'postype_price' ); ?></span></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; wp_reset_query(); ?>            
    </div>
    <div class="row homeDetails__row">
        <div class="col col-md-4">
            <div class="card homeDetails__card">
                <div class="homeDetails__ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svgs/details1.svg" alt="">
                </div>
                <p class="homeDetails__title">Personaliza tus joyas</p>
                <p class="homeDetails__text">Todos los productos pueden ser completamente personalizados de acuerdo a tus preferencias.</p>
            </div>
        </div>
        <div class="col col-md-4">
            <div class="card homeDetails__card">
                <div class="homeDetails__ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svgs/details2.svg" alt="">
                </div>
                <p class="homeDetails__title">100% Satisfacción garantizada</p>
                <p class="homeDetails__text">Todos los productos pueden ser completamente personalizados de acuerdo a tus preferencias.</p>
            </div>
        </div>
        <div class="col col-md-4">
            <div class="card homeDetails__card">
                <div class="homeDetails__ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svgs/details3.svg" alt="">
                </div>
                <p class="homeDetails__title">Servicio orientado al cliente</p>
                <p class="homeDetails__text">Llámenos al 5500248 <br> Lunes - viernes, 8.00 - 18.00 h <br> ventas@joyeriasafn.com</p>
            </div>
        </div>
        <div class="col col-md-4">
            <div class="card homeDetails__card">
                <div class="homeDetails__ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svgs/details4.svg" alt="">
                </div>
                <p class="homeDetails__title">Entrega asegurada gratuita</p>
                <p class="homeDetails__text">Joyerías AFN garantiza un envío seguro para cada pedido.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="homeOpinions__top">
                <p class="homeOpinions__title">Opiniones de nuestros clientes</p>
            </div>
        </div>
        <div class="col-md-3 col">
            <div class="homeOpinions__boxes">
                <div class="homeOpinions__box">
                    <div class="homeOpinions__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/opinion1.png" alt="">
                    </div>
                    <div class="homeOpinions__stars">
                        <ul class="homeOpinions__stars__menu">
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="homeOpinions__stars"></div>
                    <p class="homeOpinions__name">Juana Martinez</p>
                    <div class="homeOpinions__country">España</div>
                    <p class="homeOpinions__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col">
            <div class="homeOpinions__boxes">
                <div class="homeOpinions__box">
                    <div class="homeOpinions__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/opinion2.png" alt="">
                    </div>
                    <div class="homeOpinions__stars">
                        <ul class="homeOpinions__stars__menu">
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <p class="homeOpinions__name">Juana Martinez</p>
                    <div class="homeOpinions__country">España</div>
                    <p class="homeOpinions__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col">
            <div class="homeOpinions__boxes">
                <div class="homeOpinions__box">
                    <div class="homeOpinions__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/opinion3.png" alt="">
                    </div>
                    <div class="homeOpinions__stars">
                        <ul class="homeOpinions__stars__menu">
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                            <li class="homeOpinions__stars__list"><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="homeOpinions__stars"></div>
                    <p class="homeOpinions__name">Juana Martinez</p>
                    <div class="homeOpinions__country">España</div>
                    <p class="homeOpinions__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>