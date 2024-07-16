@extends('layouts.app')

@section('page-title')
    Magazines
@endsection

@section('main-content')
    <main id="main-app">

        <div class="jumbo">
            <article>
                <div>
                    <p>current series</p>
                </div>
            </article>
        </div>

        <div class="content">
            @foreach ($magazines as $magazine)

            @endforeach
        </div>

        <div class="more-content">
            <button>load more</button>

        </div>
    </main>
@endsection
