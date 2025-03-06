<?php
    $login = $_POST['cxlogin'];
    $senha = $_POST['cxsenha'];

    if($login == "etec" and $senha == "Informática"){
        echo "Logado com sucesso";
    }else{
        echo "Login ou senha incorretos";
    }
?>