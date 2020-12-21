<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SessionResource;
use App\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //

	public function index(){
		$session = Session::latest()->paginate(10);

		return SessionResource::collection($session);
	}

	public function show(Session $session){
	

		return new SessionResource($session);
	}

	public function update(Request $request, Session $session)
	{
		$this->authorize('update', $session);
		$session->update([
			'description' => $request->description,
    		'start' => $request->start,
    		'duration' => $request->duration,
		]);
		return new SessionResource($session);
	}

    public function store(Request $request)
    {
    	# code...
    	$this->validate($request, [
    		'description' => 'required',
    	]);
    	$session = Session::Create([
    		'user_id' => auth()->id(),
    		'name' => auth()->id(),
    		'description' => $request->description,
    		'start' => $request->start,
    		'duration' => $request->duration,
    	]);

    	return new SessionResource($session);
    }

    public function destroy(Session $session){
    	$this->authorize('delete', $session);

    	$session->delete();

    	return response()->json([
    		'message' => 'sesi terhapus'
    	]);
    }
}
