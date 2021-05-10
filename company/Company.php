<?php

class Company {
    private $name, $employees, $turnover;

    private function generateName($length = rand(5, 12)){
            $characters = 'abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return ucfirst($randomString);
        }
}