<?php
class db{

        private $conn;
        public function connect()
        {
            $this->conn = mysqli_connect("localhost", "root", "", "sourav");
            if (!$this->conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            return $this->conn;
        }


}







// class Database{
//     public $conn;
//     public function __construct(){
//         $this->conn = mysqli_connect("localhost", "root", "", "sourav");
//         if(!$this->conn){
//             die("Connection failed: " . mysqli_connect_error());
//         }
//     }

// }

?>