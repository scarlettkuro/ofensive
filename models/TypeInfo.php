<?php

/**
 * Description of TypeInfo
 *
 * @author kuro
 */
class TypeInfo {
    //This class was created to define delaults
    public $name = "";
    public $desc = false;
    
    public function __construct($type) {
        $this->name = $type . "s";
        
        $json = json_decode(
                file_get_contents(DATA . "/articles/{$type}s.json" )
        );
                
        if (isset($json)) {
            foreach (get_object_vars($json) as $key => $value) {
                $this->$key = $value;
            }
        }
    }
}
