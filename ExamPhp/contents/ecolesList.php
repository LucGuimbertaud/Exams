<?php
require('process/db_connect.php');


$request = $db->prepare('SELECT nom, nbEleves FROM Ecoles');
$request->execute();     

?>
<div class="row">
    <h3>Nom</h3>
    <h3>Nombre élèves</h3>
</div>
<?php
while($row = $request->fetch()){
        ?>
<div class="row">
    <h3>
        <?php
            print($row[0])  
        ?>
    </h3>
    <p>
        <?php
            print($row[1])
        ?>
    </p>
</div>
<?php        
    }    
?>