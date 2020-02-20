<?php    
    
    /*
     * Get detail peserta
     * Agumen pertama adalah nomor peserta
    */
    function getDetail ($namapeserta) {
        $connect = $GLOBALS['connect'];
        $tp = $GLOBALS['tp'];
        $query = "SELECT * FROM ppdb_peserta WHERE nama_panjang = '$namapeserta' AND tp = '$tp'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * Get detail siswa kelas
     * Agumen pertama adalah nis
    */
    function getClass ($idsiswa) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM base_data_kelas WHERE nis = '$idsiswa'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * Get detail siswa ayah
     * Agumen pertama adalah nis
    */
    function getAyah ($idsiswa) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM base_data_ayah WHERE nis = '$idsiswa'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * menampilkan hasil catatan guru
     * terhadapsiswa sesuai aspe
     * membutuhkan dua buah argumen
     * 1. Nis 2. informasi_id
    */
    function getInformasiBk ($nis,$informasiId){
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM bk_kar_perkembangan WHERE nis = '$nis' AND  inf_id = '$informasiId' ORDER BY id_pencatatan DESC LIMIT 3";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    
?>