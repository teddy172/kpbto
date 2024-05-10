<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel mysql</title>
</head>
<body>
    <div>
        <?php
            if(DB::connection()->getPdo()){
                echo "berhasil tersambung ke- ".DB::connection()->getDatabaseName();
            }
        ?>
    </div>    
<body>