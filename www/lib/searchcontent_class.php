<?php
    require_once "modules_class.php";
    
    class SearchContent extends Modules{
       
        private $words;
        
        public function __construct($db){
            parent::__construct($db);
            $this->words = $this->data["words"];
        }
        protected function getTitle(){
             return "Результаты поиска: ".$this->words;
        }
        protected function getDescription(){
            return $this->words;
        }
        protected function getKeyWords(){
            return mb_strtolower($this->words);
        }
        
        protected function getMiddle(){
            $result = $this->article->searchArticles($this->words);
            if($result ===false)return $this->getTemplate("search_notfound");
            for($i = 0; $i < count($result);$i++){
                $sr["link"] = $this->config->address."?view=article&amp;id=".$result[$i]['id'];
                $sr["title"] = $result[$i]["title"];
                $text .= $this->getReplaceTemplate($sr, "search_items");
            }
            $new_sr["search_items"] = $text;
            return $this->getReplaceTemplate($new_sr, "search_result");
       }
        
    }
?>