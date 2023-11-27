<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <div>
            <?php
    while ($row = mysqli_fetch_assoc($result1))
    {
    ?>
        <?php echo $row['teamID'];  ?>
        <?php echo $row['teamName'];  ?>
        <?php echo $row['tScramMaster'];  ?>
        <a href="#" class="bg-sky-500 hover:bg-sky-700 text-white px-4 ">Edite</a>
        <a href="#" class="bg-red-500 hover:bg-red-700 text-white px-4">Delete</a>
    <?php
    }
    
    ?>
    </div>

</div>
</body>
</html>