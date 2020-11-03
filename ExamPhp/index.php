<?php require('process/db_connect.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <main>
        <?php
                $request = $db->prepare('SELECT nom FROM Ecoles');
                $request->execute();           
                while($row = $request->fetch()){
                    ?>
        <div>
            <h3>
                <?php
                              print($row[0])  
                            ?>
            </h3>
        </div>
        <?php        
                }    
            ?>
    </main>
</body>

</html>