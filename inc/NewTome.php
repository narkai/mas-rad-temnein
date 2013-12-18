<?php

   class NewTome {
      private $text;
      private $id;

      private $user_id;

      function __construct($text, $user_id) {
         $this->text = $text;
         $this->user_id = $user_id;
      }

      function __destruct() {
         //echo $this->id . " deleted.\n";
      }

      public function insert_db() {
         $query = "INSERT INTO tomes (text, user_id) VALUES ('".mysql_real_escape_string($this->text)."', '".intval($this->user_id)."')";
         $sql = mysql_query($query);

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
