<?php
require_once 'db.php';

error_reporting(1);
class allfunctions {
    

    // ADD RECORD

    public function addRecord($data) {

        $database = new db();
        $conn = $database->connect(); 
        if(empty($data['name']) || empty($data['email'])){
            echo "<script>alert('Please fill all fields');</script>";
            return false;
        }else{
            $insert = "INSERT INTO users(name,email)VALUES('".$data['name']."','".$data['email']."')";
            $runquery = mysqli_query($conn, $insert);
            if ($runquery) {
                echo "Data Inserted";
            } else {
                die("Connection failed: " . mysqli_connect_error());
            }
        }
    }


    // READ RECORD

    public function read(){

        $database = new db();
        $conn = $database->connect();

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

         $responsearray = array();
            while($data = mysqli_fetch_assoc($result)){
                $responsearray[] = $data;
            }
            return $responsearray;
    }


    // GET FROM DATA

        public function getfromdata($id){
        
        $database = new db();
        $conn = $database->connect(); 
            $sql = "SELECT * FROM users WHERE id = '".$id."'";
            $runquery = mysqli_query($conn, $sql);
            $getdata = mysqli_fetch_assoc($runquery);
               return   [
                        'name' => $getdata['name'],
                        'email' => $getdata['email'],
                        ];
           
    }


    // UPDATE DATA

    public function updatedata($data,$id){

        $database = new db();
        $conn = $database->connect(); 
        if(empty($data['name']) || empty($data['email'])){
            echo "<script>alert('Please fill all fields');</script>";
            return false;
        }else{
            $insert = "UPDATE users SET name = '".$data['name']."' , email = '".$data['email']."' where id = '".$id."'";
            $runquery = mysqli_query($conn, $insert);
            if ($runquery) {
                header("Location: read.php");
                echo "Data updated";
            } else {
                die("Connection failed: " . mysqli_connect_error());
            }
        }
    }

    // DELETE DATA

    public function delete($id) {
        $database = new db();
        $conn = $database->connect(); 

        $delete = "DELETE FROM users WHERE id = '".$id."'";
        $deletequery = mysqli_query($conn, $delete);

        if ($deletequery) {
            return true;
        } else {
            die("Query failed: " . mysqli_error($conn)); // Fixed error method
        }
    }



}

?>