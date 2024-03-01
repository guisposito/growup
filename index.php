<?php
/**
 * The main template file.
 *
 *
 * @package GrowUp-Web
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<main id="main" class="main" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article>
    <?php
    $titulo = get_the_title();
    if ($titulo == "Home") {
        the_content();
    } else {
    ?>
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
    <p><?php the_content(); ?></p>

    <?php
    }
    ?>
</article>            
    <?php endwhile?>
        <div class="navegacao">
            <div class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></div>
            <div class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></div>
        </div>
    <?php else: ?>
        <article>
            <h2>Nada Encontrado</h2>
            <p>Erro 404</p>
            <p>Lamentamos mas não foram encontrados artigos.</p>
        </article>            
    <?php endif; ?>
</main>
<?php

get_footer();
