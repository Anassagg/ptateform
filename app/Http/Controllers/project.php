<?php

namespace App\Http\Controllers;

use App\Models\pro_user;
use App\Models\societe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\user_societe;
class project extends Controller
{
    public function login(){
        return view('login');
    }
    public function verification(Request $req) {
        $username = $req->input('username');
        $user = pro_user::where('username', $username)->first();
        if ($user) {
            Auth::login($user);
            return redirect()->route('affiche');
        } else {
            return redirect()->route('login')->withErrors(["error"=>'Utilisateur incorrect'])->onlyInput('username');
        }
    }
    public function affiche(){
        $userSocietes = user_societe::with('pro_user', 'societe')->where('pro_user_id', Auth::id()) ->get();
        $getall=societe::all();
        
        return view('affiche',compact('userSocietes'));
    }
    public function logout() {
        Auth::logout(); 
        return redirect()->route('login'); 
    }

public function getinfo(){
    
    
    // foreach ($userSocietes as $userSociete) {
    //     echo "Nom d'utilisateur : " . $userSociete->proUser->username . "<br>";
    //     echo "Nom de la société : " . $userSociete->societe->nom_societe . "<br>";
    
    // }
}


}
// if (Auth::check()) {
        // } else {
        //     return redirect()->route('login');
        // }