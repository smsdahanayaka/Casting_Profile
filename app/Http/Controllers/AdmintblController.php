<?php

namespace App\Http\Controllers;

use App\Models\admintbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdmintblController extends Controller
{

    /**
     * Display a listing of the resource.
     */



    // home page view
    public function main()
    {
        return view('pages.home.homePage');
    }

    // add admin page view
    public function index()
    {
        return view('pages.adminregistation');
    }

    // view admins
    public function viewIndex()
    {
        return view('pages.adminview');
    }

    // add admin to database
    public function create(Request $request)
    {
        $admin=new admintbl;
        $admin->userName=$request->input('userName');
        $admin->firstName=$request->input('firstName');
        $admin->lastName=$request->input('lastName');
        $admin->email=$request->input('email');
        $admin->mobileNumber=$request->input('mobileNumber');
        $admin->password=$request->input('password');

        // set image
        if($request->hasfile('profileImage')){
            $file=$request->file('profileImage');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('images',$filename);
            $admin->profileImage=$filename;
        }

        // save all data
        $admin->save();
        return redirect()->back()->with('status','New admin added successfully');
    }


    public function getData()
    {
        $adminData=admintbl::all();
        return view('pages.adminview', compact('adminData'));
    }

    // search
    public function search(Request $request)
    {
        $searchQuery = $request->input('query');

        // Fetch data from the database based on the searchQuery
        $adminData = admintbl::where('firstName', 'like', '%' . $searchQuery . '%')
                         ->orWhere('mobileNumber', 'like', '%' . $searchQuery . '%')
                         ->orWhere('lastName', 'like', '%' . $searchQuery . '%')
                         ->orWhere('email', 'like', '%' . $searchQuery . '%')
                         ->get();

        return view('pages.adminview', compact('adminData'));
    }

    // update admin
    public function update($id){
        $updatAdmin=admintbl::find($id);
        return view('pages.adminupdate',compact('updatAdmin'));
    }

    public function updateDone(Request $request, $id){
        $adminUpdate=admintbl::find($id);
        $adminUpdate->userName=$request->input('userName');
        $adminUpdate->firstName=$request->input('firstName');
        $adminUpdate->lastName=$request->input('lastName');
        $adminUpdate->email=$request->input('email');
        $adminUpdate->mobileNumber=$request->input('mobileNumber');

        // set image
        if($request->hasfile('profileImage')){

            // delete pic
            $destination='images/'.$adminUpdate->profileImage;
            if(File::exists($destination)){
                File::delete($destination);

            }

            $file=$request->file('profileImage');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('images',$filename);
            $adminUpdate->profileImage=$filename;
        }

        // save all data
        $adminUpdate->save();
        return redirect()->back()->with('status','Update admin successfully');
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

    // admin
    public function admin()
    {
        return view('pages.adminhome');
    }

    // user
    public function user()
    {
        return view('pages.adminview');
    }


}
