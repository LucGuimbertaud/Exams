<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <main>
        <?php require('contents/ecolesList.php') ?>
        <form id="add_data">
            <input type="submit" value="Ajout de fake Data" id="submit"> 
        </form>
    </main>
</body>

</html>




<script>
$(function(){
    $('#submit').click(function(){
        $.ajax({
            url: './process/add_random_data.php',
            type: 'POST',
            success: function(data) { 
                /* alert("Données Ajoutés"); */
            },
            error: function() {
                /* alert("Error!"); */
            }
        });
    });
});
</script>
