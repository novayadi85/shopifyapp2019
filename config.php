<?php
	// Define APP Settings
	define('SHOPIFY_APP_DOMAIN','https://shopifyapp2019.herokuapp.com'); 
	define('SHOPIFY_APP_DIR','/');
    define('SHOPIFY_APP_NAME','Discount Extra');
    define('SHOPIFY_API_KEY','46e388b52ffa4e5623c6665c163e0006');
    define('SHOPIFY_SECRET','98f17067db489684a7ddff9489a063e5');
    define('SHOPIFY_UNINSTALL',SHOPIFY_APP_DOMAIN . SHOPIFY_APP_DIR. "uninstall.php?app=".$requestApp);
    define('SHOPIFY_REDIRECT_URL',SHOPIFY_APP_DOMAIN . SHOPIFY_APP_DIR.'callback.php'); // Should be the same with redirect in app admin
    define('SHOPIFY_SCOPE','unauthenticated_read_product_listings,read_content,write_content,read_themes,write_themes,read_products,write_products,read_customers,write_customers,read_orders,write_orders,read_script_tags,write_script_tags,read_fulfillments,write_fulfillments,read_shipping,write_shipping, read_collection_listings,write_draft_orders, read_draft_orders,read_price_rules,write_price_rules');
	define('SHOPIFY_PAGE',"page.php");
?>