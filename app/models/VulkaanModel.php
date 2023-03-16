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
                       ,Hoogte
                       ,Land
                       ,JaarLaatsteUitbarsting
                       ,AantalSlachtoffers
                FROM   Vulkaan";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}