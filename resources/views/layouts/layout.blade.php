<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #sidebar {
            position: fixed; 
            left: 0; 
            top: 0; 
            height: 100%; 
            width: 200px; 
            background-color: white; 
            overflow-y: auto; 
            padding-top: 20px; 
        }

        #sidebar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
            margin-top: 50px;
        }

        #sidebar li a {
            display: block;
            color:#000;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 80px;
        }

        #sidebar li a:hover{
            background-color: #5A7B6E;
            color:white;
        }

        #navbar {
            position: fixed; 
            left: 0; 
            top: 0; 
            width: 100%; 
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        #navbar #logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        #navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            margin-right: 40px;

        }

        #navbar li {
            margin-left: 10px;
        }

        #navbar li a {
            display: block;
            color:#000;
            text-decoration: none;
        }

        #navbar li a:hover{
            background-color: #5A7B6E;
            color:white;
            border-radius: 80px;
            padding: 8px 16px;
        }

        .content {
            background-color:#E7F1F7;
            padding: 20px;
            padding-top: 40px;
        }
        main {
            margin-left:200px; 
        }
    </style>
</head>
<body>
    <div>
        <div>
            <!-- Sidebar -->
            <nav id="sidebar">
                <div>
                    <ul>
                        <li>
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ url('/profile') }}">Pemasukan</a>
                        </li>
                        <li>
                            <a href="{{ url('/settings') }}">Pengeluaran</a>
                        </li>
                        <li>
                            <a href="{{ url('/settings') }}">Kas</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main>
                <nav id="navbar">
                    <div id="logo">
                        Logo
                    </div>
                    <ul>
                        <li>
                            <a href="{{ url('/settings') }}">Settings</a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}">Logout</a>
                        </li>
                    </ul>
                </nav>

                <div class="content">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
