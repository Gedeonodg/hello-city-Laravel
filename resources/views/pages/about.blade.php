@extends ('layouts.base',['title'=>"About Us "])

@section('content')


<img src="{{ asset('/images/Gedeon.JPG')}} " alt="Gedeon" class="h-20 rounded-full shadow-md my-12">

<h2 class="mb-5 text-gray-800">
    Built with <span class="text-pink-500">&hearts;</span> by GEDEON OUEDRAOGO

</h2>

<p>
    <a href=" {{route("home") }}"class="text-indigo-800 underline ">Revenir à la page d'acceuil</a>
</p>


@endsection
