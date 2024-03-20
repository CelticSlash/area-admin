<?php
    require_once(__DIR__ . '/db/database.php');

    class LoginDAO extends Database
    {
        public function Login($username, $password){
            $stmt = $this->prepare(
                'SELECT 
                    USUCOD 
                FROM
                    USUUSUARIO
                WHERE
                    USULOGIN = :USULOGIN
                    AND USUSENHA = :USUSENHA');

            if($stmt->execute([':USULOGIN' => $username, ':USUSENHA' => $password])){
                return true;
            }
        }
    }