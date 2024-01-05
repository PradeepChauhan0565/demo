@extends('app')
@section('content')
<div class="bg-cover bg-no-repeat">
    <img src="images/terms.jpg" alt="" style="width: 100%; height:380px;">
</div>

<div class="container0 mb-16">
    <div>
        <h1 class="text-6xl text-center mt-20 mb-10"><span class="text-red-600 ">Contact</span> Us</h1>
    </div>

    <div class="flex">
    <div class="w-3/12 bg-blue-100 px-5 py-2">
        <h1 class="mb-4 text-2xl">Contact Details</h1>
        <div class=" mb-4">A-1 Employment and Resource India Private Limited </div>
        
        <div class=""><a href="tel:9819189901"><i class="fa-solid fa-phone mr-2"></i>9819189901</a></div>
        <div class="mt-4"><a href="mailto:hr@a1employmentservices.com"><i class="fa-regular fa-envelope mr-2"></i>hr@a1employmentservices.com</a></div>
    </div>

    <div class="w-9/12 bg-red-100 px-10 ">
        @if(session()->has('msg'))
        <div class="w-1/2 bg-green-500 p-2 rounded"><h3>{{session('msg')}}</h3></div>
        @endif
        <h1 class="text-center mt-2 text-2xl">Contact Us</h1>
        <form action="{{route('employment.add')}}" method="GET">
         @csrf
        <input type="text" name="name" placeholder="Name" class="w-full border border-red-200 mt-4 py-2 px-2 focus:outline-none rounded "><br>
        <input type="email" name="email" placeholder="Email" class="w-full border border-red-200 mt-6 py-2 px-2 focus:outline-none rounded"><br>
        <input type="text" name="mobile" placeholder="Phone Number" class="w-full border border-red-200 mt-6 py-2 px-2 focus:outline-none rounded"><br>
        <textarea name="message" id="" cols="30" rows="7" placeholder="Message" class="w-full border border-red-200 mt-6 py-2 px-2 focus:outline-none rounded"></textarea>
        <h2 class="px-2 mt-4">For security, please enter the five letters/numbers from the image into the box below:</h2>
        <div class=" mt-6 mb-8  flex justify-center">
            <div>
            <input type="text" name="captcha" class="py-3 border border-red-200 mr-2 mb-2 px-2 focus:outline-none rounded"><br>
                <a href=""><h6 class="text-sm">Try another image</h6></a>
            </div>
            <div>
                <input type="text" placeholder="Captcha" class="py-3 px-2 border border-red-200 focus:outline-none rounded ">
            </div>
        </div>
        <div class="text-center">
            <input type="submit" name="submit" placeholder="Send" class="px-12 border border-red-200 py-3 mb-10 bg-red-500 rounded">
        </div>
    </form>
    </div>
</div>
</div>


@endsection