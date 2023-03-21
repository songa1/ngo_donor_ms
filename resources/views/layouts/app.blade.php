<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ngo-list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    
</head>
<body>
    <div class="container">
        <div class="header-part">
            <h2 class="logo">NGO MS</h2>
                <!-- <div class="menu">
                    <div class="profile-name">
                        <img src="./assets/images/TRAINING BANNER.gif" alt="Profile picture">
                        <a href="welcome.php">Name</a>
                    </div>
                        <a href="./dashboard/analytics.php?ngo=0">Admin</a>
                    <form method="POST" action="out.php">
                        <input type="submit" id="logout" value="Log out">
                    </form>
                </div> -->
                <div class="menu">
                    <a href="/">Login</a>
                    <a href="/register" id="register">Signup</a>
                </div>
        </div>
        @yield('content')
        <footer>
            <p>&copy; Achille Songa 2023</p>
        </footer>
    </div>
</body>
</html>