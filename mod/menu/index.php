<?php
class menu{
    public function __construct(){
        $this -> getMenu();
        $this -> addMenu();
        $this -> delete();
    }
    
    public function getMenu(){
        if($_POST['cmd'] == 'getMenu'){
            include_once('../../core/db.php');   
            $dbMnaager = new db();
            $result = $dbMnaager -> execute('select * from data;');
            $result = json_encode($result);
            print $result;
        }
    }


}