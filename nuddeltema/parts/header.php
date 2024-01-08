<?php
    if(is_user_logged_in()){
        ?>
        <style>
            body{
                padding-top:50px;
            }
        </style>
        <?php
    }
?>
<header class="header">
<?php
    the_widget('Custom_Search_Widget');
    ?>

<h1>Nuddel-Shoppen</h1>
    <div>
    <?php
    dynamic_sidebar("header-widget");
    wp_nav_menu(
        array(
            "menu"            => "Primary Menu",
            "container"       => "nav",
            "container_class" =>"main-nav"
        )
    );
    ?></div>
    
</header>