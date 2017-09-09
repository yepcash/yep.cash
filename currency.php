<?php
function currencyCnv($amount, $from, $to) {
    $get = file_get_contents("https://www.google.com/finance/converter?a=$amount&from=" . $from. "&to=" . $to);
    $get = explode("<span class=bld>",$get);
    $get = explode("</span>",$get[1]);
    $converted_amount = $get[0];
    echo round($converted_amount,4);
}
    echo currencyCnv(1,'BTC','USD');

// write the function
    function refresh( $time ){
        $current_url = $_SERVER[ 'REQUEST_URI' ];
        return header( "Refresh: " . $time . "; URL=$current_url" );
    }

    // call the function in the appropriate place
    refresh( 1 );
    // this refreshes page after 1 second
?>
