<?php
    require_once(__DIR__ . '/db/database.php');
    require_once(__DIR__ . '/../Model/user.php');

    class UserDAO extends Database
    {
        public function Register(User $user)
        {
            $stmt = $this->prepare(
                'INSERT INTO usuusuario 
                    (USUNOME, USULOGIN, USUSENHA)
                VALUES
                    (:USUNOME, :USULOGIN, :USUSENHA)');

            if($stmt->execute([':USUNOME' => $user->name, ':USULOGIN' => $user->username, ':USUSENHA' => $user->password])){
                return true;
            }
            return false;
        }

        public function GetUser(string $username): array
        {
            $user = new User();

            $stmt = $this->prepare(
                'SELECT
                    USUCOD, USULOGIN, USUSENHA, USUNOME
                FROM
                    usuusuario
                WHERE
                    USULOGIN = :USULOGIN');

            if($stmt->execute([':USULOGIN' => $user->username]))
            {
                return [];
            }
            else
            {
                return false;
            }
        }
    }