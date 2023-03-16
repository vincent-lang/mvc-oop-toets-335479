<?php

class Voetbal extends BaseController
{

    private $voetbalInfo;

    public function __construct()
    {
        $this->voetbalInfo = $this->model('VoetbalModel');
    }

    public function index()
    {
        $voetballers = $this->voetbalInfo->getvoetballers();

        // var_dump($voetballers);
        $rows = '';
        foreach ($voetballers as $result) {
            $rows .= "<tr>
                        <td>$result->Id</td>
                        <td>$result->Naam</td>
                        <td>$result->Club</td>
                        <td>$result->Leeftijd</td>
                        <td>$result->Nationaliteit</td>
                        <td>$result->Salaris</td>
                    </tr>";
        }

        $data = [
            'title' => 'Top 5 best betaalde voetballers ter wereld',
            'records' => 'info uit de database',
            'rows' => $rows
        ];

        $this->view('voetbal/index', $data);
    }
}