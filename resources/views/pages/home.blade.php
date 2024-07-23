@extends ("layouts.base")

@section('content')
    <img src="{{asset('images/Burkina.jpeg')}}" alt="Burkina" class="rounded shadow-md h-32 mt-12">


    <h1 class="text-indigo-800 text-3xl sm:text-5xl font-semibold mt-5">Hello from Burkina</h1>
        <p class="text-lg text-gray-800">It's currently {{date('H:i:s')}}.</p>
        {{--
        @section("cop")
        <a href=" {{route("about") }} ">A propos de nous</a>
        @endsection --}}
            
@endsection
   