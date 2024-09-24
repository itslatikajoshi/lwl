<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function index()
    {
        echo "Latika";
        // calling static function of User service. To call static function we have to use ::
        echo UserService::getName();
        // associative array
        $data = ['name'=> "I love"];

        $dbData =[
            'name'=>'latika',
            'email'=>'itslatikajoshi@gmail.com',
            'password'=>"12345678"
        ];
        // created and saved data of dbData in database.
        $user = User::create($dbData);
    }
    // function  to fetch data
    public function getAllUser()
    {
        $user = User::all(); //display all data of User table
        $user = User::find(22); // display data of row having id=22
        $user = User::findOrFail(22); //if the data exists display otherwise show failed.
        $user = User::where('email','itslatikajoshi@gmail.com')->first(); //show data where id is itslatikajoshi@gmail.com in the first time  if two rows have same email id.
    }

}
