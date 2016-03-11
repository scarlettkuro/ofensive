<?php

/**
 * Description of Group
 *
 * @author kuro
 */
class Group {
    public function __construct($slug, $type) {
        $this->slug = $slug;
        $this->type = $type;
        
        //get character file, decode it, get variables
        
        $json = json_decode(
                file_get_contents(DATA . "/articles/{$this->type}s/groups/$slug.json" )
        );
        
        $this->name = $json->name;
        $this->description = $json->description;
        
        $this->characters = [];
        foreach($json->characters as $character) {
            $this->characters[] = new Article($character, $type);
        }
    }
    
    public static function getGroups($type) {
        $groups = [];
        foreach (scandir(DATA . "/articles/{$type}s/groups") as $slug) {
            if (!is_dir(DATA . "/articles/{$type}s/groups/$slug")) {
                $nslug  = Utils::removeExtension($slug);
                $groups[$nslug] = new Group($nslug, $type);
            }
        }
        
        return $groups;
    }
}
