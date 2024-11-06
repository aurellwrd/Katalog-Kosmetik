<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>glowbeauty</title>
</head>
<body>
    <form action="" enctype="multipart/form-data" method="POST" >
        <!-- input nama single line text input  --> 
        Jenis
        <select name="Jenis" id="">
            <option value="0">--Pilih Jenis--</option>
            <option value="1">MAKE UP</option>
            <option value="2">SKINCARE</option>
        </select><br/>
         Nama Brand : <input type="text" name="nama" value=""/><br/>
         Id Brand : <input type="number" name="nis" id=""><br/>
        Kategori
        <select name="kategori" id="">
            <option value="0">--Pilih Kategori--</option>
            <option value="1">Face</option>
            <option value="2">Eyes</option>
            <option value="2">Lips</option>
            <option value="2">Skin</option>
        </select><br/>
        Nama Produk : <input type="text" name="nama" value=""/><br/>
        Id Produk : <input type="number" name="nis" id=""><br/>
        Expired : <input type="date" name="EXPIRED" id=""><br/>
        Alamat : <textarea name="Alamat" id="" cols="30" rows="10"></textarea><br/>
        No Telp : <input type="number" name="no_telp" id=""><br/>
        Foto : <input type="file"><br/>
        <input type="submit" name="submit" value="kirim">
    </form>
</body>
</html>