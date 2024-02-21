@extends('layouts.main')
@section('content')
    <h1>Sip</h1>
    <button onclick="sayHello()">Say Hello</button>
@endsection
@section('js-end')
    {{--    both work - pick your poison --}}
    <script type="text/javascript" src="{{ asset('js/sip.1.js') }}"></script>
    {{--    <script type="text/javascript" src="js/sip.1.js"></script>--}}
@endsection
