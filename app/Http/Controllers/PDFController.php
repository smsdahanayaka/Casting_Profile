<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Models\Profiles;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function generatePDF($id)
    {
        $user = Profiles::find($id);
        $currentYear = now()->year;
        $birthYear = $user->date_of_birth;
        $age = $currentYear - $birthYear;

        if ($user) {
            $data = [
                'title' => 'Welcome to 35km-films',
                'date' => date('m/d/Y'),
                'users' => $user,
                'firstName' => $user->first_name,
                'image_1' => $user->image_1,
                'image_2' => $user->image_2,
                'profile_pic' => $user->profile_pic,
                'lastName' => $user->last_name,
                'personal_ID' => $user->personal_ID,
                'gender' => $user->gender,
                'date_of_birth' => $user->date_of_birth,
                'age' => $age,
                'whatsapp_number' => $user->whatsapp_number,
                'mobile_number' => $user->mobile_number,
                'email' => $user->email,
                'home_town' => $user->home_town,
                'height' => $user->height,
                'hair_color' => $user->hair_color,
                'eye_color' => $user->eye_color,
                'shoe_size' => $user->shoe_size,
                'pants_size' => $user->pants_size,
                'top_size' => $user->top_size,
                'dress_size' => $user->dress_size,
                'action_experience' => $user->action_experience,
                'special_skills' => $user->special_skills,
                'ads_films_tv_shows' => $user->ads_films_tv_shows,
                'facebook' => $user->facebook,
                'instagram' => $user->instagram,
                'tiktok' => $user->tiktok,
                'youtube' => $user->youtube,
            ];

            if (!empty($user->profile_pic)) {
                $data['profile_pic'] = $user->profile_pic;
            } else {
                // Handle the case where the profile picture is not available.
                // You can set a default image or display a message.
                $data['profile_pic'] = '/images/1696792187.jpg'; // Replace with your default image path
            }

            if (!empty($user->image_1)) {
                $data['image_1'] = $user->image_1;
            } else {
                // Handle the case where the profile picture is not available.
                // You can set a default image or display a message.
                $data['image_1'] = '/images/1696792187.jpg'; // Replace with your default image path
            }

            if (!empty($user->image_2)) {
                $data['image_2'] = $user->image_2;
            } else {
                // Handle the case where the profile picture is not available.
                // You can set a default image or display a message.
                // src="{{ asset('images/users/' . $admin->profile_pic) }}"
                $data['image_2'] = '/images/1696792187.jpg'; // Replace with your default image path
            }


            $pdf = PDF::loadView('myPDF', $data);
            // dd($data);
            return $pdf->download($user->first_name . '-' . $user->last_name . '.pdf');

        } else {
            abort(404);
        }
    }
}
