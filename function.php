<?php
session_start();
include('dbcon.php');

if(isset($_POST['hapus_wisata'])) {

    $del_id = $_POST['hapus_id'];

    $ref_table = 'data_wisata/'.$del_id;
    $hapusQuery = $database->getReference($ref_table)->remove();


    if($hapusQuery) {
        $_SESSION['status'] = "Menghapus Data Berhasil!";
        header('Location:home.php');
    } else {
        $_SESSION['status'] = "Menghapus Data Gagal!";
        header('Location:home.php');
    }
}

if(isset($_POST['update_wisata'])) {
    
    $key = $_POST['key'];
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $ket = $_POST['ket'];
    $harga = $_POST['harga'];
    $jam = $_POST['jam'];
    $resto = $_POST['restoran'];
    $masjid = $_POST['masjid'];
    $pom = $_POST['pom'];
    $hotel = $_POST['hotel'];
    $img = $_POST['img'];
    $imgUpdate = $_POST['imgName'];

    if(!$imgUpdate) {
        $updateData = [
            'fnama'=>$nama,
            'flokasi'=>$lokasi,
            'fket'=>$ket,
            'fharga'=>$harga,
            'fjam'=>$jam,
            'fresto'=>$resto,
            'fmasjid'=>$masjid,
            'fpom'=>$pom,
            'fhotel'=>$hotel,
            'fimg'=>$img,
        ];
    
        $ref_table = 'data_wisata/'.$key;
        $updateRef_result = $database->getReference($ref_table)->update($updateData);
    
    
        if($updateRef_result) {
            $_SESSION['status'] = "Update Data Berhasil!";
            header('Location:home.php');
        } else {
            $_SESSION['status'] = "Update Data Gagal!";
            header('Location:home.php');
        }
    } else {
        $updateData = [
            'fnama'=>$nama,
            'flokasi'=>$lokasi,
            'fket'=>$ket,
            'fharga'=>$harga,
            'fjam'=>$jam,
            'fresto'=>$resto,
            'fmasjid'=>$masjid,
            'fpom'=>$pom,
            'fhotel'=>$hotel,
            'fimg'=>$imgUpdate,
        ];
    
        $ref_table = 'data_wisata/'.$key;
        $updateRef_result = $database->getReference($ref_table)->update($updateData);
    
    
        if($updateRef_result) {
            $_SESSION['status'] = "Update Data dan Gambar Berhasil!";
            header('Location:home.php');
        } else {
            $_SESSION['status'] = "Update Data dan Gambar Gagal!";
            header('Location:home.php');
        }
    }
    
}

if(isset($_POST['add_wisata'])) {

    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $ket = $_POST['ket'];
    $harga = $_POST['harga'];
    $jam = $_POST['jam'];
    $resto = $_POST['restoran'];
    $masjid = $_POST['masjid'];
    $pom = $_POST['pom'];
    $hotel = $_POST['hotel'];
    $img = $_POST['imgName'];
    // $random_no = rand(1111,9999);

    // $new_image = $random_no.$img;
    
    // $storageClient = $storage->getStorageClient(['projectId' => '<my_project_id> ']);
    // $defaultBucket = $storage->getBucket();
    // $defaultBucket->upload(
    //     file_get_contents($_FILES['img']['tmp_name']),
    //     [
    //         'name' => $_FILES['img']['name']
    //     ]
    // );

    if (!$img) {
        $_SESSION['status'] = "Image Kosong!";
        header('Location:add_wisata.php');
        exit();
    } else {
        $postData = [
            'fnama'=>$nama,
            'flokasi'=>$lokasi,
            'fket'=>$ket,
            'fharga'=>$harga,
            'fjam'=>$jam,
            'fresto'=>$resto,
            'fmasjid'=>$masjid,
            'fpom'=>$pom,
            'fhotel'=>$hotel,
            'fimg'=>$img,
        ];
    
        $ref_table = "data_wisata";
        $postRef_result = $database->getReference($ref_table)->push($postData);
    
        if($postRef_result) {
            $_SESSION['status'] = "Tambah Data Berhasil!";
            header('Location:home.php');
        } else {
            $_SESSION['status'] = "Tambah Data Gagal!";
            header('Location:home.php');
        }
    }

}

    if(isset($_POST['add_blog'])) {

        $jdl = $_POST['judul'];
        $tgl = $_POST['tgl'];
        $konten = $_POST['konten'];
        $img = $_POST['imgName'];

        if(!$img) {
            $_SESSION['status'] = "Image Kosong!";
            header('Location:add_blog_wisata.php');
            exit();
        } else {
            $postData = [
                'fjudul'=>$jdl,
                'ftanggal'=>$tgl,
                'fkonten'=>$konten,
                'fgambar'=>$img,
            ];
    
            $ref_table = "blog_wisata";
            $postRef_result = $database->getReference($ref_table)->push($postData);
    
            if($postRef_result) {
                $_SESSION['status'] = "Tambah Data Berhasil!";
                header('Location:blog_wisata.php');
            } else {
                $_SESSION['status'] = "Tambah Data Gagal!";
                header('Location:blog_wisata.php');
            }
        }
        
    }

    if(isset($_POST['update_blog'])) {
    
        $key = $_POST['key'];
        $jdl = $_POST['judul'];
        $tgl = $_POST['tgl'];
        $konten = $_POST['konten'];
        $img = $_POST['img'];
        $imgUpdate = $_POST['imgName'];

        if (!$imgUpdate) {
            $updateData = [
                'fjudul'=>$jdl,
                'ftanggal'=>$tgl,
                'fkonten'=>$konten,
                'fgambar'=>$img,
            ];
        
            $ref_table = 'blog_wisata/'.$key;
            $updateRef_result = $database->getReference($ref_table)->update($updateData);
        
        
            if($updateRef_result) {
                $_SESSION['status'] = "Update Data Berhasil!";
                header('Location:blog_wisata.php');
            } else {
                $_SESSION['status'] = "Update Data Gagal!";
                header('Location:blog_wisata.php');
            }
        } else {
            $updateData = [
                'fjudul'=>$jdl,
                'ftanggal'=>$tgl,
                'fkonten'=>$konten,
                'fgambar'=>$imgUpdate,
            ];
        
            $ref_table = 'blog_wisata/'.$key;
            $updateRef_result = $database->getReference($ref_table)->update($updateData);
        
        
            if($updateRef_result) {
                $_SESSION['status'] = "Update Data dan Gambar Berhasil!";
                header('Location:blog_wisata.php');
            } else {
                $_SESSION['status'] = "Update Data dan Gambar Gagal!";
                header('Location:blog_wisata.php');
            }
        }
        
        
    }

    if(isset($_POST['hapus_blog'])) {

        $del_id = $_POST['hapus_id'];
    
        $ref_table = 'blog_wisata/'.$del_id;
        $hapusQuery = $database->getReference($ref_table)->remove();
    
    
        if($hapusQuery) {
            $_SESSION['status'] = "Menghapus Data Berhasil!";
            header('Location:blog_wisata.php');
        } else {
            $_SESSION['status'] = "Menghapus Data Gagal!";
            header('Location:blog_wisata.php');
        }
    }


?>