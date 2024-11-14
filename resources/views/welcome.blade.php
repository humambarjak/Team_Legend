<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .hero {
            background-image: url('{{ asset(path: 'storage/transfers/GOAT.jpg') }}'); /* Correct path for your background image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #fff; /* Adjust text color */
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            color: #fff;
        }

        .hero a {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); /* Dark blue gradient */
            color: white;
            padding: 1rem 2rem;
            font-size: 1.2rem;
            border-radius: 50px;
            text-decoration: none;
            margin-right: 10px;
            display: inline-block;
            margin-bottom: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow */
            transition: all 0.3s ease; /* Smooth transition on hover */
        }

        .hero a:hover {
            background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%); /* Inverse gradient on hover */
            transform: translateY(-5px); /* Slight lift effect on hover */
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3); /* Enhance shadow on hover */
        }


        .hero a:active {
            transform: translateY(-2px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .navigation {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .navigation a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-weight: 600;
        }

        .navigation a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Hero Section -->
    <div class="hero">
        <h1>THE GOAT</h1>
        <p>Welcome to football club</p>
        <a href="{{ route('register') }}">Register</a>
        <a href="{{ route('login') }}">Login</a>
    </div>
</body>
</html>
