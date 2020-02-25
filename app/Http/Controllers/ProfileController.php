<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Auth;
use Storage;

class ProfileController extends Controller
{
    /**
     *
     * @param ProfileRequest $request
     * @return Response
     */

    public function index(){
        $image = false;
        
        if (Storage::disk('local')->exists('public/profile_images/' . Auth::id() . '.jpg')) {
            $image = true;
        }
        return view('profiles/index');
    }
}
