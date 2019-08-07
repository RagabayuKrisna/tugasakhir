<?php
    class Item{
        public function __construct(){ //koneksi database
            $this->db = new PDO('mysql:host=localhost;dbname=dbratujawa','root','');
        }
        public function read_paket(){
            try{
                $sql = "SELECT * from tb_item where nama_pelayanan ='Paket' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_item(){
            try{
                $sql = "SELECT * from tb_item";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_id_paket($id_item){
            try{
                $sql = "SELECT * from tb_item where id_item ='$id_item' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_tambahan(){
            try{
                $sql = "SELECT * from tb_item where nama_pelayanan ='Tambahan' ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        // public function read_slug($slug_judul){
        //     try{
        //         $sql = "select * from tb_paket where slug_judul = '$slug_judul'";
        //         $stmt = $this->db->prepare($sql);
        //         $stmt->execute();
        //         return $stmt;
        //     }catch(PDOException $e){
        //         echo $e->getMessage();
        //     }
        // }
        
        public function update(){

        }
        public function create_paket($nama_item, $harga_item, $deskripsi, $cover_item){
            try{
                $sql = "INSERT into tb_item values('', 'Paket', '$nama_item','$harga_item','$deskripsi','$cover_item') ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function create_tambahan($nama_item, $harga_item, $deskripsi, $cover_item){
            try{
                $sql = "INSERT into tb_item values('', 'Tambahan', '$nama_item','$harga_item','$deskripsi','$cover_item') ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function upload_cover($nama_foto){
            try{
                $sql = "INSERT into tb_item values('$nama_foto') ";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function delete($id_item){
            try{
                $sql = "DELETE from tb_item where id_item='$id_item'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_Id_item($id_item){
            try{
                $sql = "SELECT * from tb_item where id_item = '$id_item'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_pelayanan(){
            try{
                $sql = "select * from tb_pelayanan";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_cover($id_item){
            try{
                $sql = "select * from tb_cover where id_item ='$id_item'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function delete_item($id_item){
            
            try{
                $sql = "delete from tb_item where id_item ='$id_item'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function update_paket($id_item, $nama_pelayanan, $nama_item,  $harga_item, $deskripsi, $cover_item){                    
            try{
                $sql = "UPDATE tb_item SET nama_pelayanan ='Paket', nama_item = '$nama_item', harga_item = '$harga_item',  deskripsi = '$deskripsi', cover_item ='$cover_item' WHERE id_item = '$id_item'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function update_tambahan($id_item, $nama_pelayanan, $nama_item,  $harga_item, $deskripsi, $cover_item){                    
            try{
                $sql = "UPDATE tb_item SET nama_pelayanan ='Tambahan', nama_item = '$nama_item', harga_item = '$harga_item', deskripsi = '$deskripsi', cover_item = '$cover_item' WHERE id_item = '$id_item'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>