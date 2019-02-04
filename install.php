<?php
error_reporting(false);
session_start();
include "shopify.php";
include "config.php";
$shop = $_REQUEST["shop"];
if (empty($_SESSION['token'])) {    	
    if (!empty($shop)) {
        $shopifyClient = new ShopifyClient($shop, "", SHOPIFY_API_KEY, SHOPIFY_SECRET);
        // Redirect to authorize url
        header("Location: " . $shopifyClient->getAuthorizeUrl(SHOPIFY_SCOPE, SHOPIFY_REDIRECT_URL));
        exit;
    }
    else {
        ?>
        <p>Install this app in a shop to get access to its private admin data.</p> 
        
        <form action="" method="post">
           
            <p> 
                <label for='shop'><strong>The URL of the Shop</strong> 
                    <span class="hint">(enter it exactly like this: myshop.myshopify.com)</span> 
                </label> <br>
                <input id="shop" name="shop" size="45" type="text" value="" /> 
            </p> 
            
            <p>
                <input name="commit" type="submit" value="Install" /> 
            </p>
        </form>
        <?
    }
   
}
else {
    echo "App here";
    include("index.php");
    exit();  
}

?>
