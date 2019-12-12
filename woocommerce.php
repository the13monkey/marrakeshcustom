<?php get_header(); ?>

<div class="theme-container ">

    <div class="sidebar-left col col-lg-3">

        <h2 class="widget-title">SEARCH</h2>
        
        <form role="search" method="get" class="woocommerce-product-search" action="https://marrakeshhaircare.com/">
	        <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
	        <input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search products&hellip;" value="" name="s" />
	        <button type="submit" value="Search">Search</button>
	        <input type="hidden" name="post_type" value="product" />
        </form>
        
        <div id="sidebar-cat-list">
        
            <?php echo do_shortcode( '[product_categories]' ) ?>
        
        </div>
        

    </div>

    <div class="main-content col col-lg-9">
    
        <?php woocommerce_content(); ?>
    
    </div>

</div>



<?php get_footer(); ?>