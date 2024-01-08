<?php

register_nav_menus(
    array(
        "primary_menu" => "Primary Menu",
        "footer_menu"  => "Footer Menu"
    )
);

wp_enqueue_style("style", get_stylesheet_uri());

function load_scripts_and_styles() {
    wp_enqueue_script("slider-script", get_template_directory_uri() . "/js/slider-script.js", array(), null, true);
}

function product_post_type () {
    register_post_type(
        "product",
        [
            "show_in_rest"  => true,
             "labels"       => [
                "name"          =>"Produkter", 
                "singular_name" =>"Produkt",
                "add_new"       => "Tilføj nyt produkt"
             ],
             "public"               => true,
             "exclude_from_search" => true,
             "has_archive"         => true,
             "rewrite"             => false,
             "supports"            => [
                "title",
                "editor",
                "thumbnail",
                "custom-fields"
             ]
        ]
    );
}

add_action("init", "product_post_type");


function custom_search_widget_init() {
    register_widget('Custom_Search_Widget');
}

add_action('widgets_init', 'custom_search_widget_init');

function custom_widgets(){
    register_sidebar(
        array(
            "name"          => "Footer Widgets",
            "id"            => "footer-widget",
            "before_widget" => "<div class='widget>'",
            "after_widget"  => "</div>"
        )
    );
    register_sidebar(
        array(
            "name"          => "Header Widgets",
            "id"            => "header-widget",
            "before_widget" => "<div class='widget>'",
            "after_widget"  => "</div>"
        )
    );
    register_sidebar(
        array(
            "name"          => "My Widget",
            "id"            => "my-widget",
            "before_widget" => "<div class='widget>'",
            "after_widget"  => "</div>"
        )
    );
}

add_action("widgets_init", "custom_widgets");

class Custom_Search_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'custom_search_widget',
            __('Custom Search Widget', 'text_domain'),
            array('description' => __('A custom search widget for your theme', 'text_domain'))
        );
    }

    // Widget Output
    public function widget($args, $instance) {
        echo $args['before_widget'];

        // Widget Content
        ?>
        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
            <div>
                <label class="screen-reader-text" for="s"><?php _e('Søg', 'text_domain'); ?></label>
                <input type="text" value="" name="s" id="s" />
            </div>
        </form>
        <?php

        echo $args['after_widget'];
    }

    // Widget Form
    public function form($instance) {
        // Optional: Widget backend configuration form
    }

    // Update Widget Settings
    public function update($new_instance, $old_instance) {
        // Optional: Process widget options and update
        return $instance;
    }
}
