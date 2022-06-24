@extends('main_template')

@section('title')Данные с обратной формы@endsection

@section('content')

        <h2>Данные с обратной формы</h2>
        @foreach($feedback as $el)
            <div class="alert alert-warning">
                <h2>{{ $el->name }}</h2>
                <p>{{ $el->email }}</p>
                <p>{{ $el->message }}</p>
            </div>
        @endforeach

@endsection
