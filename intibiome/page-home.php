<?php
/* 
* Template Name: Home
*/
?>

<?php get_header(); ?>
<section id="hero-banner" class="container-fluid">
    <div class="row flex-wrap no-gutters">
        <div class="col d-none d-sm-none d-xl-block">
            <img src="<?php the_field('hero_banner_desktop'); ?>" alt="Banner Desktop">
        </div>
        <div class="col d-sm-block d-xl-none">
            <img src="<?php the_field('hero_banner_mobile'); ?>" alt="Banner Mobile">
        </div>
    </div>
</section>
<section id="about" class="wow animate__fadeInUp text-center container wrapper" data-wow-duration="1.8s">
    <?php the_field('descricao'); ?>
</section>
<section id="products-home" class="text-center container wow animate__fadeInUp" data-wow-duration="1.8s">
    <h2 class="section-title"><?php the_field('titulo_produtos'); ?></h2>
    <?php 
        $args = array(
            'post_type' => 'produtos',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC',
        );
        $loop = new WP_Query($args);
        if($loop->have_posts()): ?>
            <div class="products">
                <?php while($loop->have_posts()): $loop->the_post(); ?>
                    <div class="product">
                        <div class="content">
                            <a href="<?php the_permalink(); ?>" class="media">
                                <?php the_post_thumbnail('medium-large'); ?>
                            </a>
                            <div class="description">
                                <div class="excerpt">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="category">
                                <?php
                                    $terms = get_the_terms(get_the_ID(),'categoria-produto');
                                    foreach($terms as $t){
                                        echo $t->name;
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        <?php endif; ?>
</section>
<section id="mid-banner" class="container-fluid wow animate__fadeInUp" data-wow-duration="1.8s">
    <div class="flex-wrap">
        <div class="d-none d-sm-none d-xl-block">
            <img src="<?php the_field('mid_banner_desktop'); ?>" alt="Banner Desktop">
        </div>
        <div class="d-sm-block d-xl-none">
            <img src="<?php the_field('mid_banner_mobile'); ?>" alt="Banner Mobile">
        </div>
    </div>
</section>
<section id="posts-home" class="text-center container wrapper wow animate__fadeInUp" data-wow-duration="1.8s">
    <h2 class="section-title"><?php the_field('titulo_blog'); ?></h2>
    <?php 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC',
        );
        $loop = new WP_Query($args);
        if($loop->have_posts()): ?>
            <div class="list-posts">
                <?php while($loop->have_posts()): $loop->the_post(); ?>
                    <div class="post">
                        <div class="content">
                            <a href="<?php the_permalink(); ?>" class="media">
                                <?php the_post_thumbnail('medium-large'); ?>
                            </a>
                            <div class="description">
                                <div class="title text-left">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
            <a href="<?php the_field('botao_veja_mais_link'); ?>" target="_blank" class="btn-more">
                <?php the_field('botao_veja_mais_rotulo'); ?>
            </a>
        <?php endif; ?>
</section>
<?php get_footer(); ?>
