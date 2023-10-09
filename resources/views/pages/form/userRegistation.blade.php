@extends('pages.home.homePageRegistation')

@section('form')
    <!-- registatiion form -->

    <div class="container body-container">
        <!-- registation form -->
        <form class="row g-3">
            <p class="reg-txt">Registation Form</p>

            <!-- select profile image -->
            <div class="registation-form form-contact-information profile-img row g-3">
                <img src="lib/profilePic.jpg" alt="" id="img-id">
                <div class="col-md-6">
                    <label for="formFileSm" class="form-label">Input profile picture</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div>
            </div>
            <hr>

            <!-- personal details -->
            <div class="registation-form form-name row g-3">
                <label class="name-lable">Contact Information</label>
                <!-- first name -->
                <div class="col-md-4 fname">
                    <label for="inputEmail4" class="form-label">First name</label>
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name" required>
                </div>

                <!-- last name -->
                <div class="col-md-4 lname">
                    <label for="inputEmail4" class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required>
                </div>

                <!-- user name -->
                <div class="col-md-4 userName">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername"
                            aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                </div>
                <!-- gender -->
                <div class="profile-img col-md-4 gender">

                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            male
                        </label>
                    </div>
                    <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            female
                        </label>
                    </div>
                </div>

                <!-- date of birth  -->
                <div class="col-md-4 dateOfBirth">
                    <label for="validationCustom02" class="form-label">Date of birth</label>
                    <input type="text" class="form-control" id="validationCustom02" value="yyyy-mm-dd" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <!-- age -->
                <div class="col-md-4 age">
                    <label for="validationCustom02" class="form-label">Age</label>
                    <input type="text" class="form-control" id="validationCustom02" value="age" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <!-- mobile number -->
                <div class="col-md-4">
                    <label class="form-label">Whatsapp number:</label>
                    <input class="form-control" id="phone" type="tel" name="phone"
                        pattern="+94[0-9]{2}[0-9]{4}[0-9]{3}" placeholder="+94714567871" />

                </div>
                <!-- email -->
                <div class="col-md-4">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <!-- home town -->
                <div class="col-md-4">
                    <label for="exampleInputEmail1" class="form-label">Home town</label>
                    <input type="text" class="form-control" id="validationCustom02" value="Home town" required>
                </div>
                <hr>
            </div>

            <!-- sizing -->
            <div class="registation-form form-sizing row g-3">
                <label class="name-lable">Sizing</label>
                <!-- height -->
                <div class="col-lg-4 col-md-4 fname">
                    <label for="inputEmail4" class="form-label">Height</label>
                    <input type="text" class="form-control" placeholder="Height" aria-label="Height">
                </div>

                <!-- hair color -->
                <div class="col-lg-4 col-md-4 fname">
                    <label for="inputEmail4" class="form-label">Hair Color</label>
                    <input type="text" class="form-control" placeholder="Hair Color" aria-label="Hair Color">
                </div>

                <!-- eye color -->
                <div class="col-lg-4 col-md-4 fname">
                    <label for="inputEmail4" class="form-label">Eye color</label>
                    <input type="text" class="form-control" placeholder="Eye color" aria-label="Eye color">
                </div>

                <!-- shoe size -->
                <div class="col-lg-6 col-md-6 fname">
                    <label for="inputEmail4" class="form-label">Shoe size</label>
                    <input type="text" class="form-control" placeholder="Shoe size" aria-label="Shoe size">
                </div>

                <!-- pants size -->
                <div class="col-lg-6 col-md-6 fname">
                    <label for="inputEmail4" class="form-label">Pants size</label>
                    <input type="text" class="form-control" placeholder="Pants size" aria-label="Pants size">
                </div>

                <!-- top size -->
                <div class="col-lg-6 col-md-6 fname">
                    <label for="inputEmail4" class="form-label">Top size</label>
                    <input type="text" class="form-control" placeholder="Top size" aria-label="Top size">
                </div>

                <!-- dress size -->
                <div class="col-lg-6 col-md-6 fname">
                    <label for="inputEmail4" class="form-label">Dress size</label>
                    <input type="text" class="form-control" placeholder="Dress size" aria-label="Dress size">
                </div>
                <hr>
            </div>

            <!-- skills -->
            <div class="registation-form form-skills row g-3">
                <label class="name-lable">Skills</label>

                <!-- Action experience -->
                <div class="col-lg-12 col-md-12 form-floating">
                    <div class="div">
                        <label for="name-lable floatingTextarea">Action Exprience (If Any)</label>
                    </div>
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>

                </div>

                <!-- Special skils -->
                <div class="col-lg-12 col-md-12 form-floating">
                    <div class="div"> <label for="name-lable floatingTextarea">Special skills</label></div>
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>

                </div>

                <!-- Ads/films/tv show -->
                <div class="col-lg-12 col-md-12 form-floating">
                    <div class="div">
                        <label for="name-lable floatingTextarea">Ads / Films / TV Shows done in past two years(please enter
                            companies /Advertisers here)</label>
                    </div>

                    <textarea class="form-control" placeholder="add here" id="floatingTextarea"></textarea>

                </div>
                <hr>
            </div>

            <!-- Social Media names -->
            <div class="registation-form form-social-media row g-3">
                <label class="name-lable">Social Media</label>

                <!-- face book -->
                <div class="social col-lg-6 col-md-6">
                    <i class="fa-brands fa-facebook" style="color: #005af5;"></i>
                    <input type="text" class="form-control" placeholder="face book" aria-label="face book">
                </div>
                <!-- instagram -->
                <div class="social col-lg-6 col-md-6">
                    <i class="fa-brands fa-instagram" style="color: #d60000;"></i>
                    <input type="text" class="form-control" placeholder="Instagram" aria-label="face book">
                </div>
                <!-- tik tok -->
                <div class="social col-lg-6 col-md-6">
                    <i class="fa-brands fa-tiktok"></i>
                    <input type="text" class="form-control" placeholder="Tik Tok" aria-label="face book">
                </div>
                <!-- you tube -->
                <div class="social col-lg-6 col-md-6">
                    <i class="fa-brands fa-youtube" style="color: #b30000;"></i>
                    <input type="text" class="form-control" placeholder="You Tube" aria-label="face book">
                </div>
                <hr>
            </div>

            <!-- Remarks -->
            <div class="registation-form form-social-media row g-3">
                <label class="name-lable">Remark</label>

                <!-- Action experience -->
                <div class="col-lg-12 col-md-12 form-floating">
                    <label for="name-lable floatingTextarea">Remark</label>
                    <textarea class="form-control" placeholder="" id="floatingTextarea"></textarea>

                </div>
                <hr>
            </div>
            <hr>

            <!-- button/password -->
            <div class="registation-form form-social-media row g-3">
                <!-- password -->
                <div class="col-lg-6 col-md-6">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <!-- button -->
                <div class="social col-lg-6 col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <hr>
            </div>
        </form>
    </div>

@endsection
