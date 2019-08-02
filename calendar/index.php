<!DOCTYPE html>
<html>
    <head>
        <title>Calendar - 98SeaTurtles Network</title>
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
                Ciaran's Calendar
            </div>
            <div id="content-subtitle">
                
            </div>
            <div id="content-body">
                <iframe src="https://calendar.google.com/calendar/embed?showPrint=0&amp;showCalendars=0&amp;mode=WEEK&amp;height=1140&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=1i17bbtmtmejm2p4cu3qe6ml30%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FLos_Angeles" style="border-width:0" width="1000" height="1140" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/include/footer.html";?>
    </body>
</html>