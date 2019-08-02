<!DOCTYPE html>
<html>
    <head>
        <title>fixWWWperms - 98SeaTurtles Network</title>
        <link rel="stylesheet" href="/css/main.css">
		<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/head.php"; ?>
    </head>
    <body>
        <?php
			include $_SERVER['DOCUMENT_ROOT'] . "/include/header.html";
            include $_SERVER['DOCUMENT_ROOT'] . "/include/menu.html";
        include $_SERVER['DOCUMENT_ROOT'] . "/include/ad/right-collum.php";
        ?>
        <div id="content">
            <div id="content-title">
                fixWWWperms
            </div>
            <div id="content-body">
                This is a bash script I am working on for being able to fix all permissions and file owenrship after I upload files to my web server.<br>
                <br>
                <a class="subtitle">Installation</a> <br>
                <br>
                First you need to cd into your web directory<br>
                <div class="code">~$ cd /var/www/</div>
                next you need to create a new sh file names fixperms.sh
                <div class="code">~$ sudo nano fixperms.sh</div>
                Now paste this code into that document
                <div class="code">
                    #!/bin/sh
                    <br>#Fix WWW Permisssions v1.3
                    <br>#By Ciaran Farley (98SeaTurtles.net/fixWWWperms/)
                    <br>echo "Fixing Read, Write, Execute"
                    <br>chmod -Rv 755 *
                    <br>echo "Fixing Ownership"
                    <br>chown -Rv www-data:www-data *</div>
            </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/include/footer.html";?>
    </body>
</html>