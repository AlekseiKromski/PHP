<?php


namespace php\base;


use php\Db;

abstract class Models
{

    public $atributes = [];
    public $errors =[];
    public $rules =[];

    public function __construct()
    {
        Db::instance();

    }

}