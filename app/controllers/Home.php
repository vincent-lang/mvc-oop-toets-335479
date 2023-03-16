<?php

class Home extends BaseController
{
    public function index($id = NULL, $name = NULL,$club = NULL,$leeftijd = NULL,$nationaliteit = NULL,$salaris = NULL)
    {

        $data = [
            'title' => 'Top 5 best betaalde voetballers ter wereld',
            'id'    => $id,
            'name'  => $name,
            'club'  => $club,
            'leeftijd'=> $leeftijd,
            'nationaliteit' => $nationaliteit,
            'salaris' => $salaris
        ];

        $this->view('home/index', $data);
    }
}