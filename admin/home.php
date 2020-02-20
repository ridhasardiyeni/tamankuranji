<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Galeri</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php
                    include 'koneksi.php';
                    ?>

                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <br/>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Keterangan</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql_data = "SELECT * from galeri";
                            $ambil_data = mysql_query($sql_data);
                            $no = 1;
                            while ($data = mysql_fetch_array($ambil_data)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?> </td>
                                    <td><?php echo $data['title']; ?></td>
                                    <?php echo "<td><img src='images/" . $data['foto'] . "' width='140' height='100'></td>"; ?>
                                    <td><?php echo $data['keterangan']; ?></td>
                                    
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Produk</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example6" class="table table-bordered table-striped table-hover">
                        <br/>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Alamat</th>
                                <th>Tipe</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql_data = "SELECT * from rumah";
                            $ambil_data = mysql_query($sql_data);
                            $no = 1;
                            while ($data = mysql_fetch_array($ambil_data)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?> </td>
                                    <td><?php echo $data['judul']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['tipe']; ?></td>
                                    <?php echo "<td><img src='images_rumah/" . $data['foto'] . "' width='140' height='100'></td>"; ?>
                                    
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Fasilitas</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    <table id="example3" class="table table-bordered table-striped table-hover">
                        <br/>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>keterangan</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql_data = "SELECT * from fasilitas";
                            $ambil_data = mysql_query($sql_data);
                            $no = 1;
                            while ($data = mysql_fetch_array($ambil_data)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?> </td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <?php echo "<td><img src='images_fasilitas/" . $data['foto'] . "' width='140' height='100'></td>"; ?>
                                    <td><?php echo $data['keterangan']; ?></td>
                                    
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Video</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">


                    <table id="example4" class="table table-bordered table-striped table-hover">
                        <br/>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>url</th>
                                <th>keterangan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql_data = "SELECT * from video";
                            $ambil_data = mysql_query($sql_data);
                            $no = 1;
                            while ($data = mysql_fetch_array($ambil_data)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?> </td>
                                    <td><?php echo $data['title']; ?></td>
                                    <td><a href="<?php echo $data['url']; ?>"><?php echo $data['url']; ?></a></td>
                                    <td><?php echo $data['keterangan']; ?></td>
                                    
                                </tr>
                                <?php
                                $no++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

           

        </div>
    </div>
</section>
