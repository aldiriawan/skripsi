<?php

namespace App\Controllers;

use function PHPUnit\Framework\isEmpty;

class Checker extends BaseController
{

    protected $db, $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }

    public function index()
    {

        $data['page_title'] = 'Checker Page';
        return view('checker/index', $data);
    }
}
