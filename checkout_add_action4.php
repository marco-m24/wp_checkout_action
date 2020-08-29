//Cambio il titolo 'Dettagli Fatturazione' nella pagina checkout
// Da inserire nel file functions.php

function wc_billing_field_strings( $translated_text, $text, $domain ) 
{ 
switch ( $translated_text )
{ 
case 'Dettagli di fatturazione' : 
$translated_text = __( 'Dati ordine', 'woocommerce' ); 
break; 
} 
return $translated_text; 
} 
add_filter( 'gettext', 'wc_billing_field_strings', 20, 3 );
