<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileUserController extends Controller
{
    public function index(){
    	return view('FrontEnd.profile');
    }

    /**
      * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request)
    { 
        dd("fghfgh");
        $user = Auth::user();
        $user = User::find($user->id);
        $user->update($request->all());

        return redirect()->route('profile')
                        ->with('success','Article crée avec succées.');
    }

    /**
     * Display the specified user.
     * @return \Illuminate\Http\Response
     */
    public function showForm()
    {
        return view('FrontEnd.editProfile');
    }
}
