    <!-- header -->
    <section>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->

        <div class="topnav" id="myTopnav">
            <a href="#register" class="active">Register</a>
            <a href="{{ url('login-form') }}">Login</a>
            <a href="{{ url('about-form') }}">About</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </section>
