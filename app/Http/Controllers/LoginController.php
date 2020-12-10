<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use App\Models\Team;

class LoginController extends Controller
{
    //

    public function redirectTo($logInFrom)
    {
        return Socialite::driver($logInFrom)->redirect();
    }

    public function handleLogInCallback($logInFrom)
    {

        try {

            $user = Socialite::driver($logInFrom)->user();

            $findUser = User::where($logInFrom.'_id','=',$user->id)->first();

            if ($findUser){
                Auth::login($findUser);
                return redirect('/dashboard');
            }
            else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    $logInFrom.'_id' => $user->id,
                    'password' => encrypt(''),
//                    'profile_photo_path' => $user->avatar
                ]);
                $newTeam = Team::forceCreate([
                    'user_id' => $newUser->id,
                    'name' => explode(' ', $user->name, 2)[0]. "'s Team",
                    'personal_team' => true
                ]);

                $newTeam->save();
                $newUser->current_team_id = $newTeam->id;
                $newUser->save();

                Auth::login($newUser);

                return redirect('/dashboard');

            }
        }
        catch (Exception $e){
            dd($e->getMessage());
        }

    }
}
