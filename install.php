<?php

    include_once('core/file.php');
    $fh = new filex();
    $m = $fh -> read('conf/ins');
    if($m[0] == 'yes'){
        header('Location: ./');
    }

if (isset($_POST['host']) and isset($_POST['username']) and isset($_POST['password']) and isset($_POST['name']) and isset($_POST['db'])){
    /*this is to configure the database over*/
    $host = $_POST['host'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $db = $_POST['db'];
    include_once('./core/file.php');
    $fh = new filex();
    $m = "<?php\n";
    $m = $m. '$GLOBALS["host_name"] = "'.$name.'";'."\n";
    $m = $m. '$GLOBALS["sql_host"] = "'.$host.'";'."\n";
    $m = $m. '$GLOBALS["sql_username"] = "'.$username.'";'."\n";
    $m = $m. '$GLOBALS["sql_password"] = "'.$password.'";'."\n";
    $m = $m. '$GLOBALS["sql_db"] = "'.$db.'";'."\n";
    $fh -> write('conf/conf.php',$m);
    $fh -> write('conf/ins','yes');
    header('Location: ./');
    die();
}


?>
<!DOCTYPE html>
    <html>
        <head>
            <title>
                Octo-bear install
            </title>
            <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
            <link type="text/css" rel="stylesheet" href="css/install.css">
        </head>
        <div class="header header_logo">
            Octa-bear install
        </div>
        <form method = "post" action="" class="content">
            <font size='5px'>Instalation details</font>
            <div><input type=text class='input' placeholder="Website Name" name="name"></div>
            <div><input type=text class='input' placeholder="Database Host ip address" name="host"></div>
            <div><input type=text class='input' placeholder="Database Username" name="username"></div>
            <div><input type=text class='input' placeholder="Database Password" name="password"></div>
            <div><input type=text class='input' placeholder="Database Name" name="db"></div>
            <button>Install</button>
        </form>
    </html>