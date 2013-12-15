<?php

   class NewTome {
      private $date;
      private $text;
      private $id;

      function __construct($date, $text) {      
         $this->date = $date;
         $this->text = $text;
      }

      function __destruct() {
         //echo $this->id . " deleted.\n";
      }

      public function insert_db() {
         $query="INSERT INTO tomes (date, text) VALUES ('$this->date', '$this->text')";
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
