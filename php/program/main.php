<?php
session_start();
require('Baju.php');

// Create uploads directory if it doesn't exist
$upload_dir = "uploads/";
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Initialize session array if it doesn't exist
if (!isset($_SESSION['datapetshop'])) {
    $_SESSION['datapetshop'] = [];
    
    // Only add default items if the session is freshly created
    $list_baju = [
        new Baju("A001", "Jaket Anjing Sporty", "10", "Rp200.000", "uploads/default1.jpg", "Sport", "Waterproof", "Hitam", "Anjing", "L", "PetFashion"),
        new Baju("A002", "Sweater Kucing Cozy", "8", "Rp150.000", "uploads/default2.jpg", "Casual", "Wool", "Merah", "Kucing", "M", "CatStyle"),
        new Baju("A003", "Baju Kuda Elegan", "5", "Rp350.000", "uploads/default3.jpg", "Elegan", "Satin", "Putih", "Kuda", "XL", "Equine Couture"),
        new Baju("A004", "Rompi Hamster Mini", "8", "Rp50.000", "uploads/default4.jpg", "Mini", "Cotton", "Biru", "Hamster", "S", "TinyPets"),
        new Baju("A005", "Baju Reptil Stylish", "1", "Rp100.000", "uploads/default5.jpg", "Trendy", "Polyester", "Hijau", "Reptil", "M", "ReptileTrend")
    ];
    
    // Store serialized objects directly
    $_SESSION['datapetshop'] = array_map('serialize', $list_baju);
}

// Add new product
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];
    $bahan = $_POST['bahan'];
    $warna = $_POST['warna'];
    $untuk = $_POST['untuk'];
    $size = $_POST['size'];
    $merk = $_POST['merk'];
    
    // Handle file upload
    $urlFoto = "";
    if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES['foto']['name'];
        $filetype = $_FILES['foto']['type'];
        $filesize = $_FILES['foto']['size'];
        
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) {
            echo "Error: Format file tidak diizinkan.";
        } else {
            // Generate unique filename to prevent overwriting
            $newfilename = uniqid() . "." . $ext;
            $destination = $upload_dir . $newfilename;
            
            // Move uploaded file
            if(move_uploaded_file($_FILES['foto']['tmp_name'], $destination)) {
                $urlFoto = $destination;
            } else {
                echo "Error: Terjadi kesalahan saat mengupload file.";
                exit;
            }
        }
    } else {
        // If no file is uploaded, set to a default image
        $urlFoto = "uploads/no-image.jpg";
    }
    
    $baju = new Baju($id, $nama, $stok, $harga, $urlFoto, $jenis, $bahan, $warna, $untuk, $size, $merk);
    $_SESSION['datapetshop'][] = serialize($baju);
    
    // Redirect to prevent form resubmission
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Get data from session and unserialize for display
$datapetshop = array_map('unserialize', $_SESSION['datapetshop']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            background-color: #f4f4f4;
            padding: 15px;
            border-radius: 5px;
            width: 50%;
            margin-bottom: 20px;
        }
        input, button {
            display: block;
            margin: 5px 0;
            padding: 8px;
            width: 100%;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4a261;
        }
        img {
            max-width: 100px;
            max-height: 100px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h2>Tambah Produk Petshop</h2>
    <!-- Set enctype to multipart/form-data to enable file uploads -->
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>
        </div>
        
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        
        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" required>
        </div>
        
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="harga" required>
        </div>
        
        <div class="form-group">
            <label for="foto">Foto Produk:</label>
            <input type="file" id="foto" name="foto" accept="image/*" required>
        </div>
        
        <div class="form-group">
            <label for="jenis">Jenis:</label>
            <input type="text" id="jenis" name="jenis" required>
        </div>
        
        <div class="form-group">
            <label for="bahan">Bahan:</label>
            <input type="text" id="bahan" name="bahan" required>
        </div>
        
        <div class="form-group">
            <label for="warna">Warna:</label>
            <input type="text" id="warna" name="warna" required>
        </div>
        
        <div class="form-group">
            <label for="untuk">Untuk:</label>
            <input type="text" id="untuk" name="untuk" required>
        </div>
        
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" id="size" name="size" required>
        </div>
        
        <div class="form-group">
            <label for="merk">Merk:</label>
            <input type="text" id="merk" name="merk" required>
        </div>
        
        <button type="submit" name="add">Tambah</button>
    </form>

    <h2>Daftar Produk Petshop</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Foto Produk</th>
            <th>Jenis</th>
            <th>Bahan</th>
            <th>Warna</th>
            <th>Untuk</th>
            <th>Size</th>
            <th>Merk</th>
        </tr>
        <?php foreach ($datapetshop as $item): ?>
        <tr>
            <td><?= $item->getId(); ?></td>
            <td><?= $item->getNama(); ?></td>
            <td><?= $item->getStok(); ?></td>
            <td><?= $item->getHarga(); ?></td>
            <td><img src="<?= $item->getUrlFoto(); ?>" alt="<?= $item->getNama(); ?>"></td>
            <td><?= $item->getJenis(); ?></td>
            <td><?= $item->getBahan(); ?></td>
            <td><?= $item->getWarna(); ?></td>
            <td><?= $item->getUntuk(); ?></td>
            <td><?= $item->getSize(); ?></td>
            <td><?= $item->getMerk(); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>