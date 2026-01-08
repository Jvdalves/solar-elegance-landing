<?php
/**
 * Footer Template
 *
 * @package Solux_Energy
 */
?>
</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <!-- Brand Column -->
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: hsl(38, 92%, 50%);">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M12 2v2"></path>
                        <path d="M12 20v2"></path>
                        <path d="m4.93 4.93 1.41 1.41"></path>
                        <path d="m17.66 17.66 1.41 1.41"></path>
                        <path d="M2 12h2"></path>
                        <path d="M20 12h2"></path>
                        <path d="m6.34 17.66-1.41 1.41"></path>
                        <path d="m19.07 4.93-1.41 1.41"></path>
                    </svg>
                    <span>Solux<span class="highlight">Energy</span></span>
                </a>
                <p>Transformando o sol de Belém em economia e patrimônio para famílias que valorizam qualidade.</p>
            </div>

            <!-- Links Column -->
            <div class="footer-links">
                <h4>Navegação</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'fallback_cb'    => function() {
                        ?>
                        <ul>
                            <li><a href="#beneficios">Benefícios</a></li>
                            <li><a href="#tecnologia">Tecnologia</a></li>
                            <li><a href="#depoimentos">Depoimentos</a></li>
                            <li><a href="#contato">Contato</a></li>
                        </ul>
                        <?php
                    },
                ));
                ?>
            </div>

            <!-- Contact Column -->
            <div class="footer-links">
                <h4>Contato</h4>
                <ul>
                    <?php if ($phone = get_theme_mod('phone_number')): ?>
                        <li><a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if ($email = get_theme_mod('email_address')): ?>
                        <li><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></li>
                    <?php endif; ?>
                    
                    <li><a href="<?php echo esc_url(solux_whatsapp_link('Olá! Gostaria de saber mais sobre energia solar.')); ?>" target="_blank">WhatsApp</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Solux Energy. Todos os direitos reservados.</p>
            
            <div class="footer-social">
                <?php if ($instagram = get_theme_mod('instagram_url')): ?>
                    <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if ($facebook = get_theme_mod('facebook_url')): ?>
                    <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if ($linkedin = get_theme_mod('linkedin_url')): ?>
                    <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect width="4" height="12" x="2" y="9"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                <?php endif; ?>

                <?php if ($youtube = get_theme_mod('youtube_url')): ?>
                    <a href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path>
                            <path d="m10 15 5-3-5-3z"></path>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
