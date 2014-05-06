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
                    <a href="#">My Basket</a>
                    <a href="#">Login/Signup</a>
                </div>
            </div>
            <div class="content">
                
                <div class="item">
                    <div class="item_header">
                        <span class="item_img">
                            <img src="img/food.jpg" class="item_img">
                        </span>
                        <span class="item_name">
                            Chicken fried rice
                        </span>
                    </div>
                    <div class="item_body">
                        <div class="item_desc">
                            this is just desc text about chicken fried rice. instead of this data will be fetched from database
                            and displayed
                        </div>
                        <button class="btn_buy">Order for inr 20</button>
                    </div>
                </div>
                
            </div>
        </body>
    </html>