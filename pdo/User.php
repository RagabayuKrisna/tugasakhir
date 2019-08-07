<?php
    class User{
         public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbratujawa','root','');
        }
        public function create_member($no_hp, $nama, $username, $email, $alamat, $password){
            try{
                $sql = "INSERT into member values('', '$no_hp', '$nama', '$username', '$email', '$alamat', '$password', 0)";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                print_r($stmt);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_member($username, $password){
            try{
                $sql = "SELECT * from member where username='$username' and password='$password' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
         public function read_member_user($id_member){
            try{
                $sql = "SELECT * from member where id_member = '$id_member'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
            public function read_member_diadmin(){
                        try{
                            $sql = "SELECT * from member";
                            $stmt = $this->db->prepare($sql);
                            $stmt->execute();
                            return $stmt;
                        }catch(PDOException $e){
                            echo $e->getMessage();
                        }
                    }

        public function read_admin($id_admin, $password){
            try{
                $sql = "SELECT * from tbadmin where id_admin='$id_admin' and password='$password' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function admin(){
            try{
                $sql = "SELECT * from tbadmin";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function update_user($id_member, $no_hp, $nama, $username, $email, $alamat, $password){                    
            try{
                $sql = "UPDATE member SET no_hp ='$no_hp', nama = '$nama', username = '$username', email = '$email', alamat ='$alamat', password ='$password' WHERE id_member = '$id_member'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }


?>