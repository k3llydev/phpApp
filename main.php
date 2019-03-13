<?php
    class App{
        private $w;
        public function loadLanguage(){
            $data = file_get_contents(BASE_URL."phpApp/languages/es-mx.json");
            $this->w = json_decode($data);
        }
        
        public function initHTML($BASE,$type){
            switch($type){
                case "PC":
                    //Load HTML for PC version
                break;
                    
                case "MOBILE":
                    //Load HTML for Mobile version
                break;
            }
        }
        
        public function endHTML($BASE, $type="PC"){
            switch($type){
                    
                case "PC":
                    //Close HTML for PC version
                break;
                    
                case "MOBILE" :
                    //Close HTML for Mobile version
               break;     
                    
            }
        }
        
        public function output($string, $f = []){
            if(array_key_exists($string, (array) $this->w)){
                $string = $this->w->{$string};
            }
            $string = str_replace(" ","^",$string);
            if(in_array("spaced", $f)){
                $string = implode(' ',str_split($string)); 
            }
            if(in_array("upper", $f)){
                $string = mb_strtoupper($string);
            }
            $string = str_replace("^","&nbsp;",$string);
            echo $string;
        }
    }
$phpApp = new App;
?>
