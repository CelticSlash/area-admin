<?php
    require_once(__DIR__ . '/db/database.php');
    require_once(__DIR__ . '/../Model/address.php');    

    class AddressDAO extends Database
    {
        public function GetClientAddresses($clientCode)
        {
            return;
        }

        public function GetAddress($addressCode)
        {
            return;
        }

        public function InsertAddress(Address $address)
        {
            return;
        }

        public function UpdateAddress(Address $address)
        {
            return;
        }

        public function DeleteAddress($addressCode)
        {
            return;
        }
    }