<?php
/**
 * Front Page Template
 *
 * @package Solux_Energy
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section" id="hero">
    <div class="container">
        <div class="hero-inner">
            <div class="hero-content fade-in">
                <span class="hero-badge">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3v1m0 16v1m-9-9h1m16 0h1m-2.636-6.364-.707.707M6.343 17.657l-.707.707m0-12.728.707.707m11.314 11.314.707.707M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
                    </svg>
                    Energia Solar de Alta Performance
                </span>
                
                <h1 class="hero-title">
                    <?php echo esc_html(get_theme_mod('hero_title', 'Economize até 95% na sua conta de energia')); ?>
                    <span class="highlight"><?php echo esc_html(get_theme_mod('hero_subtitle', 'com Energia Solar')); ?></span>
                </h1>
                
                <p class="hero-description">
                    <?php echo esc_html(get_theme_mod('hero_description', 'Transforme o sol em economia real para sua casa ou empresa. Instalação profissional, garantia de 25 anos e retorno do investimento em até 4 anos.')); ?>
                </p>
                
                <div class="hero-cta">
                    <a href="#simulador" class="btn btn-primary btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48 2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48 2.83-2.83"/>
                        </svg>
                        Simular Economia
                    </a>
                    <a href="<?php echo esc_url(solux_get_whatsapp_link('Olá! Gostaria de saber mais sobre energia solar.')); ?>" class="btn btn-outline btn-lg" target="_blank" rel="noopener">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        Falar no WhatsApp
                    </a>
                </div>
                
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-value">+500</div>
                        <div class="hero-stat-label">Projetos Instalados</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">25 anos</div>
                        <div class="hero-stat-label">Garantia de Desempenho</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">95%</div>
                        <div class="hero-stat-label">Economia Média</div>
                    </div>
                </div>
            </div>
            
            <?php if ($hero_image = get_theme_mod('hero_image')): ?>
                <div class="hero-image fade-in-right">
                    <img src="<?php echo esc_url($hero_image); ?>" alt="Instalação de energia solar" loading="lazy">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section section" id="beneficios">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title fade-in">Por que escolher <span class="text-primary">Energia Solar?</span></h2>
            <p class="section-subtitle fade-in">Descubra como a energia solar pode transformar sua relação com a conta de luz</p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card fade-in delay-100">
                <span class="benefit-number">01</span>
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <h3 class="benefit-title">Economia de até 95%</h3>
                <p class="benefit-description">Reduza drasticamente sua conta de luz e invista o dinheiro economizado no que realmente importa.</p>
            </div>
            
            <div class="benefit-card fade-in delay-200">
                <span class="benefit-number">02</span>
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3 class="benefit-title">Garantia de 25 Anos</h3>
                <p class="benefit-description">Equipamentos de alta durabilidade com garantia estendida e suporte técnico especializado.</p>
            </div>
            
            <div class="benefit-card fade-in delay-300">
                <span class="benefit-number">03</span>
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                        <polyline points="22,4 12,14.01 9,11.01"/>
                    </svg>
                </div>
                <h3 class="benefit-title">Valorização do Imóvel</h3>
                <p class="benefit-description">Imóveis com energia solar são mais valorizados no mercado e atraem compradores qualificados.</p>
            </div>
            
            <div class="benefit-card fade-in delay-400">
                <span class="benefit-number">04</span>
                <div class="benefit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/>
                    </svg>
                </div>
                <h3 class="benefit-title">Sustentabilidade</h3>
                <p class="benefit-description">Contribua para um planeta mais limpo gerando energia renovável e reduzindo emissões de CO².</p>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section -->
<section class="how-it-works-section section" id="como-funciona">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title fade-in">Como <span class="text-primary">Funciona?</span></h2>
            <p class="section-subtitle fade-in">Um processo simples e sem complicação para você começar a economizar</p>
        </div>
        
        <div class="steps-container">
            <div class="step-card fade-in delay-100">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/>
                        <polyline points="14,2 14,8 20,8"/>
                        <line x1="16" x2="8" y1="13" y2="13"/>
                        <line x1="16" x2="8" y1="17" y2="17"/>
                    </svg>
                </div>
                <h3 class="step-title">Simulação Gratuita</h3>
                <p class="step-description">Envie sua conta de luz e receba uma análise personalizada de economia em 24h.</p>
                <div class="step-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>
            
            <div class="step-card fade-in delay-200">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                    </svg>
                </div>
                <h3 class="step-title">Projeto Técnico</h3>
                <p class="step-description">Nossa equipe de engenharia desenvolve o projeto ideal para seu imóvel.</p>
                <div class="step-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>
            
            <div class="step-card fade-in delay-300">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <h3 class="step-title">Instalação Profissional</h3>
                <p class="step-description">Técnicos certificados instalam seu sistema com máxima qualidade e segurança.</p>
                <div class="step-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </div>
            </div>
            
            <div class="step-card fade-in delay-400">
                <div class="step-number">4</div>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="4"/>
                        <path d="M12 2v2"/>
                        <path d="M12 20v2"/>
                        <path d="m4.93 4.93 1.41 1.41"/>
                        <path d="m17.66 17.66 1.41 1.41"/>
                        <path d="M2 12h2"/>
                        <path d="M20 12h2"/>
                        <path d="m6.34 17.66-1.41 1.41"/>
                        <path d="m19.07 4.93-1.41 1.41"/>
                    </svg>
                </div>
                <h3 class="step-title">Economia Garantida</h3>
                <p class="step-description">Sistema ativado! Acompanhe sua economia em tempo real pelo aplicativo.</p>
            </div>
        </div>
    </div>
</section>

<!-- Simulator Section -->
<section class="simulator-section section" id="simulador">
    <div class="container">
        <div class="simulator-inner">
            <div class="simulator-content fade-in-left">
                <h2 class="section-title">Simule sua <span class="highlight">Economia</span></h2>
                <p class="section-subtitle">
                    Descubra quanto você pode economizar por mês com energia solar. 
                    Preencha o formulário e receba uma análise personalizada.
                </p>
                
                <div class="simulator-features">
                    <div class="simulator-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20,6 9,17 4,12"/>
                        </svg>
                        <span>Análise 100% gratuita e sem compromisso</span>
                    </div>
                    <div class="simulator-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20,6 9,17 4,12"/>
                        </svg>
                        <span>Resposta em até 24 horas</span>
                    </div>
                    <div class="simulator-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20,6 9,17 4,12"/>
                        </svg>
                        <span>Projeto personalizado para seu imóvel</span>
                    </div>
                    <div class="simulator-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20,6 9,17 4,12"/>
                        </svg>
                        <span>Financiamento facilitado em até 120x</span>
                    </div>
                </div>
            </div>
            
            <div class="simulator-form-container fade-in-right">
                <h3 class="simulator-form-title">Calcule sua Economia</h3>
                
                <form id="lead-form" class="simulator-form">
                    <div class="form-group">
                        <label for="name" class="form-label">Nome completo *</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Seu nome" required>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email" class="form-label">E-mail *</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="seu@email.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone" class="form-label">WhatsApp *</label>
                            <input type="tel" id="phone" name="phone" class="form-input" placeholder="(91) 99999-9999" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" id="city" name="city" class="form-input" placeholder="Sua cidade">
                        </div>
                        
                        <div class="form-group">
                            <label for="bill_value" class="form-label">Valor da Conta</label>
                            <select id="bill_value" name="bill_value" class="form-select">
                                <option value="">Selecione</option>
                                <option value="Até R$ 300">Até R$ 300</option>
                                <option value="R$ 300 - R$ 500">R$ 300 - R$ 500</option>
                                <option value="R$ 500 - R$ 800">R$ 500 - R$ 800</option>
                                <option value="R$ 800 - R$ 1.500">R$ 800 - R$ 1.500</option>
                                <option value="Acima de R$ 1.500">Acima de R$ 1.500</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="property_type" class="form-label">Tipo de Imóvel</label>
                        <select id="property_type" name="property_type" class="form-select">
                            <option value="">Selecione</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Industrial">Industrial</option>
                            <option value="Rural/Agronegócio">Rural / Agronegócio</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg form-submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48 2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48 2.83-2.83"/>
                        </svg>
                        Solicitar Simulação Gratuita
                    </button>
                    
                    <p class="form-note">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                        Seus dados estão seguros. Não fazemos spam.
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section section" id="depoimentos">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title fade-in">O que nossos <span class="text-primary">clientes</span> dizem</h2>
            <p class="section-subtitle fade-in">Histórias reais de quem já está economizando com energia solar</p>
        </div>
        
        <div class="testimonials-grid">
            <div class="testimonial-card fade-in delay-100">
                <div class="testimonial-rating">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testimonial-text">"Minha conta de luz caiu de R$ 800 para R$ 65! A equipe da Solux foi super profissional e a instalação foi rápida. Recomendo demais!"</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar"></div>
                    <div class="testimonial-info">
                        <p class="testimonial-name">Roberto Mendes</p>
                        <p class="testimonial-location">Belém, PA - Residencial</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card fade-in delay-200">
                <div class="testimonial-rating">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testimonial-text">"Instalei no meu comércio e a economia é incrível. O retorno do investimento está vindo antes do previsto. Excelente empresa!"</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar"></div>
                    <div class="testimonial-info">
                        <p class="testimonial-name">Ana Paula Silva</p>
                        <p class="testimonial-location">Ananindeua, PA - Comercial</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card fade-in delay-300">
                <div class="testimonial-rating">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><polygon fill="currentColor" points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                </div>
                <p class="testimonial-text">"Depois de muito pesquisar, escolhi a Solux pela qualidade dos equipamentos e atendimento. Melhor decisão que tomei para minha família."</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar"></div>
                    <div class="testimonial-info">
                        <p class="testimonial-name">Carlos Eduardo Lima</p>
                        <p class="testimonial-location">Marituba, PA - Residencial</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section">
    <div class="container">
        <h2 class="cta-title fade-in">Pronto para começar a <span class="highlight">economizar</span>?</h2>
        <p class="cta-description fade-in">Entre em contato agora e descubra quanto você pode economizar com energia solar</p>
        
        <div class="cta-buttons fade-in">
            <a href="#simulador" class="btn btn-primary btn-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2v4m0 12v4M4.93 4.93l2.83 2.83m8.48 8.48 2.83 2.83M2 12h4m12 0h4M4.93 19.07l2.83-2.83m8.48-8.48 2.83-2.83"/>
                </svg>
                Simular Economia
            </a>
            <a href="<?php echo esc_url(solux_get_whatsapp_link('Olá! Quero saber mais sobre energia solar.')); ?>" class="btn btn-outline btn-lg" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                WhatsApp
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
