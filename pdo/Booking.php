<?php
class Booking{
    public function __construct(){ //koneksi database
        $this->db = new PDO('mysql:host=localhost;dbname=dbratujawa','root','');
    }
    // public function write_new ($id_boking, $id_paket, $tanggal){
    //     try{
    //         $sql = "INSERT into tb_boking values ('$id_boking', '$id_paket', '$tanggal')";
    //         $stmt = $this->db->prepare($sql);
    //         $stmt->execute();
    //         return $stmt;
    //     }catch(PDOException $e){
    //         echo $e->getMessage();
    //     }
    // }
    public function read_booking($status){
        try{
            $sql = "select * from tb_boking where status_aktif='$status'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function read_booking_2($status){
        try{
            $sql = "select * from tb_boking where tb_boking.status_aktif='$status'";
            // tb_detail_booking, tb_item where tb_detail_booking.id_item=tb_item.id_item and 
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function read_keranjang($id_member){
        try{
            $sql = "select * from tb_keranjang where id_member = '$id_member'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
     public function read_keranjang_fk($id_member){
        try{
            $sql = "SELECT 
            tb_item.id_item, 
            tb_item.nama_item, 
            tb_item.harga_item,
            tb_item.deskripsi, 
            tb_item.cover_item, 
            tb_keranjang.id_keranjang, 
            tb_keranjang.id_item,
            tb_keranjang.id_member, 
            tb_keranjang.tanggal
            from tb_item, tb_keranjang 
            WHERE 
            tb_item.id_item=tb_keranjang.id_item 
            and 
            tb_keranjang.id_member='$id_member'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function read_daftar_booking(){
        try{
            $sql = "select * from tb_boking where status_aktif=2";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function update_status($status_aktif, $id_boking){
     try{
            $sql = "UPDATE tb_boking SET status_aktif = '$status_aktif' WHERE id_boking = '$id_boking'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function delete_boking($id_boking){
            
        try{
            $sql = "DELETE from tb_boking where id_boking ='$id_boking'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function read_tanggal($tanggal){
        try{
            $sql = "select * from tb_boking where tanggal ='$tanggal'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }


    public function read_item($id_member, $tgl){
        try{
            $sql = "select * from tb_item where tb_item.id_item NOT IN 
            (SELECT tb_detail_booking.id_item from tb_boking, tb_detail_booking where tb_boking.id_boking=tb_detail_booking.id_booking and tb_boking.tanggal = '$tgl')
            and tb_item.id_item NOT IN (SELECT id_item FROM tb_keranjang WHERE id_member=$id_member) and tb_item.id_item NOT IN (SELECT tb_detail_booking.id_item from tb_detail_booking, tb_boking WHERE tb_boking.id_boking=tb_detail_booking.id_booking and tb_boking.id_member=$id_member  and tb_boking.tanggal='$tgl')";
            $stmt = $this->db->prepare($sql);
            // print_r($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function read_tambahan(){
        try{
            $sql = "select * from tb_item where id_pelayanan='2'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public function create($id_boking, $id_member, $nama_lengkap, $alamat, $no_hp, $email, $keterangan, $tgl){
        try{
            $sql = "INSERT into tb_boking values($id_boking, '$tgl', '$id_member', '$nama_lengkap', '$alamat', '$no_hp', '$email', '$keterangan', 1)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function create_detail($id_boking, $id_item){
        try{
            $sql = "INSERT into tb_detail_booking values('', '$id_boking', '$id_item')";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function read_user($id_boking){
        try{
            $sql = "SELECT * from tb_boking where id_boking='$id_boking'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public function cekID($id_boking){
        try{
            $sql = "SELECT id_boking from tb_boking where id_boking='$id_boking'";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->rowCount() < 1;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>