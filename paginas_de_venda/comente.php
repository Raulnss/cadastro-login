<?php
include('../conecta.php');
include('../teste.php');
if (isset($linha_user['nome_user'])) {
    if (strlen($_POST['n1']) > 1) {
          $cadastro = $conn->prepare('INSERT INTO comentarios(nome,comente) VALUES(:nome_user,:comente)');
           $cadastro ->execute(array(
           ':nome_user' => $linha_user['nome_user'],
           ':comente' => $_POST['n1']
         ));
          include('exib_comente.php');
    }
} elseif (isset($linha_user['email'])) {
    if (strlen($_POST['n1']) > 1) {
        $cadastro = $conn->prepare('INSERT INTO comentarios(nome,comente) VALUES(:email,:comente)');
         $cadastro ->execute(array(
         ':email' => $linha_user['email'],
         ':comente' => $_POST['n1']
       ));
       include('exib_comente.php');
  }
} else {
  echo "deu ruim"; 
}
// $query_user1 = "SELECT nome,comente FROM comentarios";
// $result_user1 = $conn->prepare($query_user1);
// $result_user1->execute();
// $linha_user1 = $result_user1->fetch(PDO::FETCH_ASSOC);
// print_r($linha_user1);
// echo '<table>';
//   while ($row = $linha_user) {
//     echo '<tr>';
//     foreach ($row as $key => $value) {
//       echo '<td>' . $value . '</td>';
//     }
//     echo '</tr>';
//   }
//   echo '</table>';
?>