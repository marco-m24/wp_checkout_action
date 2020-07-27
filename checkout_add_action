function mrc_woocommerce_before_checkout_form() { 
    echo 'Messaggio promozionale!';
}; 
         
// add the action 
add_action( 'woocommerce_before_checkout_form', 'mrc_woocommerce_before_checkout_form', 10, 1 ); 





function mrc_woocommerce_checkout_before_customer_details() { 
    echo 'Verifica il totale prima di procedere';
}; 
         
// add the action 
add_action( 'woocommerce_checkout_before_customer_details', 'mrc_woocommerce_checkout_before_customer_details', 10, 1 );






 function mrc_woocommerce_before_checkout_billing_form( ) { 
    echo 'Completa tutti i campi con (*)'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_checkout_billing_form', 'mrc_woocommerce_before_checkout_billing_form', 10, 1 );






function mrc_woocommerce_after_checkout_billing_form( ) { 
   echo 'NB verifica i dati di fatturazione'; 
}; 
         
// add the action 
add_action( 'woocommerce_after_checkout_billing_form', 'mrc_woocommerce_after_checkout_billing_form', 10, 1 );
