<?php
get_template_part("parts/head");
?>
<body>
    <!-- Header -->
    <?php get_template_part("parts/header"); ?>
    
    <!-- INDHOLD -->
    <main class="main">
        <section><?php include('parts/slider.php'); ?></section>

        <!-- Vis opskrifter -->
        <h2 class="recipe-header">Opskrifter</h2>
        <section class="recipes">
            <?php
            $args = array(
                'post_type'      => 'post',
                'category_name'  => 'opskrifter',
                'posts_per_page' => 6,
            );

            $recipes_query = new WP_Query($args);

            // The Loop
            while ($recipes_query->have_posts()) : $recipes_query->the_post();
            ?>
                <article class="recipe">
                    <h3 class="recipe-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="recipe-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php
            endwhile;

            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </section>
    </main>
    
    <!-- Footer -->
    <?php get_template_part("parts/footer"); ?>
</body>
