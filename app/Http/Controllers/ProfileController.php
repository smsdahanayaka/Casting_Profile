<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{

    // home page view
    public function main()
    {
        return view('Pages.HomePage');
    }

    // login page view
    public function login()
    {
        return view('Pages.HomePage');
    }

    // login page view
    public function about()
    {
        return view('Pages.AboutPage');
    }

    // admin serch dashbord
    public function searchView()
    {
        $AllUsers = Profiles::all();
        return view('Dashbords.adminDashboard', compact('AllUsers'));

    }


    // logout
    public function logout()
    {
        return view('Pages.HomePage');
    }

    // registation page view
    public function registation()
    {
        return view('Pages.RegistationPage');
    }

    // add user page view
    public function index()
    {
        return view('Pages.RegistationPage');
    }

    // add users to database
    public function create(Request $request)
    {
        try {
            $admin = new Profiles;
            $admin->first_name = $request->input('first_name');
            $admin->last_name = $request->input('last_name');
            $admin->personal_ID = $request->input('personal_ID');
            $admin->gender = $request->input('gender');
            $admin->date_of_birth = $request->input('date_of_birth');
            $admin->date_of_birth_month = $request->input('date_of_birth_month');
            $admin->date_of_birth_date = $request->input('date_of_birth_date');
            $admin->whatsapp_number = $request->input('whatsapp_number');
            $admin->mobile_number = $request->input('mobile_number');
            $admin->email = $request->input('email');
            $admin->home_town = $request->input('home_town');
            $admin->address = $request->input('address');
            $admin->height = $request->input('height');
            $admin->hair_color = $request->input('hair_color');
            $admin->eye_color = $request->input('eye_color');
            $admin->shoe_size = $request->input('shoe_size');
            $admin->pants_size = $request->input('pants_size');
            $admin->top_size = $request->input('top_size');
            $admin->dress_size = $request->input('dress_size');
            $admin->action_experience = $request->input('action_experience');
            $admin->special_skills = $request->input('special_skills');
            $admin->ads_films_tv_shows = $request->input('ads_films_tv_shows');
            $admin->facebook = $request->input('facebook');
            $admin->instagram = $request->input('instagram');
            $admin->tiktok = $request->input('tiktok');
            $admin->youtube = $request->input('youtube');
            $admin->remark = $request->input('remark');
            $admin->password = $request->input('password');

            // set profile
            if ($request->hasfile('profile_pic')) {
                $file = $request->file('profile_pic');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/users/', $filename);
                $admin->profile_pic = $filename;
            }

            // set image-1
            if ($request->hasfile('image_1')) {
                $file = $request->file('image_1');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/user-img-1/', $filename);
                $admin->image_1 = $filename;
            }

            // set image-2
            if ($request->hasfile('image_2')) {
                $file = $request->file('image_2');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/user-img-2/', $filename);
                $admin->image_2 = $filename;
            }

            // save all data
            $admin->save();
            return redirect('login-form')->with('status', 'New user added successfully');
        } catch (Exception $ex) {
            return redirect('registation-form')->with('status-1', 'This user is already registered. Please check your email');
        }
    }

    // Display the login form
    public function showLoginForm()
    {
        return view('Pages.HomePage'); // Assuming your login form is in a view named 'login.blade.php'
    }


    // Handle the login form submission
    public function loginfunction(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $AllUsers = Profiles::all();
        $adminData = Profiles::where('email', $credentials['email'])->first();

        if ($adminData == null) {
            return redirect()->back()->with('status', 'Invalid credentials. Please try again.');
        } else {
            if ($adminData->password == $credentials['password']) {
                $status = $adminData->status;

                if ($status == "admin") {

                    return view('Dashbords.adminDashboard', compact('AllUsers'));
                } else {

                    return view('Dashbords.userDashboard', compact('adminData'));
                }
            } elseif ($credentials['password'] == null) {
                return redirect('login-form')->with('status-1', 'Invalid credentials. Please try again.');
            } else {
                return redirect('login-form')->with('status-1', 'Invalid credentials. Please try again.');
            }
        }
    }


    // search

    // public function search(Request $request)
    // {
    //     $searchQuery = $request->input('query');

    //     // Fetch data from the database based on the searchQuery
    //     $AllUsers = Profiles::where('first_name', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('last_name', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('gender', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('date_of_birth', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('email', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('home_town', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('hair_color', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('eye_color', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('facebook', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('instagram', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('tiktok', 'like', '%' . $searchQuery . '%')
    //         ->orWhere('youtube', 'like', '%' . $searchQuery . '%')
    //         ->get();

    //     return view('Dashbords.adminDashboard', compact('AllUsers'));
    // }

    public function search(Request $request)
    {
        $searchQuery = $request->input('query');
        $town = $request->input('town');
        $age = $request->input('age');

        $query = Profiles::where(function ($query) use ($searchQuery) {
            $query->where('first_name', 'like', '%' . $searchQuery . '%')
                ->orWhere('last_name', 'like', '%' . $searchQuery . '%')
                ->orWhere('gender', 'like', '%' . $searchQuery . '%')
                ->orWhere('email', 'like', '%' . $searchQuery . '%')
                ->orWhere('home_town', 'like', '%' . $searchQuery . '%')
                ->orWhere('hair_color', 'like', '%' . $searchQuery . '%')
                ->orWhere('eye_color', 'like', '%' . $searchQuery . '%')
                ->orWhere('facebook', 'like', '%' . $searchQuery . '%')
                ->orWhere('instagram', 'like', '%' . $searchQuery . '%')
                ->orWhere('tiktok', 'like', '%' . $searchQuery . '%')
                ->orWhere('youtube', 'like', '%' . $searchQuery . '%');
        });

        if (!empty($town)) {
            $query->where('home_town', 'like', '%' . $town . '%');
        }

        if (!empty($age)) {
            // Assuming you have a "birth_date" column for the date of birth
            $currentYear = now()->year;
            $birthYear = $currentYear - $age;
            $query->where('date_of_birth', 'like', '%' . $birthYear . '%');

        }

        $AllUsers = $query->get();

        return view('Dashbords.adminDashboard', compact('AllUsers'));
    }



    // update admin view
    public function updateView($id)
    {
        $adminData = Profiles::find($id);
        return view('Forms.UpdateUserProfile', compact('adminData'));
    }


    public function updateDone(Request $request, $id)
    {
        $admin = Profiles::find($id);
        $status=$request->input('status');
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->personal_ID = $request->input('personal_ID');
        $admin->gender = $request->input('gender');
        $admin->date_of_birth = $request->input('date_of_birth');
        $admin->date_of_birth_month = $request->input('date_of_birth_month');
        $admin->date_of_birth_date = $request->input('date_of_birth_date');
        $admin->whatsapp_number = $request->input('whatsapp_number');
        $admin->mobile_number = $request->input('mobile_number');
        $admin->email = $request->input('email');
        $admin->home_town = $request->input('home_town');
        $admin->address = $request->input('address');
        $admin->height = $request->input('height');
        $admin->hair_color = $request->input('hair_color');
        $admin->eye_color = $request->input('eye_color');
        $admin->shoe_size = $request->input('shoe_size');
        $admin->pants_size = $request->input('pants_size');
        $admin->top_size = $request->input('top_size');
        $admin->dress_size = $request->input('dress_size');
        $admin->action_experience = $request->input('action_experience');
        $admin->special_skills = $request->input('special_skills');
        $admin->ads_films_tv_shows = $request->input('ads_films_tv_shows');
        $admin->facebook = $request->input('facebook');
        $admin->instagram = $request->input('instagram');
        $admin->tiktok = $request->input('tiktok');
        $admin->youtube = $request->input('youtube');
        $admin->remark = $request->input('remark');
        $admin->password = $request->input('password');

        if(!empty($status)){
            $admin->status = $request->input('status');
        }else{
            $admin->status = "user";
        }
        // set profile image
        if ($request->hasfile('profile_pic')) {

            // delete pic
            $destination = 'images/users/' . $admin->profile_pic;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/users/', $filename);
            $admin->profile_pic = $filename;
        }

        // set image -1
        if ($request->hasfile('image_1')) {

            // delete pic
            $destination = 'images/user-img-1/' . $admin->image_1;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image_1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/user-img-1/', $filename);
            $admin->image_1 = $filename;
        }

        // set image -2
        if ($request->hasfile('image_2')) {

            // delete pic
            $destination = 'images/user-img-2/' . $admin->image_2;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image_2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/user-img-2/', $filename);
            $admin->image_2 = $filename;
        }

        // save all data
        $admin->update();
        return redirect()->back()->with('status', 'updated successfully');
    }

    // delete user from admin
    public function deleteUserFromAdmin ($id)
    {
        $admin = Profiles::find($id);
        $destination='images/users/' . $admin->profile_pic;
        $destination1='images/user-img-1/' . $admin->image_1;
        $destination2='images/user-img-2/' . $admin->image_2;

        if(File::exists($destination)){
            File::delete($destination);
        }
        if(File::exists($destination1)){
            File::delete($destination1);
        }
        if(File::exists($destination2)){
            File::delete($destination2);
        }

        $admin->delete();
        return redirect('admin-search')->with('status', 'deleted successfully');
    }


    // delete user from user
    public function deleteUserFromUser ($id)
    {
        $admin = Profiles::find($id);
        $destination='images/users/' . $admin->profile_pic;
        $destination1='images/user-img-1/' . $admin->image_1;
        $destination2='images/user-img-2/' . $admin->image_2;

        if(File::exists($destination)){
            File::delete($destination);
        }
        if(File::exists($destination1)){
            File::delete($destination1);
        }
        if(File::exists($destination2)){
            File::delete($destination2);
        }

        $admin->delete();
        return redirect('login-form')->with('status', 'deleted successfully');
    }
}
