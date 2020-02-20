<?php
include('koneksi.php');
if ($_GET['aksi'] == 'input') {
    $judul = $_POST['judul'];
    $alamat = $_POST['alamat'];
    $tipe = $_POST['tipe'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $fotobaru = date('Y-m-d') ."_". $judul ."_". $foto;
    $path = "images_rumah/" . $fotobaru;
    if ($judul != null and $alamat != null and $tipe != null and $foto != null) {
        if (move_uploaded_file($tmp, $path)) {
            $sql_input = "INSERT INTO `rumah` (`id`, `judul`, alamat, tipe, `foto`) VALUES "
                    . "(NULL, '$judul', '$alamat', '$tipe' , '$fotobaru')";
            $simpan_input = mysql_query($sql_input);
            if ($simpan_input) {
                header("location:index.php?page=produk");
            } else {
                echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Foto Gagal di upload!');history.go(-1);</script>";
        }
    } else {
        echo "<script>alert('Tidak Boleh Ada yang kosong!');history.go(-1);</script>";
    }
} else if ($_GET['aksi'] == 'edit') {
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $judul = $_POST['judul'];
    $tipe = $_POST['tipe'];
    $alamat = $_POST['alamat'];
    $id = $_GET['id'];
    if ($foto != null) {
        $fotobaru = date('Y-m-d') . $judul . $foto;
        $path = "images_rumah/" . $fotobaru;
        if ($judul != null and $tipe != null and $alamat != null) {
            if (move_uploaded_file($tmp, $path)) {
                $sql_foto = "SELECT * from rumah WHERE id='$id'";
                $query_foto = mysql_query($sql_foto);
                $ambil_foto = mysql_fetch_array($query_foto);

                if (is_file("images_rumah/" . $ambil_foto['foto'])) {
                    unlink("images_rumah/" . $ambil_foto['foto']);
                }
                $sql_edit = "UPDATE rumah SET judul = '$judul',alamat='$alamat',foto='$fotobaru',tipe='$tipe' WHERE id = '$id' ";
                $edit = mysql_query($sql_edit);
                if ($edit) {
                    header("location:index.php?page=produk");
                } else {
                    echo "<script>alert('Gagal di edit!');history.go(-1);</script>";
                }
            } else {
                echo "<script>alert('Foto Gagal di upload!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Tidak Boleh Ada Yang Kosong!');history.go(-1);</script>";
        }
    } else {
        if ($judul != null and $tipe != null and $alamat != null) {
            $sql_edit = "UPDATE rumah SET judul = '$judul',alamat='$alamat',tipe='$tipe' WHERE id = '$id' ";
                $edit = mysql_query($sql_edit);
            if ($edit) {
                header("location:index.php?page=produk");
            } else {
                echo "<script>alert('Gagal di edit!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Tidak Boleh Ada Yang Kosong!');history.go(-1);</script>";
        }
    }
} else if ($_GET['aksi'] == 'hapus') {

    $sql_foto = "SELECT * from produk WHERE id='$id'";
    $query_foto = mysql_query($sql_foto);
    $ambil_foto = mysql_fetch_array($query_foto);

    if (is_file("images_rumah/" . $ambil_foto['foto'])) {
        unlink("images_rumah/" . $ambil_foto['foto']);
    }

    $sql_hapus = "DELETE FROM rumah WHERE id = '$_GET[id]'";
    if (mysql_query($sql_hapus)) {
        header("location:index.php?page=produk");
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
}