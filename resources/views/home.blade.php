@extends('app')
@section('content')


<div class="home"> 
    
</div>
<div class="">

      <div class="relative">

        <img src="images/banner.jpg" alt="" style="height: 440px; width:100%">
        
        <h1 class="absolute top-36 left-72 -ml-2  text-5xl text-white">Find the Best Job Right Now.</h1>
        <div class="absolute top-52 left-72 ">
        <form action="" class="flex">
          <i class="fa-solid fa-magnifying-glass -mr-7  z-10 my-2 text-xl opacity-50"></i>
          <input type="text"  placeholder="search by skills" class="px-10 py-2 rounded-l outline-0 w-96">
          <button type="submit" class="py-2 bg-sky-400 px-2 rounded-r">Find Jobs</button>
        </form>
        </div>
        <div class="absolute top-72 left-72 -ml-2">
          <button class="bg-sky-400 px-10 py-2 rounded-md text-white text-xl"><i class="far fa-file mx-1"></i>Add your resume</button>
        </div>
     
      </div>
</div>


 
</div>


@endsection