@extends ("base")

@section('content')
@section('title',env("APP_NAME"))
    <img src="{{asset('images/Burkina.jpeg')}}" alt="Burkina">


    <h1>Hello from Burkina</h1>
        <p>It's currently {{date('H:i:s')}}.</p>
        {{--
        @section("cop")
        <a href=" {{route("about") }} ">A propos de nous</a>
        @endsection --}}
            
@endsection
   