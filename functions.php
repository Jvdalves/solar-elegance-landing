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
    // Add title tag support
    add_theme_support('title-tag');
    
    // Add post thumbnails support
    add_theme_support('post-thumbnails');
    
    // Add custom logo support
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Add HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'solux-energy'),
        'footer'  => __('Menu Rodapé', 'solux-energy'),
    ));
}
add_action('after_setup_theme', 'solux_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function solux_enqueue_assets() {
    // Main stylesheet
    wp_enqueue_style(
        'solux-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Custom CSS (if exists)
    $custom_css = get_template_directory() . '/assets/css/custom.css';
    if (file_exists($custom_css)) {
        wp_enqueue_style(
            'solux-custom',
            get_template_directory_uri() . '/assets/css/custom.css',
            array('solux-style'),
            wp_get_theme()->get('Version')
        );
    }
    
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
        'nonce'   => wp_create_nonce('solux_lead_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'solux_enqueue_assets');

/**
 * Add Google Fonts
 */
function solux_google_fonts() {
    $fonts_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap';
    wp_enqueue_style('solux-google-fonts', $fonts_url, array(), null);
}
add_action('wp_enqueue_scripts', 'solux_google_fonts');

/**
 * Register Widget Areas
 */
function solux_widgets_init() {
    register_sidebar(array(
        'name'          => __('Rodapé 1', 'solux-energy'),
        'id'            => 'footer-1',
        'description'   => __('Primeira coluna do rodapé', 'solux-energy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    
    register_sidebar(array(
        'name'          => __('Rodapé 2', 'solux-energy'),
        'id'            => 'footer-2',
        'description'   => __('Segunda coluna do rodapé', 'solux-energy'),
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
        'default'           => 'Economize até 95% na sua conta de energia',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Título do Hero', 'solux-energy'),
        'section' => 'solux_hero',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Energia Solar',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Subtítulo Destacado', 'solux-energy'),
        'section' => 'solux_hero',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('hero_description', array(
        'default'           => 'Transforme o sol em economia real para sua casa ou empresa. Instalação profissional, garantia de 25 anos e retorno do investimento em até 4 anos.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label'   => __('Descrição', 'solux-energy'),
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
    
    // Contact Info Section
    $wp_customize->add_section('solux_contact', array(
        'title'    => __('Informações de Contato', 'solux-energy'),
        'priority' => 40,
    ));
    
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '(91) 99999-9999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Telefone', 'solux-energy'),
        'section' => 'solux_contact',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('contact_whatsapp', array(
        'default'           => '5591999999999',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_whatsapp', array(
        'label'   => __('WhatsApp (só números com DDD)', 'solux-energy'),
        'section' => 'solux_contact',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'contato@soluxenergy.com.br',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => __('E-mail', 'solux-energy'),
        'section' => 'solux_contact',
        'type'    => 'email',
    ));
    
    $wp_customize->add_setting('contact_address', array(
        'default'           => 'Belém, Pará - Brasil',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_address', array(
        'label'   => __('Endereço', 'solux-energy'),
        'section' => 'solux_contact',
        'type'    => 'text',
    ));
    
    // Social Media Section
    $wp_customize->add_section('solux_social', array(
        'title'    => __('Redes Sociais', 'solux-energy'),
        'priority' => 50,
    ));
    
    $social_networks = array('facebook', 'instagram', 'linkedin', 'youtube');
    
    foreach ($social_networks as $network) {
        $wp_customize->add_setting('social_' . $network, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        
        $wp_customize->add_control('social_' . $network, array(
            'label'   => ucfirst($network),
            'section' => 'solux_social',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'solux_customize_register');

/**
 * Handle Lead Form Submission (AJAX)
 */
function solux_handle_lead_submission() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'solux_lead_nonce')) {
        wp_send_json_error(array('message' => 'Erro de segurança. Recarregue a página.'));
    }
    
    // Sanitize form data
    $name = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $city = sanitize_text_field($_POST['city'] ?? '');
    $bill_value = sanitize_text_field($_POST['bill_value'] ?? '');
    $property_type = sanitize_text_field($_POST['property_type'] ?? '');
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($phone)) {
        wp_send_json_error(array('message' => 'Por favor, preencha todos os campos obrigatórios.'));
    }
    
    // Validate email
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Por favor, insira um e-mail válido.'));
    }
    
    // Create lead post
    $lead_data = array(
        'post_title'  => $name . ' - ' . current_time('d/m/Y H:i'),
        'post_type'   => 'solux_lead',
        'post_status' => 'publish',
    );
    
    $lead_id = wp_insert_post($lead_data);
    
    if ($lead_id) {
        // Save lead meta
        update_post_meta($lead_id, '_lead_name', $name);
        update_post_meta($lead_id, '_lead_email', $email);
        update_post_meta($lead_id, '_lead_phone', $phone);
        update_post_meta($lead_id, '_lead_city', $city);
        update_post_meta($lead_id, '_lead_bill_value', $bill_value);
        update_post_meta($lead_id, '_lead_property_type', $property_type);
        update_post_meta($lead_id, '_lead_source', 'website');
        update_post_meta($lead_id, '_lead_date', current_time('mysql'));
        
        // Send notification email to admin
        $admin_email = get_option('admin_email');
        $subject = '[Solux Energy] Novo Lead: ' . $name;
        $message = "Novo lead recebido:\n\n";
        $message .= "Nome: $name\n";
        $message .= "E-mail: $email\n";
        $message .= "Telefone: $phone\n";
        $message .= "Cidade: $city\n";
        $message .= "Valor da Conta: $bill_value\n";
        $message .= "Tipo de Imóvel: $property_type\n";
        
        wp_mail($admin_email, $subject, $message);
        
        wp_send_json_success(array(
            'message' => 'Obrigado! Em breve entraremos em contato.',
            'lead_id' => $lead_id,
        ));
    } else {
        wp_send_json_error(array('message' => 'Erro ao processar. Tente novamente.'));
    }
}
add_action('wp_ajax_solux_submit_lead', 'solux_handle_lead_submission');
add_action('wp_ajax_nopriv_solux_submit_lead', 'solux_handle_lead_submission');

/**
 * Register Custom Post Type for Leads
 */
function solux_register_lead_post_type() {
    register_post_type('solux_lead', array(
        'labels' => array(
            'name'          => __('Leads', 'solux-energy'),
            'singular_name' => __('Lead', 'solux-energy'),
            'menu_name'     => __('Leads', 'solux-energy'),
            'all_items'     => __('Todos os Leads', 'solux-energy'),
            'view_item'     => __('Ver Lead', 'solux-energy'),
            'search_items'  => __('Buscar Leads', 'solux-energy'),
        ),
        'public'        => false,
        'show_ui'       => true,
        'show_in_menu'  => true,
        'menu_icon'     => 'dashicons-groups',
        'supports'      => array('title'),
        'capability_type' => 'post',
    ));
}
add_action('init', 'solux_register_lead_post_type');

/**
 * Add Lead Meta Boxes
 */
function solux_add_lead_meta_boxes() {
    add_meta_box(
        'solux_lead_details',
        __('Detalhes do Lead', 'solux-energy'),
        'solux_lead_meta_box_callback',
        'solux_lead',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'solux_add_lead_meta_boxes');

function solux_lead_meta_box_callback($post) {
    $fields = array(
        '_lead_name'          => 'Nome',
        '_lead_email'         => 'E-mail',
        '_lead_phone'         => 'Telefone',
        '_lead_city'          => 'Cidade',
        '_lead_bill_value'    => 'Valor da Conta',
        '_lead_property_type' => 'Tipo de Imóvel',
        '_lead_date'          => 'Data do Cadastro',
    );
    
    echo '<table class="form-table">';
    foreach ($fields as $key => $label) {
        $value = get_post_meta($post->ID, $key, true);
        echo '<tr>';
        echo '<th><label>' . esc_html($label) . '</label></th>';
        echo '<td><strong>' . esc_html($value) . '</strong></td>';
        echo '</tr>';
    }
    echo '</table>';
}

/**
 * Add Custom Columns to Leads List
 */
function solux_lead_columns($columns) {
    $new_columns = array(
        'cb'         => $columns['cb'],
        'title'      => __('Lead', 'solux-energy'),
        'email'      => __('E-mail', 'solux-energy'),
        'phone'      => __('Telefone', 'solux-energy'),
        'bill_value' => __('Conta de Luz', 'solux-energy'),
        'date'       => __('Data', 'solux-energy'),
    );
    return $new_columns;
}
add_filter('manage_solux_lead_posts_columns', 'solux_lead_columns');

function solux_lead_column_content($column, $post_id) {
    switch ($column) {
        case 'email':
            echo esc_html(get_post_meta($post_id, '_lead_email', true));
            break;
        case 'phone':
            echo esc_html(get_post_meta($post_id, '_lead_phone', true));
            break;
        case 'bill_value':
            echo esc_html(get_post_meta($post_id, '_lead_bill_value', true));
            break;
    }
}
add_action('manage_solux_lead_posts_custom_column', 'solux_lead_column_content', 10, 2);

/**
 * Helper function to get WhatsApp link
 */
function solux_get_whatsapp_link($message = '') {
    $number = get_theme_mod('contact_whatsapp', '5591999999999');
    $encoded_message = urlencode($message);
    return "https://wa.me/{$number}?text={$encoded_message}";
}

/**
 * Disable Gutenberg for front page
 */
function solux_disable_gutenberg($use_block_editor, $post) {
    if ($post->post_type === 'page' && get_option('page_on_front') == $post->ID) {
        return false;
    }
    return $use_block_editor;
}
add_filter('use_block_editor_for_post', 'solux_disable_gutenberg', 10, 2);
