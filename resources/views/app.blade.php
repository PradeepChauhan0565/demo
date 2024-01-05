<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- -----google font--- --}}
 
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@400;500&family=Roboto+Condensed:wght@300;400&display=swap" rel="stylesheet">
        {{-- ------------font-awesome--------- --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- ------------bootstrap--------- --}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
       {{-- ------------tailwind css--------- --}}
        <script src="https://cdn.tailwindcss.com"></script>

<style>
      /* ---------------utility class-------------- */
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        /* font-family: 'Lato', sans-serif; */
        /* font-family: 'Poppins', sans-serif; */
        font-family: 'Roboto Condensed', sans-serif; 
              
    }
    body{-webkit-font-smoothing:antialiased;}
      /* .flex{
            display: flex;
        }
        .align-items{
            align-items: center;
        }
        .space-between{
            justify-content: space-between;
        }
        .text-center{
            text-align: center;
        }
        .justify-center{
            justify-content: center;
        } */
        .container0{
            max-width: 1150px;
            margin: auto;
            
        }
        /* .card-wrapper{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            grid-column-gap:15px;
            grid-row-gap: 15px; 
        } */

        /* -----------------home----------------- */
        




        /* -----------------about----------------- */
        .about h1{
            clip-path: polygon(0 0, 15% 0, 12% 100%, 0 100%);
            
        }
        /* .about-head{box-shadow: 10px 10px lightblue;} */
        

</style>

</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>
</html>