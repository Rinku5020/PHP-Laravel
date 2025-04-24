<?php

namespace App\Http\Controllers;

use App\Models\adminpanle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminpanleController extends Controller
{

    public function validatefrom(Request $request, $id = null)
    {

        $adminpanle = $id ? Adminpanle::findOrFail($id) : new Adminpanle();

        $rules = [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:adminpanles,email' . ($id ? ',' . $id : ''),
            'gender' => 'required',
            'phone' => 'required|numeric|digits:10',
            'image' => $id ? 'nullable' : 'required',
            'hobbies' => 'required|array',
            'address' => 'required',
            'dob' => 'required|date|before_or_equal:today',
        ];

        $messages = [
            'firstName.required' => 'First Name is required',
            'lastName.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email already exists',
            'gender.required' => 'Gender is required',
            'phone.required' => 'Phone number is required',
            'phone.numeric' => 'Phone number must be numeric',
            'phone.digits' => 'Phone number must be 10 digits',
            'image.required' => 'Image is required',
            'hobbies.required' => 'Hobbies are required',
            'address.required' => 'Address is required',
            'dob.required' => 'Date of birth is required',
            'dob.before_or_equal' => 'Date of birth cannot be in the future',
        ];

        $request->validate($rules, $messages);

        if ($request->hasFile('image')) {

            if ($id && $adminpanle->image && file_exists(public_path('uploads/' . $adminpanle->image))) {
                unlink(public_path('uploads/' . $adminpanle->image));
            }


            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $adminpanle->image = $imageName;
        }



        $adminpanle->firstName = $request->firstName;
        $adminpanle->lastName = $request->lastName;
        $adminpanle->email = $request->email;
        $adminpanle->gender = $request->gender;
        $adminpanle->phone = $request->phone;
        $adminpanle->hobbies = implode(',', $request->hobbies);
        $adminpanle->address = $request->address;
        $adminpanle->dob = $request->dob;

        $adminpanle->save();

        $message = $id ? 'User updated successfully.' : 'User created successfully.';
        return redirect()->route('table.show')->with('success', $message);
    }



    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return view('adminpanle.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return view('adminpanle.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return $this->validatefrom($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(adminpanle $adminpanle)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $table=adminpanle::all();
        return view('adminpanle.table',['table'=>$table]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(adminpanle $adminpanle,$id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $user= adminpanle::findOrFail($id);
        return view('adminpanle.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $user= adminpanle::findOrFail($id);

        return $this->validatefrom($request, $user->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(adminpanle $adminpanle,$id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $table= adminpanle::findOrFail($id);
        if($image=$table->image){
            unlink(public_path('uploads/'.$image));
        }
        $table->delete();
        return redirect()->route('table.show')->with('success', 'User deleted successfully.');
    }


    public function bulkDelete(Request $request)
    {



        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'integer'
        ]);

        adminpanle::whereIn('id', $request->ids)->delete();

        return response()->json([
            'success' => true,
            'ids' => $request->ids,
            'message' => 'Users deleted successfully.'
        ]);
    }

    public function profile()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return view('adminpanle.profilepage');
    }


}










