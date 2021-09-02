<?php

    session_start();

    //variavel de autenticaçao do usuario
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    
    $perfis = array(1=> 'Administrativo', 2=> 'Usuário');
    //usuarios
    $usuarios_app = array(
        array('id'=> 1, 'email'=>'adm@teste.com', 'senha'=> '1234', 'perfil_id' => 1),
        array('id'=> 2, 'email'=>'user@teste.com', 'senha'=> '1234', 'perfil_id' => 1),
        array('id'=> 3, 'email'=>'jose@teste.com', 'senha'=> '1234', 'perfil_id' => 2),
        array('id'=> 4, 'email'=>'maria@teste.com', 'senha'=> '1234', 'perfil_id' => 2),
    );

    foreach($usuarios_app as $user){
        if($user['email']== $_POST['email'] && $user['senha']== $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
            

        }
    }
    if($usuario_autenticado){
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'sim';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }
    else{
        header('Location: index.php?login=erro'); //força o redirecionamento
        $_SESSION['autenticado'] = 'nao';
    }




    /*
    echo "<pre>";
    print_r($usuarios);
    echo "</pre>";


    print_r($_POST);

    echo '<br />';

    echo $_POST['email'];
    echo '<br />';
    echo $_POST['senha'];*/


?>