<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Total Harga Photocopy</title>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Photocopy bungaaaa</h2>
    <form method="post" action="" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="lembar" class="form-label">Jumlah Lembar Photocopy :</label>
        <input type="number" class="form-control" name="lembar" >
    </div>
        
    <div class="mb-3">
        <label for="langganan" class="form-label">Anda seorang langganan atau tidak ?</label>
        <select class="form-select" name="langganan">
            <option selected value="0" >--Pilih--</option>
                <option value="1">YA</option>
                <option value="2">TIDAK</option>
        </select>
    </div>
       
        <div class="mb-3">
        <input type="submit" value="HITUNG" class="btn btn-primary" name="submit">
        </div>
    </form>

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $X = (int)$_POST["lembar"];
        $langganan = $_POST["langganan"]; 

        
        if ($langganan == "1") {  
            $harga_per_lembar = 75;
        } else {
            $harga_per_lembar = ($X < 100) ? 100 : 85;
        }

    
        $total_harga = $X * $harga_per_lembar;


        echo "<h3>Photocopy bungaaaa</h3>";   
        echo "<table class='table table-bordered'>";
        echo "<tr><th>Jumlah </th><td>{$X}</td></tr>";
        echo "<tr><th>Langganan</th><td>" . ($langganan == "1" ? "YA" : "TIDAK") . "</td></tr>";
        echo "<tr><th>Harga per Lembar</th><td>Rp. {$harga_per_lembar}</td></tr>";
        echo "<tr><th>Total Harga</th><td>Rp. {$total_harga}</td></tr>";
        echo "</table>";
    }
    ?>
    </div>
    </div>
    </div>
</body>
</html>