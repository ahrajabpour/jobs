<?php
    $stmt = $pdo->prepare("INSERT INTO REGISTRY (name, value) VALUES (:name, :value)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':value', $value);
//    $stmt->execute();
    // insert one row
//    $name = 'one';
//    $value = 1;
//    $stmt->execute();

    // insert another row with different values
//    $name = 'two';
//    $value = 2;
//    $stmt->execute();
?>
