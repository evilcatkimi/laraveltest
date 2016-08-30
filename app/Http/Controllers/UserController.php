<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$objUser = new User();
		$allUsers = $objUser->all()->toArray();
		return view('user.list')->with('allUsers',$allUsers);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//upload file
		$photo = '';
		if($request->hasFile('myFile')){
			$file = $request->file('myFile');
			$file->move('img','myfile.jpg');
			$photo='myfile.jpg';
		}
		//--- End of upload file
		$allRequest = $request->all();
		$Name = $allRequest['name'];
		$Address = $allRequest['address'];
		$Age = $allRequest['age'];
		$dataInsertToDatabase = array(
			'Name' => $Name,
			'Address' => $Address,
			'Age' => $Age,
			'Photo' => $photo,
		);
		//echo "cat0";
		$objUser = new User();
		$objUser->insert($dataInsertToDatabase);
		return redirect('user/create');
		//echo "Thanh cong";
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$objUser = new User();
		$getUserById = $objUser->find($id)->toArray();
		return view('user.edit')->with('getUserById',$getUserById);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$allRequest = $request->all();
		$name = $allRequest['Name'];
		$address = $allRequest['Address'];
		$age = $allRequest['Age'];
		$idUser = $allRequest['id'];

		$objUser = new User();
		$getUserById = $objUser->find($idUser);
		$getUserById->Name = $name;
		$getUserById->Address = $address;
		$getUserById->Age = $age;
		$getUserById->save();

		return redirect()->action('UserController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::find($id)->delete();
		return redirect()->action('UserController@index');
	}

}
