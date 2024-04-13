<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'department' => ['required', 'string', 'in:bi,ch,ma,ph,cs,zh,ji'],
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'department' => $request->department,
        ]);

        // Generate user ID based on department
        switch ($request->department) {
            case 'bi':
                $prefix = 'BI';
                break;
            case 'ch':
                $prefix = 'CH';
                break;
            case 'ma':
                $prefix = 'MA';
                break;
                 case 'ph':
                    $prefix = 'PH';
                    break;
                    case 'cs':
                        $prefix = 'CS';
                        break;
                        case 'zh':
                            $prefix = 'ZH';
                            break;
                            case 'ji':
                                $prefix = 'JI';
                                break;
            default:
                $prefix = '';
        }

        $randomNumber = str_pad(rand(1, 999999), 6, '0', STR_PAD_LEFT);
        $user->username = $prefix . $randomNumber;

        $user->save();
   // Store the generated username in session
   Session::put('generated_username', $user->username);


   return redirect()->route('login');
        //return redirect()->route('dashboard');
    }


}
