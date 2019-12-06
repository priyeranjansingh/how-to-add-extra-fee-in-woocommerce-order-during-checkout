/*
*put below code in function.php file of theme folder or child theme folder
*/

function add_extra_fee_cart() {
 
  global $woocommerce;
	
  $woocommerce->cart->add_fee( __('Custom', 'woocommerce'), 5 );
	
}
add_action( 'woocommerce_cart_calculate_fees', 'add_extra_fee_cart' );
