<?php
/**
 * Main Template File
 *
 * @package Solux_Energy
 */

get_header();
?>

<section class="section">
    <div class="container">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h1 class="section-title">', '</h1>'); ?>
                    </header>
                    
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            
            <?php the_posts_navigation(); ?>
        <?php else: ?>
            <p><?php esc_html_e('Nenhum conteúdo encontrado.', 'solux-energy'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
