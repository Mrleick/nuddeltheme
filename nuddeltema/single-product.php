<?php
get_template_part("parts/head");
?>
<body>
    <!-- Header -->
    <?php
    get_template_part("parts/header");
    ?>
    
    <!-- INDHOLD -->
    <main class="main">
        <?php
            if ( have_posts() ) {
                //Main loop
                while ( have_posts() ) {
                    the_post();
                    the_title("<h1 class='heading'>", "</h1>");
                    the_post_thumbnail("medium-large");
                    ?>
                    <div class="content">
                        <?php
                        the_content();
                        ?>
                    </div>

                    <p class="pris" style="font-size:40px;"> Kun: 
                    <?php
                        echo get_post_meta(get_the_id(), "Pris", true);
                    ?>
                    DKK
                    </p>
                    <?php

                    if (get_post_meta(get_the_id(), "Lager", true)=="udsolgt"){
                        ?>
                        <p>Produktet er desværre udsolgt</p>
                        <?php
                    }
                    
                }

            }
            else{
                echo "404 ingenting fundet";
            }
        ?>
    </main>
    
    <!-- Footer -->
    <?php
    get_template_part("parts/footer");
    ?>
</body>
</html>