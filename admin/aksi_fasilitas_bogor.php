<?php
include('koneksi.php');
if ($_GET['aksi'] == 'input') {
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $fotobaru = date('Y-m-d') ."_". $nama ."_". $foto;
    $path = "images_fasilitas_bogor/" . $fotobaru;
    if ($nama != null and $keterangan != null and $foto != null) {
        if (move_uploaded_file($tmp, $path)) {
            $sql_input = "INSERT INTO `fasilitas_bogor` (`id`, `nama`, `foto`, `keterangan`) VALUES "
                    . "(NULL, '$nama', '$fotobaru', '$keterangan')";
            $simpan_input = mysql_query($sql_input);
            if ($simpan_input) {
                header("location:index.php?page=fasilitas_bogor");
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
    $keterangan = $_POST['keterangan'];
    $id = $_GET['id'];
    if ($foto != null) {
        $fotobaru = date('Y-m-d') . $nama . $foto;
        $path = "images_fasilitas_bogor/" . $fotobaru;
        if ($nama != null and $keterangan != null) {
            if (move_uploaded_file($tmp, $path)) {
                $sql_foto = "SELECT * from fasilitas_bogor WHERE id='$id'";
                $query_foto = mysql_query($sql_foto);
                $ambil_foto = mysql_fetch_array($query_foto);

                if (is_file("images_fasilitas_bogor/" . $ambil_foto['foto'])) {
                    unlink("images_fasilitas_bogor/" . $ambil_foto['foto']);
                }
                $sql_edit = "UPDATE fasilitas_bogor SET nama = '$nama',keterangan='$keterangan',foto='$fotobaru' WHERE id = '$id' ";
                $edit = mysql_query($sql_edit);
                if ($edit) {
                    header("location:index.php?page=fasilitas_bogor");
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
        if ($nama != null and $keterangan != null) {
            $sql_edit = "UPDATE fasilitas_bogor SET nama = '$nama',keterangan='$keterangan' WHERE id = '$id' ";
            $edit = mysql_query($sql_edit);
            if ($edit) {
                header("location:index.php?page=fasilitas_bogor");
            } else {
                echo "<script>alert('Gagal di edit!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Tidak Boleh Ada Yang Kosong!');history.go(-1);</script>";
        }
    }
} else if ($_GET['aksi'] == 'hapus') {

    $sql_foto = "SELECT * from fasilitas_bogor WHERE id='$id'";
    $query_foto = mysql_query($sql_foto);
    $ambil_foto = mysql_fetch_array($query_foto);

    if (is_file("images_fasilitas_bogor/" . $ambil_foto['foto'])) {
        unlink("images_fasilitas_bogor/" . $ambil_foto['foto']);
    }

    $sql_hapus = "DELETE FROM fasilitas_bogor WHERE id = '$_GET[id]'";
    if (mysql_query($sql_hapus)) {
        header("location:index.php?page=fasilitas_bogor");
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
}