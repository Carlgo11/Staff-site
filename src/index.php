<?php require 'protected.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PortalCraft Staff Portal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PortalCraft Staff Portal">
        <meta name="author" content="Carlgo11">
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap.min.css"
              rel="stylesheet">
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap-glyphicons.css"
              rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/bootswatch/2.1.0/united/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
                background-color: rgba(0, 0, 0, 0.1);
            }
            .alert {
                display: none;
            }
            tbody tr {
                cursor: pointer;
            }
        </style>
    </head>
    <body >

        <!-- navbar -->
        <div name="navbar" class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" >PortalCraft Staff Portal</a>
                    <ul class="nav">
                        <li class="active"><a href=".">Home</a></li>
                        <li><a href="./anticheat">AntiCheat</a></li>
                        <li><a href="./prism">Prism</a></li>
                        <li><a href="http://mc.portalcraft.se/lain/commands.txt">Lain</a></li>
                        <li><a href="http://git.io/jnaU3w">Permissions</a></li>
                        <li><a href="http://mc.portalcraft.se/log/log.txt">Chat-Log</a></li>     
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main -->
        <div class="container">

            <div class="hero-unit">
                <h2>PortalCraft Staff Portal</h2>
                <p>
                    This is The PortalCraft.Se Server's Staff Portal. A place for the members of staff to investigate & maintain the server.
                    <br><br>
                    Press a tab in the navigation bar to continue.
                </p>
            </div>
            <hr>
            <footer>
                <div class="pull-left"><a href="http://carlgo11.com/">&copy Carlgo11 2014</a></div>
                <div style="margin-left: 120px">Parts of the code belongs to <a href="http://md-5.net/">md_5</a> & <a href="http://wiki.ess3.net">Essentials</a>.</div>
            </footer>
        </div>
    </body>
</html>
