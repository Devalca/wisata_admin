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
                        Tambah Data Wisata
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
                            <form enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label class="form-label" for="">Gambar</label>
                                <input type="file" class="form-control" id="img"/>
                                <br>
                                <button class="btn btn-primary float-end" type="button" onclick="uploadBlog()">
                                Simpan Gambar
                            </button>
                            </div>
                            </form>
                            <form action="function.php" method="POST" enctype="multipart/form-data">
                                <input disabled id="imgFake" name="imgFake" value="<?=$fake?>" /><a> Status File</a>
                                <input type="hidden" id="imgName" name="imgName" value="<?=$real?>" />
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Judul</label>
                                        <input type="text" name="judul" class="form-control">
                                    </div>
                                    </div>
                                    <div class="col">
                                    <div class="form-group mb-3">
                                        <label for="">Tanggal</label>
                                        <input type="Date" name="tgl" class="form-control">
                                    </div>
                                    </div>
                                </div>
                                    <div class="form-group mb-3">
                                        <label for="">Konten</label>
                                        <textarea class="form-control" name="konten" rows="10"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" name="add_blog" class="btn btn-primary float-end">Simpan Data</button>
                                    </div>
                                </form>
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
  