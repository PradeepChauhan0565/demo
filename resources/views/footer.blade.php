<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        footer{background-color: white;}
        .foot-wrapperr{
            display: grid;
            grid-template-columns: repeat(5,1fr);
            grid-column-gap:20px;
            
        }
        .footer-menu h1{
            font-size: 19px;
            border-bottom: 1px solid rgb(243, 11, 11);
            margin-bottom: 10px;
            margin-top: 30px;
        }
        /* .footer-menu .content ul{background-color: aqua;} */
        .footer-menu .content ul li{
            list-style: none;
           
        }
        .footer-menu .content ul li a{
            text-decoration: none;
            display: block;
            line-height: 30px;
            transition: 0.5s;
            color: black;
            
        
        }
        .footer-menu .content ul li a:hover{
            color: rgb(231, 24, 24);
            transform: translateX(10px);
        }
        .footer-menu .content .icon1{
            margin-right: 16px;
        }
        .footer-menu .content .icon2{
            margin-right: 9px;
        }
        .footer-menu .content .icon3{
            margin-right: 13px;
        }
        .footer-menu .content ul li a:hover{transform:scaleX(10px;)}
       
    </style>
</head>
<body>
    <footer>
        <div class="bg-red-600">
            <h1 class="py-2 text-center text-3xl text-white">You're in good company.</h1>
        </div>
        <div class="container0">
            <div class="foot-wrapperr flex">    
            <div class="footer-menu">
                
                <div class="content ">
                    <ul class="mt-9">
                        <a href="home"><img src="images/log1.png" alt="" width="140px;" class="mb-5"></a>
                        <li><a href="tel:9819189901">Contact No - 9819189901</a></li>
                        <li><a href="">Are you a Job Seeker?  FIND JOBS</a></li>
                       
                    </ul>
                </div>
            </div>
            <div class="footer-menu"> 
                <h1>QUICK LINKS</h1>
                <div class="content ">
                    <ul>
                        <li><a href="">About US</a></li>
                        <li><a href="">Our Vision</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Job Openings</a></li>
                        <li><a href="">Commercial Terms</a></li>
                        <li><a href="">Contact US</a></li>
                    </ul>
                </div>
            </div>
                <div class="footer-menu">
                    <h1>EMPLOYERS</h1>
                    <div class="content ">
                        <ul>
                            <li><a href="">Post a Job</a></li>
                            <li><a href="">Create an Account</a></li>
                            <li><a href="">My Dashboard</a></li>
                            
                        </ul>
                    </div>
                </div>
                    <div class="footer-menu">
                        <h1>RESOURCES</h1>
                        <div class="content ">
                            <ul>
                                <li><a href="">Employer Resources</a></li>
                                <li><a href="">Resume Library</a></li>
                                <li><a href="">2019 .Jobs Media Kit</a></li>
                            </ul>
                        </div>
                    </div>
                        <div class="footer-menu">
                            <h1>FOLLOW US</h1>
                            <div class="content ">
                                <ul>
                                    <li><a href=""><i class="icon1 fa-brands fa-facebook-f"></i><span>Facebook</span></a></li>
                                    <li><a href=""><i class="icon2 fa-brands fa-twitter"></i><span>Twitter</span></a></li>
                                    <li><a href=""><i class="icon3 fa-brands fa-linkedin-in"></i><span>LinkedIn</span></a></li>
                            
                                  
                                </ul>
                            </div>
                        </div>
            </div>
        </div>
    </footer>
    
</body>
</html>