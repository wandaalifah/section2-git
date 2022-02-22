<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Index | Website</title>
</head>
<body>
    <p>Selamat datang di halaman web.</p>
    <?php 
        define("GELANG",true);

        if(isset($_GET['p'])== false){
            $page = "beranda";
        }else{
            $page = $_GET['p'];
        }

        $file_to_open = $page.".php";

        if(file_exists($file_to_open)==false){
            $file_to_open = "404.php";
        }
        
        include_once $file_to_open;

    ?>
    <br><br>
    <a href="index.php?p=beranda">Beranda</a>
    <a href="index.php?p=profile">Profile</a>
    <a href="index.php?p=kontak">Kontak</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>