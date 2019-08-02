<!DOCTYPE html>
<html>
    <head>
        <title>ChangeLog - 98SeaTurtles Network</title>
        <link rel="stylesheet" href="/css/main.css">
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/head.php"; ?>
    </head>
    <body>
        <?php
			include $_SERVER['DOCUMENT_ROOT'] . "/include/header.html";
            include $_SERVER['DOCUMENT_ROOT'] . "/include/menu.html";
        include $_SERVER['DOCUMENT_ROOT'] . "/include/ad/large-right-collum.php";
        ?>
        <div id="content">
            <div id="content-title">
                ChangeLog
            </div>
            <?php 
            $i =0;
            foreach (glob("./*.html") as $filename) {
                $dirlist[$i++] = $filename;
            }
            arsort($dirlist);
            foreach( $dirlist as $filename ) {
                include $filename;
            } 
            ?>
        </div>
        
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/include/footer.html";?>
    </body>
</html>