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
        return view('signup-form');

        echo "Latika";
        // calling static function of User service. To call static function we have to use ::
        echo UserService::getName();
        // associative array
        $data = ['name' => "I love"];

        $dbData = [
            'name' => 'latika',
            'email' => 'itslatikajoshi@gmail.com',
            'password' => "12345678"
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
        $user = User::where('email', 'itslatikajoshi@gmail.com')->first(); //show data where id is itslatikajoshi@gmail.com in the first time  if two rows have same email id.
    }
    // it will create n save data from form
    public function store(Request $request)
    {
        $data = $request->all();
        $value = User::create($data);
    }
    // it will display data in form of table
    public function display()
    {
        $values = User::all()->toArray(); //this will convert collection to array and display values (it is displaying data in form of collection)

        return view('display', ['data' => $values]);
    }
    public function edit($id)
    {
        $row = User::findOrFail($id); // Find the data by ID
        return view('update', compact('row')); // Return the edit view with the data
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Find the record and update
        $row = User::findOrFail($id);
        $row->name = $request->name;
        $row->email = $request->email;
        $row->updated_at = now(); // Update the timestamp
        $row->save(); // Save changes to the database

        // Redirect back or to a success page
        return redirect()->route('data.display')->with('success', 'Data updated successfully!');
    }
}
