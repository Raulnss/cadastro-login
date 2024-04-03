<?php
include('conecta.php');
$dados = array('nome' => $_POST['nome'], 'nome_user' => $_POST['nome_user'], 'email' => $_POST['email'], 'senha' => $_POST['senha']);
$dados = array_map('trim', $dados);
if (isset($dados['nome']) && isset($dados['email']) && isset($dados['senha'])) {
    if (strlen($dados['nome']) == 0) {
        echo "preencha seu nome";
    } elseif (strlen($dados['email']) == 0) {
        echo "preencha o email";
    } elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        echo "esse email não é valido";
    } elseif (strlen($dados['senha']) == 0) {
        echo "preencha a senha";
    } elseif (strlen($dados['senha']) < 8) {
        echo "sua senha tem menos de 8 caracteres então é fraca";
    } else {
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
          $stmt->bindValue(":email", $dados['email']);
          $stmt->execute();
          $consulta = $stmt->fetch(PDO::FETCH_ASSOC);
          if($consulta){
            echo "EMAIL EM USO";
          }else{
            $dados['senha'] = password_hash($dados['senha'],PASSWORD_DEFAULT);
             $cadastro = $conn->prepare('INSERT INTO usuarios(nome,nome_user,email,senha) VALUES(:nome,:nome_user,:email,:senha)');
              $cadastro ->execute(array(
              ':nome' => $dados['nome'],
              ':nome_user' => $dados['nome_user'],
              ':email' => $dados['email'],
              ':senha' => $dados['senha']
            ));
            if (!isset($_SESSION)) {
                session_start(); 
            }
            $query_user = "SELECT id FROM usuarios WHERE nome = :nome1";
            $result_user = $conn->prepare($query_user);
            $result_user->bindParam(':nome1',$dados['nome']);
            $result_user->execute();
            $linha_user_c = $result_user->fetch(PDO::FETCH_ASSOC);
            $_SESSION['id'] = $linha_user_c['id'];
            $_SESSION['nome'] = $dados['nome'];
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0; teste.html'>";
          }
       } 
    } else {
      echo "preencha os dados";
    }
?>