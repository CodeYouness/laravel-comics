@extends('layouts.app')

@section('page-title')
    Magazines
@endsection

@section('main-content')
    <div>
        @foreach ($magazines as $magazine)

        @endforeach
    </div>
@endsection
