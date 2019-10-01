<?php

class noticias_model
{
  private $db;

    function __construct()
    {
      $this->db = new PDO(
        'mysql:host=localhost;'
          . 'dbname=db_noticias;charset=utf8',
        'root',
        '');
    }

}


?>