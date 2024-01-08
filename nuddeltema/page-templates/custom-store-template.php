<?php
/* 
 * Template Name: Butik Skabelon 
 */

get_template_part("parts/header");

$args = array(
    'post_type'      => 'product', // Updated post type to match the registered post type
    'posts_per_page' => -1,
);

$loop = new WP_Query($args);

echo '<div class="product-container">';

while ($loop->have_posts()) : $loop->the_post();
    ?>
    <div class="product">
        <h2 class="product-title"><?php the_title(); ?></h2>
        <div class="product-content">
            <?php the_content(); ?>
        </div>
    </div>
    <?php
endwhile;

echo '</div>';

get_template_part("parts/footer");
?>
