<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/analytics.css') }}">
    <link rel="stylesheet" href="{{ asset('css/funds.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ngo-list.css') }}">
    <link rel="stylesheet" href="{{ asset('css/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    
</head>
<body>
    <div class="container">
        <div class="header-part">
            <h2 class="logo">NGO MS</h2>
                <div class="menu">
                    <a href="/">Login</a>
                    <a href="/register" id="register">Signup</a>
                </div>
        </div>
        <div class="content-part">
            <div class="left">
                <div class="sidebar-menu">
                    <a href="/dashboard">Analytics</a>
                    <a href="/dashboard/ngos">NGO</a>
                    <a href="/dashboard/beneficiaries">Beneficiaries</a>
                    <a href="/dashboard/donors">Donors</a>
                    <a href="/dashboard/funds">Funds</a>
                    <a href="/dashboard/employees">Employees</a>
                    <a href="/dashboard/settings">Settings</a>
                </div>
            </div>
            @yield('dashboard')
        </div>
        <footer>
            <p>&copy; Achille Songa 2023</p>
        </footer>
    </div>
</body>
</html>