<?php

$imena = ["Toma", "Petar", "Vlada"];

?>

<!DOCTYPE html>
<html lang="en">

<body>
    
    <?php
    // OVAKO NE
    foreach($imena as $ime) 
    {
        echo "<p>$ime</p>";
    }
    ?>

    <?php foreach($imena as $ime){ ?>
        <p><?php echo $ime ?></p>
   <?php } ?>

   
   <?php// NAJBOLJI NACIN
    foreach($imena as $ime): ?>
    <p><?= $ime ?></p>
    <?php endforeach; ?>
</body>
</html>