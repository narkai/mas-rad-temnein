<?php

   class NewTome {
      private $date;
      private $text;
      private $user_id;
      private $id;

      function __construct($date, $text, $user_id) {      
         $this->date = $date;
         $this->text = $text;
         $this->user_id = $user_id;
      }

      function __destruct() {
         //echo $this->id . " deleted.\n";
      }

      public function insert_db() {
         $query="INSERT INTO tomes (date, text, user_id) VALUES ('$this->date', '$this->text', '$this->user_id')";
         mysql_query($query);
         $this->id = mysql_insert_id();
      }

      public function get_text() {
         return $this->text;
      }

      public function get_date() {
         return $this->date;
      }
   }
?>
