<!-- slider.php -->

<?php if (is_front_page()) : ?>
    <div class="hero-section">
        <div class="slider-container">
            <?php
            
            $image_filenames = array('tilbud.jpg', 'image2.jpg', 'image3.jpg');

            foreach ($image_filenames as $filename) :
            ?>
                <div class="slide" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/' . $filename); ?>');"></div>
            <?php
            endforeach;
            ?>
        </div>

        
        <div class="slider-nav">
            <button onclick="prevSlide()">Previous</button>
            <button onclick="nextSlide()">Next</button>
        </div>

       
        <div class="slider-pagination">
            <button onclick="showSlide(0)"></button>
            <button onclick="showSlide(1)"></button>
            <button onclick="showSlide(2)"></button>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri() . '/js/slider-script.js'; ?>"></script>
<?php endif; ?>
