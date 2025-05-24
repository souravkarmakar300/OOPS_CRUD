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


    //     public function read(){

    //     $database = new db();
    //     $conn = $database->connect();

    //     $sql = "SELECT * FROM users";
    //     $result = mysqli_query($conn, $sql);

    //      $responsearray = array();
    //         while($data = mysqli_fetch_assoc($result)){
    //             $responsearray[] = $data;
    //         }
    //         return $responsearray;
    // }
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