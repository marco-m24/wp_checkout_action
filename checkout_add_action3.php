function mrc_woocommerce_checkout_before_order_review(  ) { 
    echo '<br>Riepilogo ordine';
}; 
         
// add the action 
add_action( 'woocommerce_checkout_before_order_review', 'mrc_woocommerce_checkout_before_order_review', 10, 0 );






function mrc_woocommerce_review_order_before_payment(  ) { 
    echo 'Le spedizioni possono subire ritardi durante il periodo estivo'; 
}; 
         
// add the action 
add_action( 'woocommerce_review_order_before_payment', 'mrc_woocommerce_review_order_before_payment', 10, 0 );





function mrc_woocommerce_review_order_after_submit(  ) { 
    echo 'fine ordine';
}; 
         
// add the action 
add_action( 'woocommerce_review_order_after_submit', 'mrc_woocommerce_review_order_after_submit', 10, 0 );





// define the woocommerce_after_checkout_form callback 
function mrc_woocommerce_after_checkout_form( ) { 
    echo 'fine di tutto';
}; 
         
// add the action 
add_action( 'woocommerce_after_checkout_form', 'mrc_woocommerce_after_checkout_form', 10, 1 );
