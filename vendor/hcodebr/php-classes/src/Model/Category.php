<?php

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;

Class Category extends Model {
    
    public static function listAll()
    {
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_categories ORDER BY descategory;");
    }
}

?>