<?php
    require_once "global_class.php";
    
    class PollVariant extends GlobalClass{
    
        public function __construct($db)
        {
            parent::__construct("pollvariant", $db);
        }
        public function getAllOnPollID($poll_id){
            return $this->getAllOnField("id_poll",$poll_id);
        }
        public function setVotes($id, $votes){
            if(!$this->valid->validVotes($votes)) return false;
            return $this->setFieldOnID($id, "result", $votes);
        }
    }
?>