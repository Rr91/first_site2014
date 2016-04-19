<?php
    require_once "global_class.php";
    
    class Article extends GlobalClass{
    
        public function __construct($db)
        {
            parent::__construct("articles", $db);
        }
        public function getAllSortDate()
        {
            return $this->getAll("date", false);
        }
        public function getAllOnSectionID($section_id)
        {
            return $this->getAllOnField("section_id", $this->idChange($section_id), "date", false);
        }   
        public function searchArticles($words)
        {
            return $this->search($words, array("title", "full_text"));
        }
        public function getTitleText($id)
        {
            return $this->getFieldOnID($id, "title");
        }
        public function getIntroText($id)
        {
            return $this->getFieldOnID($id, "intro_text");
        }
        public function getFullText($id)
        {
            return $this->getFieldOnID($id, "full_text");
        }
        public function setTitleText($id,$value)
        {
            return $this->setFieldOnID($id, "title",$value);
        }
        public function setIntroText($id,$value)
        {
            return $this->setFieldOnID($id, "intro_text",$value);
        }
        public function setFullText($id, $value)
        {
            return $this->setFieldOnID($id, "full_text", $value);
        }
    }
?>