 <?php
include 'connection.php';
if(!empty($_SESSION["iD"])){
    $iD=$_SESSION["iD"];
    $result=mysqli_query($conn,"SELECT*FROM utilisateur WHERE iD=$iD");
    $row= mysqli_fetch_assoc($result);

}
else{
    header("Location:index.php");
}

?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="flex justify-between bg-gray-900 text-white w-screen">
    <ul>
        <li><a href="accueil.php">Accueil</a></li>
        <?php if ($_SESSION['role'] === 'product Owner') : ?> 
            <li><a href="alltabels.php">All data</a></li>
        <?php elseif ($_SESSION['role'] === 'Scram Master') : ?>
            <li><a href="alltabels.php">Tableau de bord Scrum Master</a></li>
            <li><a href="myteam.php">Gérer l'équipe</a></li>
        <?php else : ?>
            <li><a href="tableau_de_bord_utilisateur.php">Tableau de bord Utilisateur</a></li>
        <?php endif; ?>
        <li><a href="logout.php">Log-out</a></li>
    </ul> 
</nav>
</body>
</html>