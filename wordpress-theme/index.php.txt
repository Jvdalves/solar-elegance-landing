<?php
/**
 * Main Index Template
 * 
 * This is the default template if no other template is available.
 * For a landing page, we redirect to front-page.php
 *
 * @package Solux_Energy
 */

get_header();
?>

<section class="section" style="min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div class="section-header">
            <h1><?php the_title(); ?></h1>
        </div>
        
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Nenhum conteúdo encontrado.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
