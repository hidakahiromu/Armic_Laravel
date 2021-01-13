<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserMusic;
use Illuminate\Support\Facades\Validator;

class artistlistRegistrationController extends Controller
{
    public function index()
    {
        return view('/artistlist/artistlistRegistration');
    }
    
    protected function create(array $data)
    {
        UserMusic::create([
            'userID' => $data['userID'],
            'artistName' => $data['artistName'],
            'artistFrigana' => $data['artistFrigana'],
        ]);
        return view('/artistlist/artistlistRegistration');
    }
    
}
