<?php
/*these functions should be enough for basic calculations*/
class filex{
    public function read($url){
        return explode("\n", file_get_contents($url));
    }
    
    public function write($url,$content){
        return file_put_contents($url, $content);
    }
    
    public function delete($url){
        return unlink($url);
    }
        
}