<?php
include('auth.php');
include('src/header.php');
$fake = isset($_POST['imgFake']);
$real = isset($_POST['imgName']);
?>

    <div id="layoutSidenav_content">
        <main>
        <div class="container-fluid">
                <div class="row">
                    <h3>
                        Update Data Wisata
                    </h3>
                    <br>
                    <div class="col-md-12">
                        <?php
                            if(isset($_SESSION['status'])) {
                                echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                                unset($_SESSION['status']);
                            }
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <a href="home.php" class="btn btn-danger float-end">Kembali</a>
                            </div>
                            <div class="card-body">
                            <?php
                            include('dbcon.php');
                            if(isset($_GET['id'])) {
                                $key_child = $_GET['id'];

                                $ref_table = "data_wisata";
                                $getData = $database->getReference($ref_table)->getChild($key_child)->getValue();

                                if($getData > 0) {

                                ?>
                                <form enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="">Gambar</label>
                                    <input type="file" class="form-control" id="img"/>
                                    <br>
                                    <button class="btn btn-primary float-end" type="button" onclick="upload()">
                                    Simpan Gambar
                                </button>
                                </div>
                                </form>
                                <form action="function.php" method="POST" enctype="multipart/form-data">
                                <input disabled id="imgFake" name="imgFake" value="<?=$fake?>" /><a> Status File</a>
                                <input type="hidden" id="imgName" name="imgName" value="<?=$real?>" />
                                <br>
                                <br>
                                <input type="hidden" name="key" value="<?=$key_child;?>">
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Nama Tempat</label>
                                        <input type="text" name="nama" value="<?=$getData['fnama'];?>" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Lokasi</label>
                                        <input type="text" name="lokasi" value="<?=$getData['flokasi'];?>" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Jam Oprasional</label>
                                        <input type="text" name="jam" value="<?=$getData['fjam'];?>" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Harga</label>
                                        <input type="number" name="harga" value="<?=$getData['fharga'];?>" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Penginapan</label>
                                        <input type="text" name="hotel" value="<?=$getData['fhotel'];?>" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Restoran</label>
                                        <input type="text" name="restoran" value="<?=$getData['fresto'];?>" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Masjid</label>
                                        <input type="text" name="masjid" value="<?=$getData['fmasjid'];?>" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Pom Bensin</label>
                                        <input type="text" name="pom" value="<?=$getData['fpom'];?>" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                    <div class="form-group mb-3">
                                        <label for="">Keterangan</label>
                                        <textarea class="form-control" value="<?=$getData['fket'];?>" name="ket" rows="10"><?=$getData['fket'];?></textarea>
                                    </div>                                    
                                    <div class="form-group mb-3">
                                    <label for="">Jika Ingin Update Gambar Silahkan Lakukan Upload Ulang pada Form di Atas!</label>
                                        <input type="hidden" name="img" value="<?=$getData['fimg'];?>" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" name="update_wisata" class="btn btn-primary float-end">Update Data</button>
                                    </div>
                                </form>
                                <?php
                                } else {
                                    $_SESSION['status'] = "gagal id";
                                    header('Location:index.php');
                                    exit();
                                }
                            } else {
                            $_SESSION['status'] = "tidak ada";
                                header('Location:index.php');
                                exit();
                            }
                            ?>
                            </div>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </main>
    </div>

<?php
include('src/footer.php');
?>
  