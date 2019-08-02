<!DOCTYPE html>
<html>
    <head>
        <title>ERROR 404 - 98SeaTurtles Network</title>
        <link rel="stylesheet" href="/css/main.css">
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/head.php"; ?>
    </head>
    <body>
        <?php
			include $_SERVER['DOCUMENT_ROOT'] . "/include/header.html";
            include $_SERVER['DOCUMENT_ROOT'] . "/include/menu.html";
        ?>
        <div id="content">
            <div id="content-title">
                ERROR 404
            </div>
            <div id="content-subtitle">
                Page Not Found
            </div>
            <div id="content-body">
                Perhaps the page you are looking for was moved?<br>
                <br>
                Check the wbesite ChangeLog for the new location of the page you are looking for.<br>
                <a href="/changelog/">ChangeLog</a>
            </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/include/footer.html";?>
    </body>
</html>