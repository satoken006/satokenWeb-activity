<?php

function showActivities( $_connection, $_year ){

    $date_start = $_year ."-04-01";
    $date_end = ($_year+1) ."-03-31";

    $q = "SELECT *, DATE_FORMAT(date, '%y%m%d') FROM activity WHERE date >= '$date_start' AND date <= '$date_end' ORDER BY date DESC";

    $mode = "";
    if( isset($_GET["mode"]) ){
        $mode = $_GET["mode"];
    }

    foreach( $_connection->query( $q ) as $row ){

        if( $row[7] == 0 && $mode != "admin" ){
            continue;
        }

        $item  = "<div class='item'>";

        $item .=    "<div class='item-margin' id='$row[8]'></div>";

        $item .=    "<div class='item-heading'>";
        $item .=        "<img class='symbol' src='https://satoken.nkmr.io/img/activity/$row[2].png'>";
        $item .=        "<div class='achievement-heading'>";
        $item .=            $row[3];
        $item .=            "<div class='achievement-heading-date'>$row[4]</div>";
        $item .=        "</div>";
        $item .=    "</div>";

        $item .=    "<div class='item-desc'>";
        $item .=        $row[5];
        $item .=    "</div>";

        $item .=    "<div class='item-thumbnail'>";
        $item .=        "<img src='$row[6]'>";
        $item .=    "</div>";

        $item .= "</div>";

        echo $item;
    }

    $_connection = null;
}

?>