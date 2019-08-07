<?php
    class Galeri{
        public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbratujawa','root','');
        }
        public function create_galeri($judul_galeri, $keterangan,  $foto_galeri){
            try{
                $sql = "INSERT into tb_galeri values('', '$judul_galeri', '$keterangan', '$foto_galeri') ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        // public function upload_cover($id_paket, $nama_foto){
        //     try{
        //         $sql = "INSERT into tb_cover values('', '$id_paket', '$nama_foto') ";
        //         $stmt = $this->db->prepare($sql);
        //         $stmt->execute();
        //         return $stmt;
        //     }catch(PDOException $e){
        //         echo $e->getMessage();
        //     }
        // }
        public function delete_galeri($id_galeri){
            try{
                $sql = "DELETE from tb_galeri where id_galeri='$id_galeri'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_id_galeri($id_galeri){
            try{
                $sql = "select * from tb_galeri where id_galeri = '$id_galeri'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_galeri(){
            try{
                $sql = "select * from tb_galeri";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        // public function read_cover($id_paket){
        //     try{
        //         $sql = "select * from tb_cover where id_paket ='$id_paket'";
        //         $stmt = $this->db->prepare($sql);
        //         $stmt->execute();
        //         return $stmt;
        //     }catch(PDOException $e){
        //         echo $e->getMessage();
        //     }
        // }
        // public function delete_paket($id_paket){
            
        //     try{
        //         $sql = "delete from tb_paket where id_paket ='$id_paket'";
        //         $stmt = $this->db->prepare($sql);
        //         $stmt->execute();
        //     }catch(PDOException $e){
        //         echo $e->getMessage();
        //     }
        // }
        // public function update_paket($id_paket, $id_pelayanan, $nama_paket,  $deskripsi, $harga_paket){
            
            
        public function update_galeri($id_galeri, $judul_galeri, $keterangan, $foto_galeri){
        
            try{
                $sql = "UPDATE tb_galeri SET judul_galeri = '$judul_galeri', keterangan = '$keterangan', foto_galeri = '$foto_galeri' WHERE id_galeri = '$id_galeri'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
                }
            }
    }
?>