<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo "
        <h1>APIs LBS</h1>
        <ul>
            <li>/dna2rna/{SEQ}</li>
        </ul>
        ";
    }
}
