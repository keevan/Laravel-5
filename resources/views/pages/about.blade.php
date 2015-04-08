@extends('example')
@section('content')
<h1>About me</h1>

<h3>Using blade templating engine!</h3>

<h4> People I'm familiar with:</h4>
@if (isset($names))
    <ul>
        @foreach ($names as $name)
        <li>{{$name}}</li>
        @endforeach
    </ul>
@else
    <p>There are no names to display.</p>
@endif
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda libero modi nulla omnis, praesentium quae rem. Atque deserunt nisi, odio sapiente sed sequi velit. Consequatur cum illo iste laborum quo!
</p>
@endsection