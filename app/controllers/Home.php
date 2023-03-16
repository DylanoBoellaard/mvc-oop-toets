<?php

class Home extends BaseController
{
    public function index($Id = NULL, $Naam = NULL, $Hoogte = NULL, $Land = NULL, $JaarLaatsteUitbarsting = NULL, $AantalSlachtoffers = NULL)
    {
        $data = [
            'title' => 'Welkom op de homepage',
            'id'    => $Id,
            'naam'  => $Naam,
            'club' => $Hoogte,
            'leeftijd' => $Land,
            'nationaliteit' => $JaarLaatsteUitbarsting,
            'salaris' => $AantalSlachtoffers
        ];

        $this->view('home/index', $data);
    }
}