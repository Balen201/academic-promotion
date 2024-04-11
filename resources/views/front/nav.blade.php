<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* CSS Styles */
        body, html {
            margin: 20 !important ;
            padding: 20 !important ;
        }
        .navbar {
            background-color: #000000 !important;
            position: fixed;
            width: 100%;
            z-index: 20;
            top: 0;
            left: 0;
            border-bottom: 1px solid #4e586c;
        }
        .dark-bg-gray-900 {
            background-color: #111827;
        }
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 1rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            display: flex;
            align-items: center;
            margin-right: 1rem;
        }
        .logo img {
            height: 2rem;
        }
        .logo span {
            font-size: 1.25rem;
            font-weight: 600;
            color: #ffffff;
        }
        .menu {
            display: flex;
            align-items: center;
        }
        .menu button {
            background-color: #DC2626;
            border: none;
            color: #ffffff;
            font-weight: 600;
            font-size: 0.875rem;
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            margin-left: 1rem;
            cursor: pointer;
        }
        .menu button:hover {
            background-color: #EF4444;
        }
        .menu button:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.5);
        }
        .menu-toggle {
            display: none;
        }
        .menu-list {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            justify-content: center;
            margin-top: 15px; /* Space between each li */
        }
        .menu-list li {
            margin-right: 15px; /* Space between each li */
        }
        .menu-list li:last-child {
            margin-right: 0;
        }
        .menu-list li a {
            color: #ffffff;
            font-weight: 600;
            font-size: 0.875rem;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
        }
        .menu-list li a:hover {
            background-color: #F3F4F6;
            color: #000000;
        }
        .menu-list li a:focus {
            outline: none;
            box-shadow: 0 0 0 2px #E5E7EB;
        }
        .menu-list li.active a {
            background-color: #3B82F6;
            color: #ffffff;
        }
        .menu-list li.active a:hover {
            background-color: #2563EB;
        }
        .menu-list li.active a:focus {
            box-shadow: 0 0 0 2px #93C5FD;
        }
        @media (max-width: 768px) {
            .menu {
                display: none;
            }
            .menu-toggle {
                display: block;
                border: none;
                background: none;
                cursor: pointer;
            }
            .menu-toggle svg {
                fill: #6B7280;
                width: 1.25rem;
                height: 1.25rem;
            }
            .menu-list {
                flex-direction: column;
                background-color: #111827;
                position: absolute;
                top: 4rem;
                left: 0;
                width: 100%;
                padding: 0.5rem 0;
                display: none;
            }
            .menu-list.active {
                display: flex;
            }
            .menu-list li {
                margin: 0;
                text-align: center;
            }
            .menu-list li a {
                display: block;
                padding: 1rem;
            }
        }
    </style>







</head>
<body>

<nav class="navbar bg-white dark-bg-gray-900">
    <div class="container">
        <div class="logo">
            <img src="https://banner2.cleanpng.com/20180513/ffw/kisspng-salahaddin-university-erbil-university-of-kurdista-5af8df4b053a60.9390221715262595310214.jpg" alt="salahadin Logo">
            <span>salahadin</span>
        </div>
        <button class="menu-toggle" aria-label="Toggle Menu">
            <svg viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="menu">
            <ul class="menu-list">
                <li><a href="{{ route('dashboard') }}" class="active">سەرەکی</a></li>
                <li><a href="{{ route('personal.showone') }}">  پێشکەشکردن</a></li>
                <li><a href="{{ route('contact') }}">داواکاری</a></li>
            </ul>
            <button><a href="{{ route('user.logout') }}" style="text-decoration: none;">دەرچوون</a></button>

        </div>
    </div>
</nav>


