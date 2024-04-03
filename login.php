<?php
include('conecta.php');
$dados = array( 'email_ou_nome_user' => $_POST['email_ou_nome_user'], 'senha' => $_POST['senha']);
if (isset($dados['email_ou_nome_user']) || isset($dados['senha'])) {
    if (strlen($dados['email_ou_nome_user']) == 0) {
        echo "preencha seu email ou nome de usuario";
    } else if (strlen($dados['senha']) == 0) {
        echo "preencha sua senha";
    } else {
       $query_user = "SELECT id, nome_user,email,senha FROM usuarios WHERE nome_user = :email_ou_nome_user OR email = :email_ou_nome_user LIMIT 1";
       $result_user = $conn->prepare($query_user);
       $result_user->bindParam(':email_ou_nome_user',$dados['email_ou_nome_user']);
       $result_user->execute();
       if (($result_user)AND($result_user->rowCount() != 0)) {
         $linha_user = $result_user->fetch(PDO::FETCH_ASSOC);
         if (password_verify($dados['senha'],$linha_user['senha'])) {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $linha_user['id'];
            $_SESSION['nome'] = $linha_user['nome'];
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0; teste.html'>";
         } else {
            echo "algo esta errado";
         }
       } else {
        echo "usuario nao encontrado";
       }
    } 
    } else {
            echo "falha ao logar algo esta errado";
    }
?>