<?php
    class Profil{
        public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbratujawa','root','');
        }
        public function read_profil(){
            try{
                $sql = "SELECT * from tb_profil";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function update_profil($nama_perusahaan, $nama_pemilik, $alamat, $email, $no_telepon, $fb, $ig, $deskripsi){                    
            try{
                $sql = "UPDATE tb_profil SET nama_perusahaan ='$nama_perusahaan', nama_pemilik = '$nama_pemilik', alamat = '$alamat', email = '$email', no_telepon = '$no_telepon', fb ='$fb', ig ='$ig', deskripsi ='$deskripsi' WHERE id_profil = 1";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
       
    }
?>