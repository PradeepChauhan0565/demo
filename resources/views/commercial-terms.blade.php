@extends('app')
@section('content')
<div>
    <img src="images/terms.jpg" alt="" style="width: 100%; height:380px;">
</div>
<div class="container0">
    
        <h1 class="text-center text-4xl mt-20"><span class="text-red-500">Commercial</span> Terms (Recruitment)</h1>
    
    <div class="flex grid grid-cols-3 gap-x-10 my-20">

        <div class="text-center   bg-sky-200 py-16 transition delay-200 duration-200 ease-in hover:bg-red-300 hover:drop-shadow-lg">
            <h2 class="text-3xl">Commercial Terms </h2>
            <p class="mt-5 px-10 leading-8 "> Placement Charges will be <span class="font-bold">6.33%</span>of the selected candidate’s gross annual income
                from the company for the all positions. 
                Taxes as applicable <span class="font-bold">(GST Tax will be extra)</span>
            </p>
        </div>

        <div class="text-center bg-sky-200  py-16 transition delay-200 duration-200 ease-in hover:bg-red-300 hover:drop-shadow-lg">
            <h2 class="text-3xl"> Procedure of payment </h2>
            <p class="mt-5 px-10 leading-8">
                Once the candidate joins the duty, an invoice will be raised in the name of firm.
                Your firm has to release the payment within 20 Days. of Joining.
                The cheque should be made in favor of <span class="font-bold">A 1 EMPLOYMENT AND RESOURCE INDIA</span> only
            </p>
        </div>

        <div class="text-center bg-sky-200   py-16 transition delay-200 duration-200 ease-in hover:bg-red-300 hover:drop-shadow-lg" >
            <h2 class="text-3xl">Replacements</h2>
            <p class="mt-5 px-10 leading-8">
                In the event that the candidate voluntarily terminates employment within 
                <span class="font-bold">60 Days</span> from date of joining, Service Provider
                will provide a free replacement for the same position
            </p>
        </div>
    </div>
</div>


@endsection