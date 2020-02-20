<?php
include('koneksi.php');
if ($_GET['aksi'] == 'input') {
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $komentar = $_POST['komentar'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $fotobaru = date('Y-m-d') ."_". $nama ."_". $foto;
    $path = "images_kesan/" . $fotobaru;
    if ($nama != null and $pekerjaan != null and $komentar != null and $foto != null) {
        if (move_uploaded_file($tmp, $path)) {
            $sql_input = "INSERT INTO `kesan` (`id`, `nama`, pekerjaan, komentar, `foto`) VALUES "
                    . "(NULL, '$nama', '$pekerjaan', '$komentar' , '$fotobaru')";
            $simpan_input = mysql_query($sql_input);
            if ($simpan_input) {
                header("location:index.php?page=kesan");
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
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
    $pekerjaan = $_POST['pekerjaan'];
    $id = $_GET['id'];
    if ($foto != null) {
        $fotobaru = date('Y-m-d') . $nama . $foto;
        $path = "images_kesan/" . $fotobaru;
        if ($nama != null and $komentar != null and $pekerjaan != null) {
            if (move_uploaded_file($tmp, $path)) {
                $sql_foto = "SELECT * from kesan WHERE id='$id'";
                $query_foto = mysql_query($sql_foto);
                $ambil_foto = mysql_fetch_array($query_foto);

                if (is_file("images_kesan/" . $ambil_foto['foto'])) {
                    unlink("images_kesan/" . $ambil_foto['foto']);
                }
                $sql_edit = "UPDATE kesan SET nama = '$nama',pekerjaan='$pekerjaan',foto='$fotobaru',komentar='$komentar' WHERE id = '$id' ";
                $edit = mysql_query($sql_edit);
                if ($edit) {
                    header("location:index.php?page=kesan");
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
        if ($nama != null and $komentar != null and $pekerjaan != null) {
            $sql_edit = "UPDATE kesan SET nama = '$nama',pekerjaan='$pekerjaan',komentar='$komentar' WHERE id = '$id' ";
                $edit = mysql_query($sql_edit);
            if ($edit) {
                header("location:index.php?page=kesan");
            } else {
                echo "<script>alert('Gagal di edit!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Tidak Boleh Ada Yang Kosong!');history.go(-1);</script>";
        }
    }
} else if ($_GET['aksi'] == 'hapus') {

    $sql_foto = "SELECT * from kesan WHERE id='$id'";
    $query_foto = mysql_query($sql_foto);
    $ambil_foto = mysql_fetch_array($query_foto);

    if (is_file("images_kesan/" . $ambil_foto['foto'])) {
        unlink("images_kesan/" . $ambil_foto['foto']);
    }

    $sql_hapus = "DELETE FROM kesan WHERE id = '$_GET[id]'";
    if (mysql_query($sql_hapus)) {
        header("location:index.php?page=kesan");
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
}