<?php
/**
 * Solux Energy Theme Functions
 *
 * @package Solux_Energy
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function solux_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Menu Principal', 'solux-energy'),
        'footer'    => __('Menu Rodapé', 'solux-energy'),
    ));
}
add_action('after_setup_theme', 'solux_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function solux_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'solux-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'solux-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'solux-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Localize script for AJAX
    wp_localize_script('solux-main', 'soluxAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('solux_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'solux_enqueue_assets');

/**
 * Register Widget Areas
 */
function solux_widgets_init() {
    register_sidebar(array(
        'name'          => __('Rodapé 1', 'solux-energy'),
        'id'            => 'footer-1',
        'description'   => __('Área de widgets do rodapé - Coluna 1', 'solux-energy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Rodapé 2', 'solux-energy'),
        'id'            => 'footer-2',
        'description'   => __('Área de widgets do rodapé - Coluna 2', 'solux-energy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'solux_widgets_init');

/**
 * Customizer Settings
 */
function solux_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('solux_hero', array(
        'title'    => __('Hero Section', 'solux-energy'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default'           => 'O sol de amanhã pode gerar lucro ou despesa.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label'   => __('Título do Hero', 'solux-energy'),
        'section' => 'solux_hero',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Pare de financiar a ineficiência da concessionária. Transforme sua conta de luz em patrimônio.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Subtítulo do Hero', 'solux-energy'),
        'section' => 'solux_hero',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label'   => __('Imagem do Hero', 'solux-energy'),
        'section' => 'solux_hero',
    )));

    // Contact Info
    $wp_customize->add_section('solux_contact', array(
        'title'    => __('Informações de Contato', 'solux-energy'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('phone_number', array(
        'default'           => '(91) 99999-9999',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('phone_number', array(
        'label'   => __('Telefone', 'solux-energy'),
        'section' => 'solux_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('whatsapp_number', array(
        'default'           => '5591999999999',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('whatsapp_number', array(
        'label'   => __('WhatsApp (com código do país)', 'solux-energy'),
        'section' => 'solux_contact',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('email_address', array(
        'default'           => 'contato@soluxenergy.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('email_address', array(
        'label'   => __('E-mail', 'solux-energy'),
        'section' => 'solux_contact',
        'type'    => 'email',
    ));

    // Social Media
    $wp_customize->add_section('solux_social', array(
        'title'    => __('Redes Sociais', 'solux-energy'),
        'priority' => 40,
    ));

    $social_networks = array('instagram', 'facebook', 'linkedin', 'youtube');
    foreach ($social_networks as $network) {
        $wp_customize->add_setting($network . '_url', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control($network . '_url', array(
            'label'   => ucfirst($network) . ' URL',
            'section' => 'solux_social',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'solux_customize_register');

/**
 * AJAX Handler for Lead Form
 */
function solux_handle_lead_form() {
    check_ajax_referer('solux_nonce', 'nonce');

    $name = sanitize_text_field($_POST['name'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $bill_value = sanitize_text_field($_POST['bill_value'] ?? '');

    if (empty($name) || empty($phone)) {
        wp_send_json_error(array(
            'message' => 'Por favor, preencha todos os campos obrigatórios.',
        ));
    }

    // Save as custom post type or send email
    $lead_id = wp_insert_post(array(
        'post_type'   => 'solux_lead',
        'post_title'  => $name,
        'post_status' => 'publish',
        'meta_input'  => array(
            '_lead_phone'      => $phone,
            '_lead_email'      => $email,
            '_lead_bill_value' => $bill_value,
            '_lead_date'       => current_time('mysql'),
        ),
    ));

    if ($lead_id) {
        // Send notification email
        $admin_email = get_option('admin_email');
        $subject = 'Novo Lead - Solux Energy';
        $message = sprintf(
            "Novo lead recebido:\n\nNome: %s\nTelefone: %s\nE-mail: %s\nValor da Conta: %s",
            $name,
            $phone,
            $email,
            $bill_value
        );
        wp_mail($admin_email, $subject, $message);

        wp_send_json_success(array(
            'message' => 'Obrigado! Entraremos em contato em breve.',
        ));
    } else {
        wp_send_json_error(array(
            'message' => 'Erro ao processar. Tente novamente.',
        ));
    }
}
add_action('wp_ajax_solux_lead_form', 'solux_handle_lead_form');
add_action('wp_ajax_nopriv_solux_lead_form', 'solux_handle_lead_form');

/**
 * Register Custom Post Type for Leads
 */
function solux_register_lead_cpt() {
    register_post_type('solux_lead', array(
        'labels' => array(
            'name'          => __('Leads', 'solux-energy'),
            'singular_name' => __('Lead', 'solux-energy'),
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-businessman',
        'supports'     => array('title'),
    ));
}
add_action('init', 'solux_register_lead_cpt');

/**
 * Add Meta Boxes for Leads
 */
function solux_lead_meta_boxes() {
    add_meta_box(
        'lead_details',
        __('Detalhes do Lead', 'solux-energy'),
        'solux_lead_meta_box_callback',
        'solux_lead',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'solux_lead_meta_boxes');

function solux_lead_meta_box_callback($post) {
    $phone = get_post_meta($post->ID, '_lead_phone', true);
    $email = get_post_meta($post->ID, '_lead_email', true);
    $bill = get_post_meta($post->ID, '_lead_bill_value', true);
    $date = get_post_meta($post->ID, '_lead_date', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label>Telefone</label></th>
            <td><strong><?php echo esc_html($phone); ?></strong></td>
        </tr>
        <tr>
            <th><label>E-mail</label></th>
            <td><strong><?php echo esc_html($email); ?></strong></td>
        </tr>
        <tr>
            <th><label>Valor da Conta</label></th>
            <td><strong><?php echo esc_html($bill); ?></strong></td>
        </tr>
        <tr>
            <th><label>Data do Cadastro</label></th>
            <td><strong><?php echo esc_html($date); ?></strong></td>
        </tr>
    </table>
    <?php
}

/**
 * Helper function to get theme mod with default
 */
function solux_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}

/**
 * WhatsApp Link Generator
 */
function solux_whatsapp_link($message = '') {
    $number = get_theme_mod('whatsapp_number', '5591999999999');
    $encoded_message = urlencode($message);
    return "https://wa.me/{$number}?text={$encoded_message}";
}
