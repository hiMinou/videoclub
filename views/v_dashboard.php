<?php
   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashbord.css">
    <title>LeVideoClub</title>
</head>
<body>
<table>
                <thead>
                    <?php foreach ($columns as $key=>$row) { ?>

                        <th><?php echo $row; ?>
                            <a href="index.php?orderBy=<?php echo $row; ?>&Direction=ASC" class="up">🔼</a>
                            <a href="index.php?orderBy=<?php echo $row; ?>&Direction=DESC" class="down">🔽</a>

                        </th>
                    <?php } ?>


                </thead>
                <tbody>

                <?php foreach ($data as $key=>$row){ ?>
                    <tr>
                        <td><?php echo $row['id']; ?> </td>
                        <td><?php echo $row['nom']; ?> </td>
                        <td><?php echo $row['annee']; ?> </td>
                        <td><?php echo $row['score']; ?> </td>
                        <td><?php echo $row['nbVotant']; ?> </td>



                    </tr>
                <?php } ?>
                </tbody>

        </table>
</body>
</html>
            
<?php
   
    $query->closeCursor();

?>