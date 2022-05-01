<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Data dosen</title>
</head>
<body>
    <div>
        <div>
            <a href="?page=dosen&action=add" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Tambah Data</a>
            <?php
                if (isset($_GET['action'])){
                    $action = $_GET['action'];
                    if ($action == 'add'){
                        header('Location: dosen/add.php');
                    }
                }
            ?>
        </div>
        <div>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">NIP</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">No. HP</th>
                        <th class="px-4 py-2">Alamat</th>
                        <th class="px-4 py-2">Umur</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "../config/db_conn.php";
                        $query = "SELECT * FROM dosen";
                        $result = $conn->query($query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td class='border px-4 py-2'>".$row['nama']."</td>";
                            echo "<td class='border px-4 py-2'>".$row['nip']."</td>";
                            echo "<td class='border px-4 py-2'>".$row['email']."</td>";
                            echo "<td class='border px-4 py-2'>".$row['no_hp']."</td>";
                            echo "<td class='border px-4 py-2'>".$row['alamat']."</td>";
                            echo "<td class='border px-4 py-2'>".$row['umur']."</td>";
                            echo "<td class='border px-4 py-2'>
                                    <a href='?page=dosen&action=delete&id=".$row['id_dosen']."' class='text-red-500 hover:text-red-700'>Delete</a>
                                </td>";
                            echo "</tr>";
                        }
                        if (isset($_GET['action'])){
                            $action = $_GET['action'];
                            if ($action == 'delete'){
                                $id = $_GET['id'];
                                $query = "DELETE FROM dosen WHERE id_dosen = '$id'";
                                $result = $conn->query($query);
                                if (mysqli_affected_rows($conn)==1){
                                    echo '<script>window.location.href = "admin_home_page.php?page=dosen";
                                    alert("Data berhasil dihapus");</script>';
                                }else{
                                    echo '<script>window.location.href = "admin_home_page.php?page=dosen";
                                    alert("Data gagal dihapus");</script>';
                                }
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

