<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('css.pdfStyle')
    <title>PDF Doc</title>
</head>

<body>

    <!--
The header element is used for the page headers which appear on each page.
-->
    <section>
        <div class="pdf-header">
            <h1>{{ $firstName }} {{ $lastName }}</h1>
            <h6>{{ $personal_ID }}</h6>
        </div>
        <div class="pic-form">
            <img src="{{ public_path('images/users/' . $profile_pic) }}" alt="Profile Picture"
                 margin="10px">
            <img src="{{ public_path('images/user-img-1/' . $image_1) }}" alt="Profile Picture"
                 margin="10px">
            <img src="{{ public_path('images/user-img-2/' . $image_2) }}" alt="Profile Picture"
                 margin="10px">
        </div>
        <hr>
    </section>
    <section>
        <!-- contact infor -->
        <h3>Contact Information</h3>
        <table>
            <tbody>
                {{-- 1st row --}}
                <tr>
                    <td>
                        <p><b>Gender</b></p>
                    </td>
                    <td>
                        <p>:{{ $gender }}</p>
                    </td>
                </tr>
                {{-- 2nd row --}}
                <tr>
                    <td>
                        <p><b>Date of Birth</b></p>
                    </td>
                    <td>
                        <p>:{{ $date_of_birth }}</p>
                    </td>
                </tr>
                {{-- 3rd row --}}
                <tr>
                    <td>
                        <p><b>Age</b></p>
                    </td>
                    <td>
                        <p>:{{ $age }}</p>
                    </td>
                </tr>
                {{-- 4th row --}}
                <tr>
                    <td>
                        <p><b>Whatsapp Number</b></p>
                    </td>
                    <td>
                        <p>:{{ $whatsapp_number }}</p>
                    </td>
                </tr>
                {{-- 4th row --}}
                <tr>
                    <td>
                        <p><b>Mobile Number</b></p>
                    </td>
                    <td>
                        <p>:{{ $mobile_number }}</p>
                    </td>
                </tr>
                {{-- 5th row --}}
                <tr>
                    <td>
                        <p><b>Email</b></p>
                    </td>
                    <td>
                        <p>:{{ $email }}</p>
                    </td>
                </tr>
                {{-- 6th row --}}
                <tr>
                    <td>
                        <p><b>Home Town</b></p>
                    </td>
                    <td>
                        <p>:{{ $home_town }}</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr />

        <!-- sizing -->
        <h3>Sizing</h3>
        <table>
            <tbody>
                {{-- 1st row --}}
                <tr>
                    <td>
                        <p><b>Height</b></p>
                    </td>
                    <td>
                        <p>:{{ $height }}</p>
                    </td>
                </tr>
                {{-- 2nd row --}}
                <tr>
                    <td>
                        <p><b>Hair Color</b></p>
                    </td>
                    <td>
                        <p>:{{ $hair_color }}</p>
                    </td>
                </tr>
                {{-- 3rd row --}}
                <tr>
                    <td>
                        <p><b>Eye Color</b></p>
                    </td>
                    <td>
                        <p>:{{ $eye_color }}</p>
                    </td>
                </tr>
                {{-- 4th row --}}
                <tr>
                    <td>
                        <p><b>Shoe Size</b></p>
                    </td>
                    <td>
                        <p>:{{ $shoe_size }}</p>
                    </td>
                </tr>
                {{-- 5th row --}}
                <tr>
                    <td>
                        <p><b>Pants Size</b></p>
                    </td>
                    <td>
                        <p>:{{ $pants_size }}</p>
                    </td>
                </tr>
                {{-- 6th row --}}
                <tr>
                    <td>
                        <p><b>Top Size</b></p>
                    </td>
                    <td>
                        <p>:{{ $top_size }}</p>
                    </td>
                </tr>
                {{-- th row --}}
                <tr>
                    <td>
                        <p><b>Dress Size</b></p>
                    </td>
                    <td>
                        <p>:{{ $dress_size }}</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <hr>


    <section>
        <h3>Skills</h3>
        <h4><b>Action Experience (If Any):</b></h4>
        <p>{{ $action_experience }}</p><br>

        <h4><b>Special Skills:</b></h4>
        <p> {{ $special_skills }}</p><br>

        <h4><b>Ads/Films/TV Shows:</b></h4>
        <p> {{ $ads_films_tv_shows }}</p><br>

        <hr>

        <h3>Social Media</h3>

        <table>
            <tr>
                <td><b>Facebook<b></td>
                <td>:{{ $facebook }}</td>
            </tr>
            <tr>
                <td><b>Instagram<b></td>
                <td>:{{ $instagram }}</td>
            </tr>
            <tr>
                <td><b>Tik Tok<b></td>
                <td>:{{ $tiktok }}</td>
            </tr>
            <tr>
                <td><b>YouTube<b></td>
                <td>:{{ $youtube }}</td>
            </tr>
        </table>


        <hr>
    </section>

</body>

</html>
