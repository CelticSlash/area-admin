<?php
    include_once("../Persistence/loginDAO.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {        
        $username = $_POST['registerUser'];
        $password = password_hash($_POST['registerPassword'], PASSWORD_DEFAULT);
        
        $loginDao = new LoginDAO();            

        if($loginDao->Login($username, $password))
        {
            header('Location: ../View/clientList.php');
        }
        else
        {
            return "Usuário não encontrado.";
        }

    }