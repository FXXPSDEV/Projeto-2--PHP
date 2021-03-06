<?php

class UserDAO {

    public static function add($user) {
        $db = Database::getConnection();

        $stmt = $db->prepare("INSERT INTO users 
        (username, lastname, cpf, rg, tfc, tfr, email, password, endereco, complemento, cidade, estado, cep, pergunta, resposta) 
        VALUES 
        (:username, :lastname, :usercpf, :userrg, :usertfc, :usertfr, :useremail, :password, :userendereco, :usercomplemento, :usercidade, :userestado, :usercep, :userpergunta,:userresposta);");

        $stmt->execute(array(
          ':username' => $user->getUsername(),
          ':lastname' => $user->getUserln(),
          ':usercpf' => $user->getUsercpf(),
          ':userrg' => $user->getUserrg(),
          ':usertfc' => $user->getUsertfc(),
          ':usertfr' => $user->getUsertfr(),
          ':useremail' => $user->getUseremail(),
          ':password' => $user->getPassword(),
          ':userendereco' => $user->getUserendereco(),
          ':usercomplemento' => $user->getUsercomplemento(),
          ':usercidade' => $user->getUsercidade(),
          ':userestado' => $user->getUserestado(),
          ':usercep' => $user->getUsercep(),
          ':userpergunta' => $user->getUserpergunta(),
          ':userresposta' => $user->getUserresposta(),
          

        ));

        return $stmt->rowCount();
    }

    public static function verify($user) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare("SELECT * FROM users where email = :useremail");
        $stmt->execute(array(
                ':useremail' => $user->getUseremail()
        ));

        $rows = $stmt->fetchAll();

        $user_db_password = $rows[0]['password'];

        if ($user->getPassword() == $user_db_password) {
            return true;
        } else {
            return false;
        }
    }
    public static function delete($r) {
        $db = Database::getConnection();

        $stmt = $db->prepare("DELETE from users WHERE id = $r");
        $stmt->execute(array(
          //':userid' => $user->getUserid(),
        ));

        $linhasAfetadas = $stmt->rowCount();

        if ($linhasAfetadas > 0) {
            FlashMessage::setMessage('Usuário deletado com sucesso.', FlashMessage::OK);
            return header('Location: ../pessoas/index.php');
        } else {
            FlashMessage::setMessage('Ocorreu um problema ao deletar o usuário.', FlashMessage::ERROR);
            return header('Location: ../pessoas/index.php');
        }
    }

    public static function listAlter($a) {
        $db = Database::getConnection();

        $msqli = "SELECT username, lastname, cpf, rg, tfc, tfr, email, endereco, complemento, cidade, estado, cep,pergunta,resposta FROM users WHERE id = $a";
        $result = $db->query($msqli);
        
        if ($result->rowCount() > 0) {
            return $result;                       
        } else {
            echo "0 results";
        }
    }

    public static function alter($user) {
        $db = Database::getConnection();

        $stmt = $db->prepare("UPDATE users SET
        username = :username, lastname = :lastname, cpf = :usercpf, rg = :userrg, tfc = :usertfc, tfr = :usertfr, email = :useremail, password = :password, endereco = :userendereco, complemento = :usercomplemento, cidade = :usercidade, estado = :userestado, cep = :usercep, pergunta =:userpergunta, resposta = :userresposta WHERE id = :userid"); 

        $stmt->execute(array(
          ':userid' => $user->getUserid(),
          ':username' => $user->getUsername(),
          ':lastname' => $user->getUserln(),
          ':usercpf' => $user->getUsercpf(),
          ':userrg' => $user->getUserrg(),
          ':usertfc' => $user->getUsertfc(),
          ':usertfr' => $user->getUsertfr(),
          ':useremail' => $user->getUseremail(),
          ':password' => $user->getPassword(),
          ':userendereco' => $user->getUserendereco(),
          ':usercomplemento' => $user->getUsercomplemento(),
          ':usercidade' => $user->getUsercidade(),
          ':userestado' => $user->getUserestado(),
          ':usercep' => $user->getUsercep(),
          ':userpergunta' => $user->getUserpergunta(),
          ':userresposta' => $user->getUserresposta()

        ));

        return $stmt->rowCount();
    }

    public static function listar() {
        $conn = Database::getConnection();

        $sql = "SELECT id, username, lastname, cpf, rg, tfc, tfr, email, endereco, complemento, cidade, estado, cep FROM users";
        $result = $conn->query($sql);
        
        if ($result->rowCount() > 0) {
            return $result;                       
        } else {
            echo "0 results";
        }
    }

    public static function recuperar($email) {
        $db = Database::getConnection();
        
        $stmt = $db->prepare("SELECT pergunta,resposta FROM users where email = :useremail");
        $stmt->execute(array(
                ':useremail' => $email
        ));
        
        if ($stmt->rowCount() > 0) {
            FlashMessage::setMessage('Email encontrado.', FlashMessage::OK);
            return $stmt;                       
        } else {
            FlashMessage::setMessage('Email não encontrado.', FlashMessage::ERROR);
            return header('Location: ../login.php');
        }
    }

    public static function alterar_senha($email,$senha) {
        $db = Database::getConnection();

        $stmt = $db->prepare("UPDATE users SET
        password = :senha WHERE email = :email"); 

        $stmt->execute(array(
          ':email' =>$email,            
          ':senha'=>sha1($senha)
        ));

        $rows = $stmt->fetchAll();

        if ($rows > 0) {
            FlashMessage::setMessage('Senha alterada com sucesso.', FlashMessage::OK);
            return header('Location: /login.php');
        } else {
            FlashMessage::setMessage('Ocorreu um problema ao alterar sua senha.', FlashMessage::ERROR);
            return header('Location: /recuperar.php');
        }
        
    }


}
