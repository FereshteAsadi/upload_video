<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Repositories\UsersRepository;
use App\Http\Requests\RegisterRequest;


class AuthController extends Controller
{
    public function __construct(UsersRepository $users)
    {
        $this->USERS = $users ;

    }
    public function register(RegisterRequest $request )
    {

    }
    public function logIn(LoginRequest $request)
    {

    }
    public function logOut()
    {

    }
}
