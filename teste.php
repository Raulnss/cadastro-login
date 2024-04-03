<?php
include('protect.php');
// include('cadastro.php');
// include('login.php');
include('conecta.php');

    $query_user = "SELECT * FROM usuarios WHERE id = :id LIMIT 1";
    $result_user = $conn->prepare($query_user);
    $result_user->bindParam(':id',$_SESSION['id']);
    $result_user->execute();
    $linha_user = $result_user->fetch(PDO::FETCH_ASSOC);
    $_SESSION['nome'] = $linha_user['nome'];
    // echo $_SESSION['nome'];
    // echo var_dump($_SESSION['nome']);

?>