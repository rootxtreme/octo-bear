<?php
/*these should be enough as long as working on one server*/
class sessionx{
    public function __construct(){
        session_start();
    }

    public function setValue($key,$value){
        $_SESSION[$key] = $value;
    }
    
    public function getValue($key){
        return $_SESSION[$key];
    }
    
    public function destroy(){
        unset($_SESSION[]);
        session_destroy();
    }
    
}
?>