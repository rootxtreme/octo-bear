<?php
    include_once('core/file.php');
    $fh = new filex();
    $m = $fh -> read('conf/ins');
    if($m[0] != 'yes'){
        header('Location: install.php');
        die();
    }
?>
<?php
include_once('conf/conf.php');
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>
                <?php print $GLOBALS["host_name"]; ?>
            </title>
            <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="css/index.css">
        </head>
        <body>
            <div class="header">
                <div class="header_logo">
                    <?php print $GLOBALS["host_name"]; ?>
                </div>
                <div class="header_menu">
                    login
                </div>
            </div>
        </body>
    </html>