<?php

class Vulkaan extends BaseController
{

    private $vulkaanInfo;

    public function __construct()
    {
        $this->vulkaanInfo = $this->model('VulkaanModel');
    }

    public function index()
    {
        $vulkaans = $this->vulkaanInfo->getVulkaans();

        // var_dump($voetballers);
        $rows = '';
        foreach ($vulkaans as $result) {
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

        $this->view('vulkaan/index', $data);
    }
}