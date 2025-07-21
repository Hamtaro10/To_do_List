<?php

    function waktu(){
        $jam = date('G'); // Parameter G untuk menampilkan waktu dalam format 24 jam

        if ($jam >= 5 && $jam < 12 ){
            return "Pagi";
        } elseif ($jam >= 12 && $jam < 18){
            return "Sore";
        } else {
            return "Malam";
        }

    }

    function welcome($waktu, $nama){

        return "Selamat $waktu, $nama!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Todo List</title>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>
<body>
    <nav class="nav-right">
        <ul>
            <li>Profile</li>
        </ul>
    </nav>

</body>
</html>