<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		$userModel = new UserModel();
		// $users = $userModel->find([1,2]);
		// $users = $userModel->findAll();
		// $users = $userModel->where('name','Antony')->findAll();
		// $users = $userModel->findAll(1,2);
		// $users = $userModel->withDeleted()->findAll();

		// $data=[
		// 	'name' =>"programador1",
		// 	'email' =>"programador1@gmail.com"
		// ];
		// $userModel->insert($data); 


		// $data=[
		// 	 	'name' =>"programador2",
		// 	 	'email' =>"programador2@gmail.com"
		// 	 ];
		// 	 $userModel->update(6,$data);
		

		// $data=[
		// 	'name' =>"yo"
		// ];
		// $userModel->update([2,3],$data);

		// $userModel->whereIn('id',[4,5,6])->set(['name'=>'yo tambien'])->update();

		// $data=[
		// 		 	'name' =>"programador12",
		// 		 	'email' =>"programador12@gmail.com"
		// 	  ];
		// 	  $userModel->save($data);	

		$data=[
			'id' => '8',
			'name' =>"programador11",
			'email' =>"programador11@gmail.com"
	 ];
	 $userModel->save($data);

		$users = $userModel->findAll();
		$users =array('users'=>$users);
		 return view('estructura/header').view('estructura/body',$users);
	}
}
