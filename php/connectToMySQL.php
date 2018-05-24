<?php

function showActivities( $_connection, $_year ){

    $date_start = $_year ."-04-01";
    $date_end = ($_year+1) ."-03-31";

    $q = "SELECT *, DATE_FORMAT(date, '%y%m%d') FROM activity WHERE date >= '$date_start' AND date <= '$date_end' ORDER BY date DESC";

    $mode = "";
    if( isset($_GET["mode"]) ){
        $mode = $_GET["mode"];
    }

    foreach( $_connection->query( $q ) as list($id, $date, $category, $title, $dates_str, $description, $thumbnail_url, $date_format) ){

        if( $date_format == 0 && $mode != "admin" ){
            continue;
        }

        $item  = "<div class='item'>";

        $item .=    "<div class='item-margin' id='$id'></div>";

        $item .=    "<div class='item-heading'>";
        $item .=        "<img class='symbol' src='https://satoken.nkmr.io/img/activity/$category.png'>";
        $item .=        "<div class='achievement-heading'>";
        $item .=            $title;
        $item .=            "<div class='achievement-heading-date'>$dates_str</div>";
        $item .=        "</div>";
        $item .=    "</div>";

        $item .=    "<div class='item-thumbnail'>";
        $item .=        "<img src='$thumbnail_url'>";
        $item .=    "</div>";

        $item .=    "<div class='item-desc'>";
        $item .=        $description;
        $item .=    "</div>";

        $item .= "</div>";

        echo $item;
    }

    $_connection = null;
}

?>