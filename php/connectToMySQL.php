<?php

function showActivities( $year ){
    $date_start = $year ."-04-01";
    $date_end = ($year+1) ."-03-31";

    $q = "SELECT *, DATE_FORMAT(date, '%y%m%d') FROM activity WHERE date >= '$date_start' AND date <= '$date_end' ORDER BY date DESC";
    $r = mysql_query( $q );

    $mode = $_GET["mode"];

    while( $c = mysql_fetch_array( $r ) ){

        if( $c[7] == 0 && $mode != "admin" ){
            continue;
        }

        $item  = "<div class='item'>";

        $item .=    "<div class='item-margin' id='$c[8]'></div>";

        $item .=    "<div class='item-heading'>";
        $item .=        "<img class='symbol' src='http://satoken.nkmr.io/img/activity/$c[2].png'>";
        $item .=        "<div class='achievement-heading'>";
        $item .=            $c[3];
        $item .=            "<div class='achievement-heading-date'>$c[4]</div>";
        $item .=        "</div>";
        $item .=    "</div>";

        $item .=    "<div class='item-desc'>";
        $item .=        $c[5];
        $item .=    "</div>";

        $item .=    "<div class='item-thumbnail'>";
        $item .=        "<img src='$c[6]'>";
        $item .=    "</div>";

        $item .= "</div>";

        echo $item;
    }
}

?>