<?php
/*
 * Template Name: Kontaktformular Skabelon
 */

get_template_part("parts/header");
?>

<body>
    <form action="<?php echo esc_url(get_stylesheet_directory_uri() . '/process_form.php'); ?>" method="post" class="contact-form">
        <label for="name">Navn:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Besked:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Send besked">
    </form>
</body>

<?php
get_template_part("parts/footer");
?>
