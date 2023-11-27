<?php
    include ("connection.php");
  
    $sql1 ="SELECT*FROM team ";
    $result1 = mysqli_query($conn,$sql1);
    $sql ="SELECT*FROM utilisateur ";
    $result = mysqli_query($conn,$sql);
    $sql2 ="SELECT*FROM projet ";
    $result2 = mysqli_query($conn,$sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<body class="bg-gradient-to-r from-white to-black">
    

<div class="flex flex-wrap ">
  
      <!-- navbar -->
      <nav class="flex justify-between bg-gray-900 text-white w-screen">
      <div class=" flex justify-between px-5 xl:px-12 py-6 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
          <!-- <img class="h-9" src="logo.png" alt="logo"> -->
          Logo Here
        </a>
        <div>
          <a href="alltables.php" class="text-2xl text-white "> All-data</a>
          <a href="alltables.php" class="text-2xl text-white "> Teams</a>
          <a href="alltables.php" class="text-2xl text-white "> Projet</a>

        </div>
       <a href="logout.php" class="text-3xl font-bold font-heading">Logout</a>
    </nav>
</div>
<br><br>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-600 bg-white ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 ">
                    team ID
                </th>
                <th scope="col" class="px-6 py-3">
                    team Name
                </th>
                <th scope="col" class="px-6 py-3">
                    team ScramMaster
                </th>
                <td class="px-6 py-3">Edite</td>
                <td class="px-6 py-3">Delete</td>
            </tr>
        </thead>
        <tr >
                            <?php
                            while ($row = mysqli_fetch_assoc($result1))
                            {
                        ?>
                            <td ><?php echo $row['teamID'];  ?></td>
                            <td><?php echo $row['teamName'];  ?></td>
                            <td><?php echo $row['tScramMaster'];  ?></td>
                            <td><a href="#" class="bg-sky-500 hover:bg-sky-700 text-white px-4 ">Edite</a></td>
                            <td><a href="#" class="bg-red-500 hover:bg-red-700 text-white px-4">Delete</a></td>
                        </tr>
                        <?php
                            }
                            
                            ?>
        
        
    </table>
</div>
<br>
<a href="ajouterTeam.php" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">ajouter un membre</a>
<br><br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-600 bg-white">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 ">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    role
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    PASSWORD
                </th>
                
                <td class="px-6 py-3">Edite</td>
                <td class="px-6 py-3">Delete</td>
            </tr>
        </thead>
        <tr>
                               <?php
                               while ($row = mysqli_fetch_assoc($result))
                               {
                            ?>
                                <td ><?php echo $row['iD'];  ?></td>
                                <td><?php echo $row['name'];  ?></td>
                                <td><?php echo $row['role'];  ?></td>
                                <td><?php echo $row['email'];  ?></td>
                                <td><?php echo $row['PASSWORD'];  ?></td>
                                <td><a href="#" class="bg-sky-500 hover:bg-sky-700 text-white px-4 ">Edite</a></td>
                                <td><a href="#" class="bg-red-500 hover:bg-red-700 text-white px-4">Delete</a></td>
                            </tr>
                            <?php
                               }
                               
                               ?>
        
        
    </table>
</div>
<br>
<a href="ajouterTeam.php" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">ajouter un membre</a>
<br><br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-600 bg-white">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 ">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    projet name
                </th>
                <th scope="col" class="px-6 py-3">
                    Discription
                </th>
                <th scope="col" class="px-6 py-3">
                    date de debut
                </th>
                <th scope="col" class="px-6 py-3">
                    date de fin
                </th>
                <th scope="col" class="px-6 py-3">
                   scram Master
                </th>
                
                <td class="px-6 py-3">Edite</td>
                <td class="px-6 py-3">Delete</td>
            </tr>
        </thead>
        <tr>
                               <?php
                               while ($row = mysqli_fetch_assoc($result2))
                               {
                            ?>
                                <td ><?php echo $row['iDP'];  ?></td>
                                <td><?php echo $row['projetName'];  ?></td>
                                <td><?php echo $row['discrption'];  ?></td>
                                <td><?php echo $row['dateDeDebut'];  ?></td>
                                <td><?php echo $row['dateDeFin'];  ?></td>
                                <td><?php echo $row['scramMaster'];  ?></td>
                                <td><a href="#" class="bg-sky-500 hover:bg-sky-700 text-white px-4 ">Edite</a></td>
                                <td><a href="#" class="bg-red-500 hover:bg-red-700 text-white px-4">Delete</a></td>
                            </tr>
                            <?php
                               }
                               
                               ?>
        
        
    </table>
</div>
</body>
</html>