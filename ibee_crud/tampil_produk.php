<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/produk.css">
    <title>CRUD | ibee</title>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- header navbar -->
    <?php include("navbar.php"); ?>
    <br><br><br>
    <!-- Kode Utama/Tabel -->
    <div class="container-fluid p-2">
        <table class="table table-hover"> 
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <?php
                // buka koneksi dengan MySQL
                include("connection.php");
        
                // siapkan query untuk menampilkan seluruh data dari tabel mahasiswa
                $query = "SELECT * FROM produk ORDER BY id ASC";
                // jalankan query
                $result = mysqli_query($link, $query);
                
                if(!$result){
                    die ("Query Error: ".mysqli_errno($link).
                        " - ".mysqli_error($link));
                }
                
                //buat perulangan untuk element tabel dari data mahasiswa
                while($data = mysqli_fetch_assoc($result))
                { 
                echo "<tr>";
                echo "<td>$data[id]</td>";
                echo "<td>$data[nama_produk]</td>";
                echo "<td>$data[keterangan]</td>";
                echo "<td>$data[harga]</td>";
                echo "<td>$data[jumlah]</td>";
                echo "</tr>";
                }
                
                // bebaskan memory 
                mysqli_free_result($result);
                
                // tutup koneksi dengan database mysql
                mysqli_close($link);
            ?>
        </table>
    </div>
            
    <!-- Footer Section -->
    <?php include("footer.php");?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>