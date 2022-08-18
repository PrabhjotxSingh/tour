
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>internet</title>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/shell.css">
        <script type="text/javascript" src="js/shell.js"></script>
    </head>
    <body>
        <div id="header">
            <!-- The list of open tabs, and button to open a new tab -->
            <div id="header-tabstrip-container">
                <div id="header-placeholder"></div>
                <ul id="tab-container">
                    <li id="new-tab" class="tab tab-new" onclick="onNewTab()"><i class="fa fa-plus tab-new-icon"></i></li>
                    <li id="tab-set-next" class="tab tab-set fa fa-arrow-up" onclick="nextSet()"></li>
                    <li id="tab-set-prev" class="tab tab-set fa fa-arrow-down" onclick="prevSet()"></li>
                </ul>
            </div>
            <!-- Container for UI buttons, url bar etc -->
            <div id="header-control-container">
                <!-- Back / Forward / Reload -->
                <ul>
                    <li><i onclick="onBack()" class="fa fa-lg fa-arrow-left control-icon"></i></li>
                    <li><span onclick="onForward()" class="fa fa-lg fa-arrow-right control-icon control-icon"></span></li>
                    <li><span onclick="onReload()" class="fa fa-lg fa-refresh control-icon control-icon"></span></li>
                </ul>
                <!-- URL input -->
                <input id="header-url" placeholder="Search or enter address" onkeydown="onNavigate(event)">
            </div>
        </div>
        <div id="content">
            <!-- Current tab exists here as an iframe -->
        </div>
    </body>
</html>
