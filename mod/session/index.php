<?php
class session{
    public function __construct(){
        $this -> login();
        $this -> logout();
        $this -> isLogged();
        $this -> getRole();
        $this -> signup();
    }
    
    public function login(){
        if ($_POST['cmd'] == 'login'){
            include_once('../../core/db.php');
            $dbManager = new db();
            $username = $dbManager -> escape($_POST['username']);
            $password = $dbManager -> escape($_POST['password'];);
            $result = $dbManager -> execute("select * from credentials where username = '$username' and password = '$password';");
            if(sizeof($result) == 1 and $password == $result[0]['password']){
                print 'True';
                include_once('../../core/session.php');
                $sess = new sessionx();
                $sess -> setValue('username',$_POST['username']);
                $sess -> setValue('role',$result[0]['role']);
                $sess -> setValue('logged','True');
            }else{
                print 'False';
            }
        }        
    }
    
    
    public function logout(){
        if($_POST['cmd'] == 'logout'){
            include_once('../../core/session.php');
            $sess = new sessionx();
            $sess -> setValue('logged','False');
            $sess -> destroy();
            print 'True';
        }
    }
    
    public function isLogged(){
    
    }

}