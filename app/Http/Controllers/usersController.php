<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;

use PDF;


// Your code here


class usersController extends Controller
{
    // logout
    public function logout()
    {
        return view('pages.home.homePage');
    }

    // home page view
    public function main()
    {
        return view('pages.home.homePage');
    }

    // login page view
    public function login()
    {
        return view('pages.home.homePage');
    }


    // registation page view
    public function registation()
    {
        return view('pages.home.homePageRegistation');
    }

    // add user page view
    public function index()
    {
        return view('pages.home.homePageRegistation');
    }
    /*



    */
    // add users to database
    public function create(Request $request)
    {
        $admin = new users;

        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->username = $request->input('username');
        $admin->gender = $request->input('gender');
        $admin->date_of_birth = $request->input('date_of_birth');
        $admin->age = $request->input('age');
        $admin->whatsapp_number = $request->input('whatsapp_number');
        $admin->email = $request->input('email');
        $admin->home_town = $request->input('home_town');
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

        // set image
        if ($request->hasfile('profile_pic')) {
            $file = $request->file('profile_pic');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/users/', $filename);
            $admin->profile_pic = $filename;
        }

        // save all data
        $admin->save();
        return redirect()->back()->with('status', 'New user added successfully');
    }

    // Display the login form
    public function showLoginForm()
    {
        return view('pages.home.homePage'); // Assuming your login form is in a view named 'login.blade.php'
    }

    // Handle the login form submission
    public function loginfunction(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $AllUsers=users::all();
        $adminData = users::where('username', $credentials['username'])->first();

        if($adminData == null){
            return redirect()->back()->with('status', 'Invalid credentials. Please try again.');
        }else{
            if ( $adminData->password == $credentials['password']) {
                $status=$adminData->status;
                if ($status=="admin\r\n") {
                    return view('pages.dashboard.admin', compact('AllUsers'));
                } else {

                    return view('pages.dashboard.user', compact('adminData'));
                }


            }elseif($credentials['password']==null){
                return redirect()->back()->with('status', 'Invalid credentials. Please try again.');
            }else{
                return redirect()->back()->with('status', 'Invalid credentials. Please try again.');
            }
        }




    }



      // search

      public function search(Request $request)
      {
          $searchQuery = $request->input('query');

          // Fetch data from the database based on the searchQuery
          $AllUsers = users::where('first_name', 'like', '%' . $searchQuery . '%')
                           ->orWhere('last_name', 'like', '%' . $searchQuery . '%')
                           ->orWhere('username', 'like', '%' . $searchQuery . '%')
                           ->orWhere('gender', 'like', '%' . $searchQuery . '%')
                           ->orWhere('date_of_birth', 'like', '%' . $searchQuery . '%')
                           ->orWhere('whatsapp_number', 'like', '%' . $searchQuery . '%')
                           ->orWhere('age', 'like', '%' . $searchQuery . '%')
                           ->orWhere('email', 'like', '%' . $searchQuery . '%')
                           ->orWhere('home_town', 'like', '%' . $searchQuery . '%')
                           ->orWhere('height', 'like', '%' . $searchQuery . '%')
                           ->orWhere('hair_color', 'like', '%' . $searchQuery . '%')
                           ->orWhere('eye_color', 'like', '%' . $searchQuery . '%')
                           ->orWhere('shoe_size', 'like', '%' . $searchQuery . '%')
                           ->orWhere('pants_size', 'like', '%' . $searchQuery . '%')
                           ->orWhere('top_size', 'like', '%' . $searchQuery . '%')
                           ->orWhere('dress_size', 'like', '%' . $searchQuery . '%')
                           ->orWhere('facebook', 'like', '%' . $searchQuery . '%')
                           ->orWhere('instagram', 'like', '%' . $searchQuery . '%')
                           ->orWhere('tiktok', 'like', '%' . $searchQuery . '%')
                           ->orWhere('youtube', 'like', '%' . $searchQuery . '%')
                           ->get();

          return view('pages.dashboard.admin', compact('AllUsers'));
      }


    // update admin view
    public function updateView($id){
        $adminData=users::find($id);
        return view('pages.form.userProfileView',compact('adminData'));
    }

    public function updateDone(Request $request, $id){
        $admin = users::find($id);
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->username = $request->input('username');
        $admin->gender = $request->input('gender');
        $admin->date_of_birth = $request->input('date_of_birth');
        $admin->age = $request->input('age');
        $admin->whatsapp_number = $request->input('whatsapp_number');
        $admin->email = $request->input('email');
        $admin->home_town = $request->input('home_town');
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

       // set image
       if($request->hasfile('profile_pic')){

        // delete pic
        $destination='images/users/'.$admin->profile_pic;
        if(File::exists($destination)){
            File::delete($destination);

        }

        $file=$request->file('profile_pic');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('images/users/',$filename);
        $admin->profile_pic=$filename;
    }

        // save all data
        $admin->update();
        return redirect()->back()->with('status', 'updated successfully');
     }


    //  genarate pdf

public function generatePDF($userId)
{

    $user = users::find($userId); // Retrieve user details by ID

    if (!$user) {
        abort(404); // Handle the case where the user is not found
    }

    $pdf = App::make('dompdf.wrapper');

    // Load the user details template and extend it
    $html = view('pdf.PDF')->with('user', $user)->render();

    $pdf->loadHTML($html);

    return $pdf->stream();
}

}
