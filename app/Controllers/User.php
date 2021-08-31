<?php

namespace App\Controllers;

class User extends BaseController
{

	protected $db, $builder;

	public function __construct()
	{
		$this->db      = \Config\Database::connect();
		$this->builder = $this->db->table('users');
	}

	public function index()
	{
		$data['page_title'] = 'My Profile';
		return view('user/index', $data);
	}

	public function edit($id = 0)
	{
		$data['page_title'] = 'Edit Profile';
		$this->builder->select('users.id as userid, username, email, fullname, user_image');
		$query = $this->builder->get();
		$data['user'] = $query->getRow();
		return view('user/edit', $data);
	}
}
