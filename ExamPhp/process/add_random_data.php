<?php
require ('db_connect.php');

$elevesEcole1 = random_int(200, 800);
$elevesEcole2 = random_int(200, 800);
$elevesEcole3 = random_int(200, 800);



/* Reset Eleves table */
$sql = "DELETE FROM Eleves";
$send = $db->prepare($sql);
$send->execute(); 

/* Adding Eleves to table with sport and School */
for ($i=1; $i <=3  ; $i++) { 
    $x = 0;
    while ($x <= ${'elevesEcole' .$i}) {
        $rand_sportId = random_int(0, 5);
        $sql = "INSERT INTO Eleves (ecole_Id, sport_Id) VALUES ($i, $rand_sportId)";
        $send = $db->prepare($sql);
        $send->execute();
        $x++;
    }
}




/* Add the ramdom number of students in Ecoles */
$sql = "UPDATE Ecoles SET nbEleves = (case  when id = 1 then $elevesEcole1
                                            when id = 2 then $elevesEcole2
                                            when id = 3 then $elevesEcole3
                                        end)";
$send = $db->prepare($sql);
$send->execute(); 
?>