<?php
require('process/db_connect.php');


$request = $db->prepare('SELECT nom, nbEleves, nb_Eleves_Sportif FROM Ecoles');
$request->execute();     

?>
<div class="row">
    <h3>Nom</h3>
    <h3>Nombre élèves</h3>
    <h3>Nombres d'élèves sportif</h3>
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
    <p>
    <?php
            print($row[2])
        ?>
    </p>
</div>
<?php        
    }    
?>