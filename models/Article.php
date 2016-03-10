<?php

/**
 * Description of Article
 *
 * @author kuro
 */
class Article {
    
    /*public $name;
    public $description;
    public $text;
*/
    private $json;
    private $image = [];
    private $images = [];

    public function __construct($slug, $type) {
        $this->slug = $slug;
        $this->type = $type;
        
        //die(DATA . "/articles/{$type}s/$slug.json");
        $this->json = json_decode(
                file_get_contents(DATA . "/articles/{$type}s/$slug.json" )
        );
        
        $this->name = $this->json->name;
        $this->description = $this->json->description;
        $this->text = $this->json->text;
    }
    
    public function __get($name) {
        $method = "get" . ucfirst($name);
        return $this->$method();
    }
    
    public function getImage() {
        $this->image = "/data/images/{$this->type}s/{$this->slug}.jpg";
        return $this->image;
    }

    public function getImages() {
        $this->images = [];
        $slug = $this->slug;
        foreach (scandir(DATA . "/images/{$this->type}s/$slug") as $image) {
            if (!is_dir(DATA . "/images/{$this->type}s/$slug/$image")) {
                $this->images[] = "/data/images/{$this->type}s/$slug/$image";
            }
        }
        return $this->images;
    }
    
    public function getGroup() {
        
        $this->group = new Group($this->json->group,$this->type);
        return $this->group;
    }
}
