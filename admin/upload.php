<?php
    $lokasi = "../media/";
    print_r($_FILES);
    $ext = explode('.', basename($_FILES['file']['name']));
    $file_name = md5(uniqid());
    $lokasi_upload = $lokasi.$file_name.".".$ext;

    if(move_uploaded_file($_FILES['file']['tmp_name'], $lokasi_upload)){
        $result['response'] = $file_name.".".$ext;
        echo json_encode($result);
    }else{
        $result['response'] = "failed";
        echo json_encode($result);
    }
?>