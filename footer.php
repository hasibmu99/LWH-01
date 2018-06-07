<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if( is_active_sidebar('_footer_left') ){
                        dynamic_sidebar('_footer_left');
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>