<?php
/*
Template Name: Opskriftsside
*/
?>

<!DOCTYPE html>
<html lang="<?php bloginfo("language");?>"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
</head>
<body>
    <!-- Header -->
    <?php get_template_part("parts/header"); ?>
    
    <!-- INDHOLD -->
    <main class="main">
        <!-- Vis enkelt opskrift -->
        <article class="recipe">
            <h2 class="recipe-title"><?php the_title(); ?></h2>
            <div class="recipe-content">
                <?php the_content(); ?>
            </div>
        </article>
    </main>
    
    <!-- Footer -->
    <?php get_template_part("parts/footer"); ?>
</body>
</html>
