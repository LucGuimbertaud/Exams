<?php
require ('db_connect.php');

$elevesEcole1 = random_int(200, 800);
$elevesEcole2 = random_int(200, 800);
$elevesEcole3 = random_int(200, 800);



/* Reset Eleves table */
$sql = "TRUNCATE TABLE Eleves";
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
/* Get number of student who are doing sport and inject in Ecoles*/
for ($i=0; $i<3; $i++){
    $sql = "SELECT COUNT(*) FROM Eleves WHERE ecole_Id = ($i+1) & sport_Id != 0";
    $request = $db->prepare($sql);
    $request->execute();
    $row = $request->fetch();
    $nb_eleves_sportif = $row[0];

    if($i==0){
        $sql = "UPDATE Ecoles SET nb_Eleves_Sportif = $nb_eleves_sportif WHERE id = 1";
    }
    if($i==1){
        $sql = "UPDATE Ecoles SET nb_Eleves_Sportif = $nb_eleves_sportif WHERE id = 2";
    }
    if($i==2){
        $sql = "UPDATE Ecoles SET nb_Eleves_Sportif = $nb_eleves_sportif WHERE id = 3";
    }
    
    $send = $db->prepare($sql);
    $send->execute(); 
}
?>