<?php
class Keranjang{
    public function __construct(){ //koneksi database
        $this->db = new PDO('mysql:host=localhost;dbname=dbratujawa','root','');
    }
    public function create_keranjang($id_member, $id_item, $tanggal){
        try{
            $sql = "INSERT into tb_keranjang values ('','$id_member', '$id_item', '$tanggal', 0)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function read_keranjang($id_member){
        try{
            $sql = "SELECT tb_item.id_item, tb_item.nama_item, tb_item.harga_item, tb_item.cover_item, tb_keranjang.id_keranjang, tb_keranjang.id_member, tb_keranjang.tanggal
            from tb_item, tb_keranjang WHERE tb_item.id_item=tb_keranjang.id_item and tb_keranjang.id_member='$id_member'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function read_Id_item_keranjang($id_item){
            try{
                $sql = "select * from tb_item where id_item = '$id_item'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function readkeranjang(){
            try{
                $sql = "select * from tb_keranjang";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function read_id_keranjang($id_keranjang){
            try{
                $sql = "select * from tb_keranjang where id_keranjang ='$id_keranjang'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function delete_item($id_keranjang){            
            try{
                $sql = "delete from tb_keranjang where id_keranjang ='$id_keranjang'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function delete_semua($id_member){            
            try{
                $sql = "delete from tb_keranjang where id_member ='$id_member'";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function create_boking($id_keranjang, $tanggal, $id_member, $nama_lengkap, $alamat, $no_hp, $email, $patokan_rumah, $keterangan_item){
        try{
            $sql = "INSERT into tb_boking values('', $id_keranjang, $tanggal, '$id_member', '$nama_lengkap', '$alamat', '$no_hp', '$email', '$patokan_rumah', '$keterangan_item', 1)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    // public function update_status($status_aktif, $id_boking){
    //  try{
    //         $sql = "UPDATE tb_boking SET status_aktif = '$status_aktif' WHERE id_boking = '$id_boking'";
    //         $stmt = $this->db->prepare($sql);
    //         $stmt->execute();
    //         return $stmt;
    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //     }
    // }
    // public function delete_boking($id_boking){
            
    //     try{
    //         $sql = "DELETE from tb_boking where id_boking ='$id_boking'";
    //         $stmt = $this->db->prepare($sql);
    //         $stmt->execute();
    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //     }
    // }

    // public function read_tanggal($tanggal){
    //     try{
    //         $sql = "select * from tb_boking where tanggal ='$tanggal'";
    //         $stmt = $this->db->prepare($sql);
    //         $stmt->execute();
    //         return $stmt;
    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //     }
    // }


    // public function read_item(){
    //     try{
    //         $sql = "select * from tb_item";
    //         $stmt = $this->db->prepare($sql);
    //         $stmt->execute();
    //         return $stmt;
    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //     }
    // }

    // public function read_tambahan(){
    //     try{
    //         $sql = "select * from tb_item where id_pelayanan='2'";
    //         $stmt = $this->db->prepare($sql);
    //         $stmt->execute();
    //         return $stmt;
    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //     }
    // }
}
?>