<?php

$name="Muhammad Reyhan Rizki Ferdiyan";
date_default_timezone_set('Asia/Jakarta');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.min.css">
    <title>TeamTreeHouse <?php echo $name; ?></title>
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-dark">
                <div class="d-fluid flex-column m-5">
                    <img class="align-self-center" src="asset/images/logooo.png" alt="logo" width="90px">
                </div>
                
                <div class="d-flex flex-column m-5">
                    <p class="h2 text-light"><?php echo $name; ?></p>
                </div>
            </div>
            
            <div class="content col-lg-8 vh-100">
                <div class="d-flex flex-column border">
                    <p class="h2 pt-4 pl-5">My first page PHP</p>

                    <selection class="pl-5">
                        <p class="h2"><u>Unit</u></p>
                        <?php include "inc/units.php"; ?>
                        <p class="lead"><?php echo celciusToFahrenheit(80); ?> </p>
                    </selection>    

                    <selection class="pl-5">
                        <p class="h2"><u>String</u></p>
                        <?php include "inc/string.php"; ?>
                        <p class="lead"><?php echo $name; ?> </p>
                    </selection>    
                </div>

                <div class="d-flex flex-column border">
                    <p class="h2">Body Element</p>
                </div>

                <div class="d-flex flex-column position-absolute fixed-bottom bg-primary">
                    <p class="mx-auto d-blok">&copy; <?php echo $name; echo "lasd modified:" .date("F d Y H:i:s",getlastmod()) ?>;</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="asset/js/jquery-3.5.1.full.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>

</body>
</html>