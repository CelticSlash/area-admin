<?php
    include_once("../Model/user.php");
    include_once("../Persistence/userDAO.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $user = new User();        
        
        $user->name = $_POST['registerName'];
        $user->username = $_POST['registerUser'];
        $user->password = password_hash($_POST['registerPassword'], PASSWORD_DEFAULT);
        
        $message = validaDados($user);

        if($message == "")
        {
            $userDao = new UserDAO(); 
            
            if($userDao->GetUser($user->username) != "")
            {
                echo "  <script>
                            alert('Usuário já cadastrado.');
                            window.location.href='../View/index.php';
                        </script>";
            }
            else if($userDao->Register($user))
            {
                echo "  <script>
                            alert('Usuário cadastrado com sucesso.');
                            window.location.href='../View/index.php';
                        </script>";
            }
            else
            {
                echo "  <script>
                            alert('Erro ao cadastrar o usuário.');
                        </script>";
            }

        }
        else
        {
            echo "  <script>
                        alert('$message');
                    </script>";
        }

    }

    function validaDados(User $user)
    {
        if($user->name == "")
        {
            return "Preencha o nome";
        }
        else if($user->username == "")
        {
            return "Preencha o usuário";
        }
        else if($user->password == "")
        {
            return "Preencha a senha";
        }
        else
        {
            return "";
        }        
    }