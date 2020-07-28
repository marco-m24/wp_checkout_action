function mrc_woocommerce_before_checkout_shipping_form() { 
    echo 'Indica i dati della prersona che riceverà il pacco'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_checkout_shipping_form', 'mrc_woocommerce_before_checkout_shipping_form', 10, 1 );






function mrc_woocommerce_after_checkout_shipping_form() { 
    echo 'Verifica i dati inseriti per la spedizione';
}; 
         
// add the action 
add_action( 'woocommerce_after_checkout_shipping_form', 'mrc_woocommerce_after_checkout_shipping_form', 10, 1 );






function mrc_woocommerce_before_order_notes( ) { 
    echo '<br><hr>Inserisci delle note sulla spedizione come ad esempio "cancello verde a destra"'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_order_notes', 'mrc_woocommerce_before_order_notes', 10, 1 ); 





function mrc_woocommerce_after_order_notes() { 
    echo 'Ricorda la promozione in corso';
}; 
         
// add the action 
add_action( 'woocommerce_after_order_notes', 'mrc_woocommerce_after_order_notes', 10, 1 );







function mrc_woocommerce_checkout_after_customer_details() { 
    echo '<br>NB Le spedizioni potrebbero subire un ritardo sulle isole';
}; 
         
// add the action 
add_action( 'woocommerce_checkout_after_customer_details', 'mrc_woocommerce_checkout_after_customer_details', 10, 1 );
