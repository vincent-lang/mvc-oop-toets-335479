<?php

class VoetbalModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();    
    }

    public function getvoetballers()
    {
        $sql = "SELECT Id
                       ,Naam
                       ,Club
                       ,Leeftijd
                       ,Nationaliteit
                       ,Salaris
                FROM   Voetballers";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}