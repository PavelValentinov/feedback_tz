@extends('main_template')

@section('title')Форма обратной связи@endsection

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form class="contact-form" id="contact-form_1"  method="post" action="/feedback/check">
        @csrf
            <p class="contact-form__title">Форма обратной связи</p>
            <p class="contact-form__description"></p>
            <div class="contact-form__input-wrapper">
                <input name="name" type="text" class="contact-form__input contact-form__input_name"
                       placeholder="Введите ваше имя">
            </div>

            <div class="contact-form__input-wrapper">
                <input name="email" type="email" class="contact-form__input contact-form__input_email"
                       placeholder="Введите ваш email">
            </div>


            <div class="contact-form__input-wrapper">
                <textarea rows="8" cols="40" name="message" placeholder="Ваше сообщение" class="contact-form__textarea"></textarea>
            </div>


            <button class="contact-form__button" type="submit">Отправить</button>

    </form>


@endsection
