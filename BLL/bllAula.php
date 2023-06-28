<?php

namespace BLL;

include_once '../../DAL/dalAula.php';

use DAL\dalAula;

class bllAula
{
    public function Insert(\MODEL\Aula $aula)
    {
        $dal = new \DAL\dalAula();

        $dal->Insert($aula);
    }


    public function select()
    {
        $dal = new  \Dal\dalAula();

        return $dal->Select();
    }
}
