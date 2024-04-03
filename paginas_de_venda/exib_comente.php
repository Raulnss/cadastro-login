<?php
include('../conecta.php');
// do {
     $query_user = "SELECT * FROM `comentarios` ORDER BY nome, comente DESC";
     $result_user = $conn->prepare($query_user);
     $result_user->execute();
     while ($row = $result_user->fetch()) {
        echo "<p>Nome do usuário: " . $row['nome'] . "</p>";
        echo "<p>Comentário: " . $row['comente'] . "</p>";
    }
    //  $linha_user = $result_user->fetch(PDO::FETCH_BOTH);
    //  $teste = $linha_user;
    //  echo count($linha_user);
    //  echo var_dump($linha_user);
// } while ($linha_user<$teste);
    // echo count($teste);
    // echo var_dump($teste);
// foreach ($linha_user as $value) {
//     // echo $value;
//     echo var_dump($value);
//     $query_user = "SELECT * FROM `comentarios`";
//     $result_user = $conn->prepare($query_user);
//     $result_user->execute();
//     $linha_user1 = $result_user->fetch(PDO::FETCH_ASSOC);
    
//   }
// print_r($linha_user1);
//   while ($row = $linha_user1) {
//     foreach ($row as $key => $value) {
//     //   echo $value . '<br>';
//     echo var_dump($value);
//     }
//   }
?>