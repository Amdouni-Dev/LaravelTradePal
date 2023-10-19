<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('FrontEnd.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {   $msg="Votre compte est bloqué merci de contacter l'administrateur";

        $request->authenticate();
        
      

        $user = Auth::user(); 
        if ($user->role === 'admin') {
            return redirect('/dashboard'); 
        }
       else
       {
      if ($user->account_status == "inactive") {
        $msg = "Votre compte est bloqué. Merci de contacter l'administrateur.";
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/login')->withErrors(['message' => $msg]);

    }
      }     
      
      return redirect("/home");
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect('/logout');
    }


}
