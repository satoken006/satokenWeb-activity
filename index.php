<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="http://satoken.nkmr.io/activity/javascripts/main.js"></script>
    <title>活動履歴</title>
</head>
<body>
    <div class="nav fixed">
        <ul id="menubar">
            <li><a href="http://satoken.nkmr.io/">HOME</a></li>
            <li><a href="http://satoken.nkmr.io/profile/">PROFILE</a></li>
            <li><a href="http://satoken.nkmr.io/research/">RESEARCH</a></li>
            <li><a href="http://satoken.nkmr.io/product/">PRODUCT</a></li>
            <li><a href="http://satoken.nkmr.io/activity/">ACTIVITY</a></li>
            <li><a href="http://satoken.nkmr.io/link/">LINK</a></li>
        </ul>
    </div>
    <img id="header" src="http://satoken.nkmr.io/img/header.jpg">

    <div id="content">
        <div class="heading">活動履歴 2017</div>

        <div class="achievement-list">
            <div class="activity-box">
                <a href="http://satoken.nkmr.io/activity/2014/">
                    <img src="../../img/activity/calendar.jpg">
                    <p>2014</p>
                </a>
            </div>
            <div class="activity-box">                
                <a href="http://satoken.nkmr.io/activity/2015/">
                    <img src="../../img/activity/calendar.jpg">
                    <p>2015</p>
                </a>
            </div>
            <div class="activity-box">                
                <a href="http://satoken.nkmr.io/activity/2016/">
                    <img src="../../img/activity/calendar.jpg">
                    <p>2016</p>
                </a>
            </div>
            <div class="activity-box">                
                <a href="http://satoken.nkmr.io/activity/">
                    <img src="../../img/activity/calendar.jpg">
                    <p>2017</p>
                </a>
            </div>
        </div>

        <?php

        require "../php/function.php";
        require "php/connectToMySQL.php";

        showActivities( $connection, 2017 );

        ?>
    </div>
</body>
</html>