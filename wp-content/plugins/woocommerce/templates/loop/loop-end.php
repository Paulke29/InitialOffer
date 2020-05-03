<?php
/**
 * Product Loop End
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<script src="https://sdk.helloextend.com/extend-sdk-client/v1/extend-sdk-client.min.js"></script>
			<script>Extend.config({storeId: '83d57b1a-4674-46d2-8831-373680d5637d'})</script>
			<script src="https://sdk.helloextend.com/extend-sdk-client/v1/demo/extend-sdk-client.min.js"></script>
			<script>Extend.config({storeId: '83d57b1a-4674-46d2-8831-373680d5637d'})</script>
			<div id="extend-offer"></div>
<script>
   document.getElementsByClassName("button product_type_simple add_to_cart_button ajax_add_to_cart").onlick=OfferWindow;

   function OfferWindow(clicked){
	   var String = clicked.toString();
	   var IDnumber = String.split("=");
	   switch(IDnumber[1]){
				   case "21":
				       IdReference = '10';
					   break;
					case "23":
						IdReference = '100';
						break;
			    }
		Extend.modal.open({
			referenceId:IdReference,
			onClose: function(plan,product){
					console.log("add")
					if(plan&&product){
						console.log("9999")
						e.preventDefault()
					}
				}
		})
}
</script>
</ul>
