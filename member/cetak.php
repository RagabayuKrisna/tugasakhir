<?php
    session_start();
    /**
     * spl_autoload akan meload semua class yang ada di folder PDO
     */
    require 'lib/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    spl_autoload_register(function($class){
        require_once '../pdo/' . $class . '.php';
    });

    

    /**
     * Function untuk inisialisasi Class Secara Bayangan
     * Berdasarkan Parameter yang di berikan
     * 
     * Contoh jika ingin memanggil method read di class Kelas: 
     * Standar Code     : $kelas = new Kelas();
     *                    $kelas->read();
     * with _getClass   : _getClass('Kelas')->read();
     */
    function _getClass($class_name){
        if(file_exists('../pdo/'.$class_name.'.php')){
            $obj = new $class_name;
            return $obj;
        }else{
            echo "<p style='color:red; font-size:38px'>Nama Class tidak ditemukan di folder PDO ! , Mohon periksa parameter di _getClass !</p>";
        }
    }

    // print_r($_POST);
    $no = 1;
    while(true){
        if($no < 10){
            $id_booking = date('Ymd').'000'.$no;
            if(_getClass('Booking')->cekID($id_booking)){
                break;
            }
        }elseif($no < 100){
            $id_booking = date('Ymd').'00'.$no;
            if(_getClass('Booking')->cekID($id_booking)){
                break;
            }
        }elseif($no < 1000){
            $id_booking = date('Ymd').'0'.$no;
            if(_getClass('Booking')->cekID($id_booking)){
                break;
            }
        }elseif($no < 10000){
            $id_booking = $no;
            if(_getClass('Booking')->cekID($id_booking)){
                break;
            }
        }elseif($no < 100000){
            $id_booking = date('Ymd').$no;
            if(_getClass('Booking')->cekID($id_booking)){
                break;
            }
        }
        $no++;
    }
    _getClass('Booking')->create($id_booking, $_SESSION['login'], $_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['email'], $_POST['item'], date_format(date_create($_POST['tgl']), 'Y-m-d'));
    $data_keranjang = "";
    if($_GET['direct']=="false"){
        $data_keranjang = _getClass('Keranjang')->read_keranjang($_SESSION['login'])->fetchAll(PDO::FETCH_ASSOC);
    }else{
        $data_keranjang = _getClass('Item')->read_Id_item($_POST['id_barang'])->fetchAll(PDO::FETCH_ASSOC);
    }

    $html = "
    <!DOCTYPE html>
    <html lang='en'>
        <head>
            <link href='css/bootstrap.min.css?version=4.4.0' rel='stylesheet'>
        </head>
        <body >
            <center><h2 style='padding-bottom:15px'>Struk</h2></center>
            <table class='table table-borderless'>
                <tr>
                    <td width='50%'>ID Pesanan </td>
                    <td width='50%'>".$id_booking."</td>
                </tr>
                <tr>
                    <td width='50%'>Tanggal </td>
                    <td width='50%'>".date_format(date_create($_POST['tgl']), 'd M Y')."</td>
                </tr>
                <tr>
                    <td width='50%'>Nama </td>
                    <td width='50%'>".$_POST['nama']."</td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>".$_POST['alamat']."</td>
                </tr>
                <tr>
                    <td>No Hp </td>
                    <td>".$_POST['nohp']."</td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>".$_POST['email']."</td>
                </tr>
                <tr>
                    <td>Keterangan </td>
                    <td>".$_POST['item']."</td>
                </tr>
            </table>
            <center><h2 style='padding-bottom:15px'>Item yang dipesan</h2></center>
            <table class='table' border='1'>
                <tr>
                    <td>No</td>
                    <td>Nama Barang</td>
                    <td>Harga</td>
                </tr>
            
    ";
    $jumlah = 0;
    for($i = 0; $i<count($data_keranjang); $i++){
        _getClass('Booking')->create_detail($id_booking, $data_keranjang[$i]['id_item']);
        $jml = $data_keranjang[$i]['harga_item'];
        $jumlah = $jml + $jumlah;
        $html .= "
            <tr>
                <td>".($i+1)."</td>
                <td>".$data_keranjang[$i]['nama_item']."</td>
                <td>".$data_keranjang[$i]['harga_item']."</td>
            </tr>
        ";
    }
    $html .= "
            <tr>
                <td colspan='2' class='text-right'>Total</td>
                <td>$jumlah</td>
            </tr>
                </table>
                <div>
                <br>Keterangan : Silahkan tunjukkan Struk ini Ke Ratu Jawa untuk melakukan pembayaran!</br>
                <br></br>
                </div>
            </body>
        </html>
    ";

    _getClass('Keranjang')->delete_semua($_SESSION['login']);
    echo $html;
    //  echo json_encode($data);

    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    // $dompdf->setPaper('A4', 'potrait');

    // Render the HTML as PDF
    // $dompdf->render();

    // Output the generated PDF to Browser
    // $dompdf->stream('Laporan_'.date('d-m-Y').'.pdf', array("Attachment">=0));
?>