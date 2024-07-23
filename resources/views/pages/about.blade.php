@extends ('base')

@section('content')
@section('title',"About Us | ".config("app.name"))

<p>Built with &hearts; by Gedeon Ouedraogo</p>
<p><a href=" {{route("home") }}">Revenir à la page d'acceuil</a></p>

@endsection
