<?php
/**
 * Front Page Template (Homepage)
 *
 * @package Solux_Energy
 */

get_header();
?>

<!-- ========================================
     HERO SECTION
     ======================================== -->
<section class="hero-section" id="hero">
    <div class="hero-bg">
        <?php 
        $hero_image = get_theme_mod('hero_image');
        if ($hero_image): 
        ?>
            <img src="<?php echo esc_url($hero_image); ?>" alt="Energia Solar Premium">
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-solar.jpg" alt="Energia Solar Premium">
        <?php endif; ?>
        <div class="hero-overlay"></div>
    </div>
    
    <div class="container">
        <div class="hero-content">
            <div class="hero-text reveal">
                <h1>
                    <?php echo esc_html(get_theme_mod('hero_title', 'O sol de amanhã pode gerar lucro ou despesa.')); ?>
                    <span class="highlight">A escolha é sua.</span>
                </h1>
                <p><?php echo esc_html(get_theme_mod('hero_subtitle', 'Pare de financiar a ineficiência da concessionária. Transforme sua conta de luz em patrimônio com a engenharia de elite da Solux.')); ?></p>
                <a href="#contato" class="btn btn-primary btn-lg animate-pulse-glow">
                    Simular Economia Agora
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            
            <div class="hero-form-card reveal">
                <h3>Simule sua Economia</h3>
                <p>Descubra quanto você pode economizar em 30 segundos</p>
                <form id="hero-lead-form" class="lead-form">
                    <?php wp_nonce_field('solux_nonce', 'solux_nonce_field'); ?>
                    <div class="form-group">
                        <label class="form-label" for="hero-name">Seu Nome *</label>
                        <input type="text" id="hero-name" name="name" class="form-input" placeholder="Como podemos chamá-lo?" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="hero-phone">WhatsApp *</label>
                        <input type="tel" id="hero-phone" name="phone" class="form-input" placeholder="(91) 99999-9999" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="hero-bill">Valor da Conta de Luz</label>
                        <select id="hero-bill" name="bill_value" class="form-select">
                            <option value="">Selecione a faixa</option>
                            <option value="500-800">R$ 500 - R$ 800</option>
                            <option value="800-1200">R$ 800 - R$ 1.200</option>
                            <option value="1200-2000">R$ 1.200 - R$ 2.000</option>
                            <option value="2000+">Acima de R$ 2.000</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                        Quero Minha Simulação Gratuita
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     PAIN SECTION - A Dor
     ======================================== -->
<section class="pain-section section" id="beneficios">
    <div class="container">
        <div class="section-header reveal">
            <h2>Sua conta de luz é um <span class="text-danger">aluguel</span> que nunca acaba.</h2>
            <p>Imagine alugar um apartamento e, após 30 anos pagando, ele ainda não ser seu. É isso que você faz com a concessionária hoje.</p>
        </div>
        
        <div class="comparison-chart reveal">
            <div class="chart-bar">
                <div class="chart-label">
                    <span>Equatorial (30 Anos)</span>
                    <span class="text-danger">R$ 540.000+</span>
                </div>
                <div class="chart-bar-fill danger">PERDA TOTAL</div>
            </div>
            
            <div class="chart-bar">
                <div class="chart-label">
                    <span>Solux Energy</span>
                    <span class="text-gold">R$ 65.000</span>
                </div>
                <div class="chart-bar-fill success">PATRIMÔNIO</div>
            </div>
        </div>
        
        <div style="text-align: center;" class="reveal">
            <a href="#contato" class="btn btn-primary btn-lg">
                Quero Demitir a Concessionária
            </a>
        </div>
    </div>
</section>

<!-- ========================================
     OPPORTUNITY COST SECTION
     ======================================== -->
<section class="opportunity-section section">
    <div class="container">
        <div class="section-header reveal">
            <h2 style="color: hsl(var(--light));">O que você faria com <span class="text-gold">R$ 1.500</span> a mais todo mês?</h2>
            <p style="color: hsl(var(--light) / 0.8);">Esse é o valor médio desperdiçado na conta de luz. Veja o que esse dinheiro compraria:</p>
        </div>
        
        <div class="opportunity-cards">
            <div class="opportunity-card reveal">
                <div class="opportunity-card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                        <path d="M12 18h.01"></path>
                    </svg>
                </div>
                <span class="opportunity-card-badge">1 Ano</span>
                <h3>iPhone 16 Pro Max</h3>
                <p>Todo ano, você entrega um smartphone de topo de linha para a concessionária.</p>
            </div>
            
            <div class="opportunity-card reveal">
                <div class="opportunity-card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"></path>
                        <circle cx="7" cy="17" r="2"></circle>
                        <path d="M9 17h6"></path>
                        <circle cx="17" cy="17" r="2"></circle>
                    </svg>
                </div>
                <span class="opportunity-card-badge">5 Anos</span>
                <h3>Entrada de Carro de Luxo</h3>
                <p>Em 5 anos, sua conta de luz pagou a entrada de um carro que você não dirige.</p>
            </div>
            
            <div class="opportunity-card reveal">
                <div class="opportunity-card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                    </svg>
                </div>
                <span class="opportunity-card-badge">Vida Útil</span>
                <h3>R$ 600.000+ Acumulados</h3>
                <p>Ao longo da vida do sistema, a economia paga uma faculdade de medicina.</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 3rem;" class="reveal">
            <a href="#contato" class="btn btn-primary btn-lg">
                Quero Esses Resultados Para Mim
            </a>
        </div>
    </div>
</section>

<!-- ========================================
     TESTIMONIALS SECTION
     ======================================== -->
<section class="testimonials-section section" id="depoimentos">
    <div class="container">
        <div class="section-header reveal">
            <h2>Não acredite na gente. <span class="text-gold">Acredite nos seus vizinhos.</span></h2>
            <p>Famílias reais, resultados reais em Belém e Ananindeua.</p>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card reveal">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-1.jpg" alt="Depoimento Cliente 1">
                <div class="testimonial-overlay">
                    <div class="testimonial-play">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </div>
                    <div class="testimonial-info">
                        <h4>Família Santos</h4>
                        <p>Economia de R$ 1.200/mês</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card reveal">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-2.jpg" alt="Depoimento Cliente 2">
                <div class="testimonial-overlay">
                    <div class="testimonial-play">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </div>
                    <div class="testimonial-info">
                        <h4>Família Oliveira</h4>
                        <p>Economia de R$ 890/mês</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card reveal">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-3.jpg" alt="Depoimento Cliente 3">
                <div class="testimonial-overlay">
                    <div class="testimonial-play">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </div>
                    <div class="testimonial-info">
                        <h4>Família Costa</h4>
                        <p>Economia de R$ 1.500/mês</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     TECHNOLOGY SECTION
     ======================================== -->
<section class="technology-section section" id="tecnologia">
    <div class="container">
        <div class="technology-content">
            <div class="reveal">
                <h2>Equipamentos de Elite que aguentam o <span class="text-gold">"Sol e Chuva"</span> de Belém.</h2>
                <p style="margin-bottom: 2rem; opacity: 0.8;">Tecnologia desenvolvida para o clima amazônico, com garantias que protegem seu investimento por décadas.</p>
                
                <div class="technology-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h4>Proteção Anti-Corrosão</h4>
                            <p>Resistente à maresia e umidade amazônica.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 8v4l3 3"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                        </div>
                        <div>
                            <h4>Garantia de 25 Anos</h4>
                            <p>Performance linear garantida por contrato.</p>
                        </div>
                    </div>
                    
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect>
                                <path d="M12 18h.01"></path>
                            </svg>
                        </div>
                        <div>
                            <h4>Monitoramento via App</h4>
                            <p>Acompanhe sua geração em tempo real.</p>
                        </div>
                    </div>
                </div>
                
                <a href="#contato" class="btn btn-primary btn-lg" style="margin-top: 2rem;">
                    Garantir Tecnologia de Ponta
                </a>
            </div>
            
            <div class="technology-image reveal">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/technology-solar.jpg" alt="Tecnologia Solar Premium">
                <div class="technology-badge">
                    <div class="technology-badge-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 8v4l3 3"></path>
                            <circle cx="12" cy="12" r="10"></circle>
                        </svg>
                    </div>
                    <div class="technology-badge-text">
                        <h5>Garantia Estendida</h5>
                        <p>25 anos de performance garantida</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     CONCIERGE SECTION
     ======================================== -->
<section class="concierge-section section">
    <div class="container">
        <div class="section-header reveal">
            <h2>Nós cuidamos da <span class="text-gold">engenharia</span>. Você cuida do <span class="text-gold">conforto</span>.</h2>
            <p>Do primeiro contato à ativação, uma experiência premium sem burocracia.</p>
        </div>
        
        <div class="process-timeline">
            <div class="process-step reveal">
                <div class="process-step-number">1</div>
                <h4>Vistoria Premium</h4>
                <p>Análise técnica detalhada do seu imóvel.</p>
            </div>
            
            <div class="process-step reveal">
                <div class="process-step-number">2</div>
                <h4>Engenharia & Projeto</h4>
                <p>Sistema dimensionado para sua necessidade.</p>
            </div>
            
            <div class="process-step reveal">
                <div class="process-step-number">3</div>
                <h4>Burocracia Zero</h4>
                <p>Homologação completa com a concessionária.</p>
            </div>
            
            <div class="process-step reveal">
                <div class="process-step-number">4</div>
                <h4>Ativação & Monitoramento</h4>
                <p>Sistema funcionando + suporte contínuo.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     CONTACT SECTION
     ======================================== -->
<section class="contact-section section" id="contato">
    <div class="container">
        <div class="contact-content">
            <div class="contact-text reveal">
                <h2>Pronto para <span class="highlight">parar de perder</span> dinheiro?</h2>
                <p>Solicite sua análise de viabilidade gratuita e descubra quanto você pode economizar.</p>
                
                <div class="contact-benefits">
                    <div class="contact-benefit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Análise 100% gratuita e sem compromisso</span>
                    </div>
                    <div class="contact-benefit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Resposta em até 24 horas</span>
                    </div>
                    <div class="contact-benefit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>Proposta personalizada para seu consumo</span>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-card reveal">
                <form id="contact-lead-form" class="lead-form">
                    <?php wp_nonce_field('solux_nonce', 'solux_contact_nonce_field'); ?>
                    <div class="form-group">
                        <label class="form-label" for="contact-name">Nome Completo *</label>
                        <input type="text" id="contact-name" name="name" class="form-input" placeholder="Seu nome completo" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contact-phone">WhatsApp *</label>
                        <input type="tel" id="contact-phone" name="phone" class="form-input" placeholder="(91) 99999-9999" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contact-email">E-mail</label>
                        <input type="email" id="contact-email" name="email" class="form-input" placeholder="seu@email.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="contact-bill">Valor Médio da Conta de Luz</label>
                        <select id="contact-bill" name="bill_value" class="form-select">
                            <option value="">Selecione a faixa</option>
                            <option value="500-800">R$ 500 - R$ 800</option>
                            <option value="800-1200">R$ 800 - R$ 1.200</option>
                            <option value="1200-2000">R$ 1.200 - R$ 2.000</option>
                            <option value="2000+">Acima de R$ 2.000</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-xl animate-pulse-glow" style="width: 100%;">
                        Solicitar Análise Gratuita
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
