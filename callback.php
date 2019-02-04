<?php
	error_reporting(true);
	session_start();  
	include "shopify.php";
	include "config.php";
	if (isset($_GET['code'])) {
		$shopifyClient = new ShopifyClient($_REQUEST['shop'], "", SHOPIFY_API_KEY, SHOPIFY_SECRET);
		if(!empty($_REQUEST["shop"])){
			$shopifyClient = new ShopifyClient($_REQUEST["shop"], "", SHOPIFY_API_KEY, SHOPIFY_SECRET);
			$token = $shopifyClient->getAccessToken($_GET['code']);
			if(!empty($token)){
				$_SESSION['token'] = $token;
				$_SESSION['shop'] = $_REQUEST['shop'];
			}
			
		}

		if(!isset($_SESSION['token'])){
			//if not install yet.
			$token = $shopifyClient->getAccessToken($_REQUEST['code']);	
			$_SESSION['token'] = $token;
			$_SESSION['shop'] = $_REQUEST['shop'];	
			header("Location: ". "https://".$_SESSION['shop']."/admin/apps/".SHOPIFY_API_KEY);
			exit;
		}
		else{
			header("Location: ". "https://".$_SESSION['shop']."/admin/apps/".SHOPIFY_API_KEY);
			exit;			

		}
    }
	else {
		die ("Invalid Request! Request or redirect did not come from Shopify");
	}
?>
