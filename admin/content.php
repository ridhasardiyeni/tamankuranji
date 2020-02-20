<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    if ($page == 'produk')
        include 'produk.php';
    if ($page == 'produk_bogor')
        include 'produk_bogor.php';
    if ($page == 'galeri')
        include 'galeri.php';
    if ($page == 'galeri_bogor')
        include 'galeri_bogor.php';
    if ($page == 'video')
        include 'video.php';
    if ($page == 'video_bogor')
        include 'video_bogor.php';
    if ($page == 'home') 
        include 'home.php';
    if ($page == 'fasilitas')
        include 'fasilitas.php';
    if ($page == 'fasilitas_bogor')
        include 'fasilitas_bogor.php';
    if ($page == 'artikel')
        include 'artikel.php';
    if ($page == 'artikel_bogor')
        include 'artikel_bogor.php';
    if ($page == 'user') 
        include 'user.php';
    if ($page == 'kesan') 
        include 'kesan.php';
?>
