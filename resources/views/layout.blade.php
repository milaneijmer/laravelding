<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite (["resources/app.css", "resources/app.js"])
    <title>Document</title>
</head>
<body>
<header class="hoi">
<a href="/"><img src="{{ Vite::asset('resources/images/LEGOLAND_PARKS_LOGO.svg') }}" class="logo"></a> 
    <div class="header-lijst">
    <ul class="menu">
        <div class="item"><a href="/tickets"><li>Tickets</li></a></div>
        <div class="item"><a href="/attracties"><li>Attracties</li></a></div>
        <div class="item"><a href="/tijden"><li>Tijden</li></a></div>
        <div class="item"><a href="/contact"><li>Contact</li></a></div>
        <div class="item"><a href="/accomodaties"><li>Accomodaties</li></a></div>
    </ul>
    
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</div>
</header>
@yield('content')

</body>

    <style>
        body {
                margin: 0px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .hoi {
                background-color: gold;
                height: 100px;
                margin: 0;
            }
            .logo{
                padding: 10px;
                padding-left: 35px;
                height: 70px;
            }
            .header-lijst
            {
                width: 600px;
                float: right;
                font-size: large;
            }
            ul{
                list-style-type: none;
                display: flex;
                justify-content: space-around;
                padding: 0;
            }
            li
            {
                margin-top: 25px;
            }
            a
            {
                text-decoration: none;
                color: black;
            }
            .hamburger {
                display: none;
            }

            .bar {
                display: block;
                width: 25px;
                height: 3px;
                margin: 5px auto;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
                background-color: #101010;
            }
            @media only screen and (max-width: 819px) {
        
        .header-lijst {
            width: auto;
            height: 100%;
            align-content: center;
        }
        .menu {
            position: fixed;
            left: -100%;
            top: 5rem;
            flex-direction: column;
            background-color: #fff;
            width: 100%;
            border-radius: 10px;
            text-align: center;
            transition: 0.3s;
            box-shadow:
                0 10px 27px rgba(0, 0, 0, 0.05);
        }

        .menu.active {
            left: 0;
        }

        .item {
            margin: 2.5rem 0;
        }

        .hamburger {
            display: block;
            cursor: pointer;
            margin-right: 20px;
        }

    }
    </style>

    <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".menu");

    hamburger.addEventListener("click", mobileMenu);

    function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }
    </script>
</html>