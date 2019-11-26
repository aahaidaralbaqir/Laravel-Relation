<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Passport;
use App\Lesson;

class UserController extends Controller
{
    /**
     * Get user by id
     * @param id<integer>
     * @return view
     */
    public function show($id) {
        return view('users.profile',['user' => User::findOrFail($id)]);
    }

    /**
     * @param id<integer>
     * @return view
     */
    public function showPassport($id) {
        return view('users.passport',['passport' => Passport::findOrFail($id)]);
    }

    /**
     * @param $id integer
     * @return view
     */
    public function showLesson($id) {
        return view('users.lesson',['lesson' => Lesson::findOrFail($id)]);
    }
}
