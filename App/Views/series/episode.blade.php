@extends('app')

@section('content')
    <h1>your id: {{$id}}</h1>
    @if($id == 3)
        <span>{{$id}}</span>
    @endif

@endsection




{{--    <title>my website <?php echo htmlspecialchars($slug)  ?> </title>--}}

