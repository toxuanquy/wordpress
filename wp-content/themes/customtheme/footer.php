<footer id="footer" >

    <!-- Copyright -->
    <div class="copyright">
        © <?php echo date('Y'); ?> <?php bloginfo( 'sitename' ); ?>. <?php _e('Tecnology cational', 'quyto'); ?>
    </div>
</footer>
</div> <!-- closes <div class=container"> -->

<?php wp_footer() ?>

    <script src="<?php echo get_template_directory_uri() ?>/js/swiper.min.js"></script>
    <script>
         var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
         
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>