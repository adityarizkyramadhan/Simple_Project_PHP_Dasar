<?php
    $nama_dosen = $_POST["nama"];
    $umur_dosen = $_POST["umur"];
    $nip_dosen = $_POST["nip"];
    $alamat_dosen = $_POST["alamat"];
    $email_dosen = $_POST["email"];
    $no_hp_dosen = $_POST["no_hp"];
    $password_dosen = $_POST["password"];
    if ($nama_dosen == null || $umur_dosen == null || $nip_dosen == null || $alamat_dosen == null || $email_dosen == null || $no_hp_dosen == null || $password_dosen == null) {
        echo "alert('Data tidak boleh kosong');";
        header("Location: index.php");
    }
    $querry = "INSERT INTO `dosen` (nama,nip,password_dosen,email,no_hp,alamat,umur) VALUES ('$nama_dosen','$nip_dosen','$password_dosen','$email_dosen','$no_hp_dosen','$alamat_dosen','$umur_dosen')";
    include '../../config/db_conn.php';
    $res = $conn->query($querry);
    mysqli_close($conn);
    if ($res){
        echo "alert('Data berhasil ditambahkan');";
        header("Location:../admin_home_page.php?page=dosen");
    }else{
        echo "alert('Data gagal ditambahkan');";
        header("Location: ../admin_home_page.php?page=dosen");
    }
?>