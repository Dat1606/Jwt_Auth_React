<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

	public function index()
	{
		$users = User::all();
		return response()->json($users);
	}

	public function create()
	{

	}

	public function store(Request $request)
	{
		User::create($request->all());
		return response()->json(['message' => 'Success!']);
	}

	public function show($id)
	{

	}

	public function edit($id)
	{
		$user = User::find($id);
		if (! $user) {
			return response()->json(['error' =>'User not exist']);
		}
		return response()->json($user);
	}

	public function update(Request $request, $id)
	{
		$user = User::find($id);
		if (! $user) {
			return response()->json(['error' => 'User not exist']);
		}
		$user->update($request->all());
		return response()->json(['message' => 'Success']);
	}

	public function destroy($id)
	{
		$user = User::find($id);
		if (! $user) {
			return response()->json(['error' => 'User not found']);
		}
		$user->delete();
		return response()->json(['message' => 'Success!']);
	}
}