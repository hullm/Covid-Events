<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function index() {
        return view('registration.index', [
    ]);
    }

    public function create() {
        return view('registration.create', [
    ]);
    }

    public function store() {

        $registration = New Registration();

        $registration->name = request('name');
        $registration->email = request('email');
        $registration->event = request('event');
        $registration->status = 'pending';

        $registration->save();

        return redirect('/registration');
    }

}
