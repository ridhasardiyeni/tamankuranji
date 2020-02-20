<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Kesan</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php
                    include 'koneksi.php';
                    $isi = isset($_GET['isi']) ? $_GET['isi'] : 'list';
                    switch ($isi) {
                        case 'list' :
                            ?>
                            <a href="?page=kesan&isi=entri"><button type="button" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-plus"></span>
                                    <span class="glyphicon-class">Tambah Data</span></button></a>
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <br/>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Pekerjaan</th>
                                        <th>Foto</th>
                                        <th>Komentar</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql_data = "SELECT * from kesan";
                                    $ambil_data = mysql_query($sql_data);
                                     $no = 1;
                                    while ($data = mysql_fetch_array($ambil_data)) {
                                       
                                        ?>
                                        <tr>
                                            <td><?php echo $no; ?> </td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo $data['pekerjaan']; ?></td>
                                            <?php echo "<td><img src='images_kesan/" . $data['foto'] . "' width='140' height='100'></td>"; ?>
                                            <td><?php echo $data['komentar']; ?></td>
                                            <td><a href="?page=kesan&isi=edit&id=<?php echo $data['id'] ?>"><button class="btn btn-block btn-info"><span class="glyphicon glyphicon-edit"></span>Edit</button></a></td>
                                            <td><a href="aksi_kesan.php?aksi=hapus&id=<?php echo $data['id'] ?>" onclick="return confirm('Yakin akan menghapus data ?')"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button></a> </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <?php
                            break;
                        case 'entri' :
                            ?>
                            <form id="form1" name="form1" method="POST" action="aksi_kesan.php?aksi=input" class="form-horizontal" role="form" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan" name="pekerjaan">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="InputFile">File foto</label>
                                        <input type='file' class="form-control" name="foto" id ="foto"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="komentar">Komentar</label>
                                        <input type="text" class="form-control" id="komentar" placeholder="Komentar" name="komentar">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="input">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            break;
                        case 'edit' :
                            $sql_edit = "SELECT * from kesan WHERE id='$_GET[id]'";
                            $ambil_edit = mysql_query($sql_edit);
                            $data_edit = mysql_fetch_array($ambil_edit);
                            ?>
                            <form id="form1" name="form1" method="POST" action="aksi_kesan.php?aksi=edit&id=<?php echo $_GET['id']; ?>" class="form-horizontal" role="form" enctype="multipart/form-data">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?php echo $data_edit['nama']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan" name="pekerjaan" value="<?php echo $data_edit['pekerjaan']; ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="InputFile">File foto</label>
                                        <input type="file" id="InputFile" name="foto">
                                    </div>
                                    <div class="form-group">
                                        <label for="komentar">Komentar</label>
                                        <input type="text" class="form-control" id="komentar" placeholder="Komentar" name="komentar" value="<?php echo $data_edit['komentar']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="input">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            break;
                    }
                    ?>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
