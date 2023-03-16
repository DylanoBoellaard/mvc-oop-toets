<?php

class Vulkaan extends BaseController
{
    private $vulkaanModel;

    public function __construct()
    {
        $this->vulkaanModel = $this->model('VulkaanModel');
    }

    public function index()
    {
        $vulkaan = $this->vulkaanModel->getVulkaan();

        //var_dump($vulkaan);
        $rows = "";
        foreach ($vulkaan as $result) {
            $rows .= "<tr>
                        <td>$result->Naam</td>
                        <td>$result->Hoogte</td>
                        <td>$result->Land</td>
                        <td>$result->JaarLaatsteUitbarsting</td>
                        <td>$result->AantalSlachtoffers</td>
                    </tr>";
        }

        $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'rows' => $rows
        ];

        $this->view('vulkaan/index', $data);
    }
}