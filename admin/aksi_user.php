<?php

include('koneksi.php');
if ($_GET['aksi'] == 'input') {
    $nama = $_POST['nama'];
    $password = md5($_POST['password']);
    if ($nama != null and $password != null) {
        $sql_input = "INSERT INTO `user` (`id`, `nama`, `password`) VALUES "
                . "(NULL, '$nama', '$password')";
        $simpan_input = mysql_query($sql_input);
        if ($simpan_input) {
            header("location:index.php?page=user");
        } else {
            echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>";
        }
    } else {
        echo "<script>alert('Tidak Boleh Ada yang kosong!');history.go(-1);</script>";
    }
} else if ($_GET['aksi'] == 'edit') {
    $nama = $_POST['nama'];
    $password = md5($_POST['password']);
    $id = $_GET['id'];
    if ($password != null) {
        if ($nama != null) {
                $sql_edit = "UPDATE user SET nama = '$nama',password='$password' WHERE id = '$id' ";
                $edit = mysql_query($sql_edit);
                if ($edit) {
                    header("location:index.php?page=user");
                } else {
                    echo "<script>alert('Gagal di edit!');history.go(-1);</script>";
                }
        } else {
            echo "<script>alert('Tidak Boleh Ada Yang Kosong!');history.go(-1);</script>";
        }
    } else {
        if ($nama != null) {
            $sql_edit = "UPDATE user SET nama = '$nama' WHERE id = '$id' ";
            $edit = mysql_query($sql_edit);
            if ($edit) {
                header("location:index.php?page=user");
            } else {
                echo "<script>alert('Gagal di edit!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Tidak Boleh Ada Yang Kosong!');history.go(-1);</script>";
        }
    }
} else if ($_GET['aksi'] == 'hapus') {

    $sql_hapus = "DELETE FROM user WHERE id = '$_GET[id]'";
    if (mysql_query($sql_hapus)) {
        header("location:index.php?page=user");
    } else {
        echo "Error deleting record: " . mysqli_error($koneksi);
    }
}