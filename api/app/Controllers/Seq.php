<?php

namespace App\Controllers;

class Seq extends BaseController
{
    public function dna2rna($seq)
    {
        $diretorio = getcwd();
        $diretorio = str_replace('/public','',$diretorio);
        $y = system("python3 $diretorio/app/ThirdParty/dna2rna.py $seq");
    }
}
