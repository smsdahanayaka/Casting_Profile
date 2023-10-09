<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            font-size: 24px;
        }
        /* Add more styles as needed */
    </style>
</head>
<body>
    <h1>User Details</h1>
    <p><strong>Profile Picture:</strong> <img src="{{ asset('images/users/' . $user->profile_pic) }}" width="100"></p>
    <p><strong>Name:</strong> {{ $user->first_name }} {{ $user->last_name }}</p>
    <p><strong>Username:</strong> {{ $user->username }}</p>
    <p><strong>Gender:</strong> {{ $user->gender }}</p>
    <!-- Add more user details as needed -->
</body>
</html>
