@extends('layout.app')

@section('content')
     <h1>Home</h1>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae cum ducimus inventore magnam odio! Ab amet animi, commodi dicta excepturi fuga incidunt labore molestias numquam pariatur saepe ullam vero voluptates.</p>
@endsection

@section('sidebar')
   @parent
    <h3>This is appended sidebar</h3>
@endsection