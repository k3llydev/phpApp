<?php
  class Database{
        private $db_serv = "SERVER";
        private $db_user = "USERNAME";
        private $db_pass = "PASSWORD";
        private $db_proj = "DATABASE";
        private $h;
        
        public function __construct(){
            $this->h = mysqli_connect($this->db_serv, $this->db_user, $this->db_pass, $this->db_proj);
  }
$phpDatabase = new Database;
?>
