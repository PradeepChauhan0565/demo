<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

.menu{
            background-color: white;
            padding: 0 80px;
            width: 100%;
            margin: auto;
            position: fixed;
            /* box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2), 0 3px 15px 0 rgba(0, 0, 0, 0.10); */
            border-bottom: 1px solid red;
        }
        .menu-right{
            width: 80%;
            margin: auto;
        }
        .menu-right a{
            text-decoration: none;
            color: black;
            display: inline-block;
            padding: 15px 0;
            margin: 0 15px;
            position: relative;
            transition: 0.8s ease;
        }
        .menu-right a::after{
            content: '';
            width: 100%;
            height: 2px;
            left: 0;
            bottom: 15px;
            background-color: rgb(248, 10, 10);
            position:absolute;
            transform: scale(0, 1);
            transition: transform 0.7s ease;
        }
        .menu-right a:hover::after{transform: scale(1, 1);}
        .menu-right a:hover{
            /* background-color:lightgray; */
            color: rgb(248, 10, 10);
        }
        .menu-right .active{color:rgb(248, 10, 10);}
        .logo{padding: 2px 0;}

    </style>
</head>
<body>
    <div class="menu z-20">
        <div class="flex align-items ">
            <div class="logo">
               <a href="home"><img src="images/log1.png" alt="" width="110px;"></a> 
            </div> 
                <div class="menu-right text-center">
                  <a href="about" class="{{ (request()->is('about')) ? 'active' : '' }}">About Us</a>
                  <a href="our-vision" class="{{ (request()->is('our-vision')) ? 'active ' : '' }}">Our Vision</a>
                  <a href="services" class="{{ (request()->is('services')) ? 'active ' : '' }}">Services</a>
                  <a href="job-opening" class="{{ (request()->is('job-opening')) ? 'active ' : '' }}">Job Openings</a>
                  <a href="commercial-terms" class="{{ (request()->is('commercial-terms')) ? 'active ' : '' }}">Commercial Terms</a>
                  <a href="contact" class="{{ (request()->is('contact')) ? 'active ' : '' }}">Contact Us</a>
                </div>
        </div>

    </div>
</body>
</html>