<?php

namespace App\Http\Controllers\Inbox;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InboxController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request) {        
        if ($request->isMethod('post')) {
            $data = $request->all();
            $result = array(
                'success' => true,
                'data' => $data
            );                        
            
            return response()->json($result);
        }
        
        return view('welcome');
    }

}