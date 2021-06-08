<?php
include('auth.php');
include('src/header.php');
?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Dashboard</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                                if(isset($_SESSION['status'])) {
                                    echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
                                    unset($_SESSION['status']);
                                }
                            ?>
                            <!-- buttton tambah data -->
                        <div>
                        <h4>
                            <a href="add_blog_wisata.php" class="btn btn-primary" > Tambah Data </a>
                        </h4>
                        </div>
                        <!-- Akhir buttton tambah data -->
                            
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>Konten</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include('dbcon.php');
                                        $ref_table = "blog_wisata";
                                        $fetchdata = $database->getReference($ref_table)->getValue();

                                        if($fetchdata > 0) {
                                            $i=1;
                                            foreach($fetchdata as $key => $row) {
                                                ?>
                                                    <tr>
                                                        <td><?=$i++?></td>
                                                        <td><?=$row['fjudul'];?></td>
                                                        <td><?=$row['ftanggal'];?></td>
                                                        <td><?=$row['fkonten'];?></td>
                                                        <td><?=$row['fgambar'];?></td>
                                                        <td>
                                                            <button style="background-color: transparent;">
                                                                <a href="update_blog.php?id=<?=$key;?>" class="col-lg-4">
                                                                <span class="actionCust"> <i class="far fa-edit"></i> </span></a>
                                                            </button>
                                                            <form action="function.php" method="POST">
                                                                <input type="hidden" name="hapus_id" value="<?=$key;?>">
                                                                <button style="background-color: transparent;" type="submit" name="hapus_blog">
                                                                <a class="col-lg-4">
                                                                <span class="actionCust"> <i class="far fa-trash-alt"></i></span></a>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="?">NO Record </td>
                                            </tr>
                                            <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </main>
    </div>

<?php
include('src/footer.php');
?>
  