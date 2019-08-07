<?php
    class Login{
         public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbratujawa','root','');
        }
        public function read_username($username, $password){
            try{
                $sql = "select * from member where username='$username' and password='$password' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function write_new($id_admin, $nama, $username, $password){
            try{
                $sql = "INSERT into tbadmin values('id_admin', 'nama', 'username', 'password')";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_admin($username, $password){
            try{
                $sql = "select * from tbadmin where username='$username' and password='$password' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function logout(){
            session_start();
            session_destroy();
        }
        public function read_foto($username){
            try{
                $sql = "SELECT * from tb_foto where username = '$username'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
    

?>