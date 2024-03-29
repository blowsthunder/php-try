<?php
    include("include/connectData.php");
    try {
        $sql ="SELECT * FROM users";
        $stat = $db->prepare($sql);
        $stat->execute();
        $Users = $stat->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $err) {
        echo "Error".$err;
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
    <h2>Hello my name is <?= $Users['nom']?> and the last name is <?= $Users['prenom']?></h2>
</body>
</html>