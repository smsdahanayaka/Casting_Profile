    <!-- header -->
    <section>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <div class="topnav" id="myTopnav">
            <a href="{{ url('') }}" class="active">Dashboard</a>
            <a href="{{ url('add-admin') }}">Add Admins</a>
            <a href="{{ url('view-admin') }}">View Admins</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </section>
