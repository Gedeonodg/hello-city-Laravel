@extends ("base")

@section('content')
@section('title',env("APP_NAME"))



    <h1>Hello from Burkina</h1>
        <p>It's currently {{date('H:i:s')}}.</p>

        @section("cop")
            <a href="/about-us">A propos de nous</a>
        @endsection
            
@endsection
   