<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Mail;

class MainController extends Controller{

    // Контроллер для главной страницы
    public function home(){
        return view('home');
    }

    // Контроллер для страницы с формой обратной связи
    public function feedback(){
        $feedback = new Feedback();
        return view('feedback', ['feedback' => $feedback->all()]);
    }

    // Контроллер для страницы с заполенными данными с формы
    public function all_info_feedback(){
        $feedback = new Feedback();
        return view('all_info_feedback', ['feedback' => $feedback->all()]);
    }

    // Валидация введенных данных с форме
    public function feedback_check(Request $request){
        $valid = $request->validate([
            'name'=> 'required|min:2|max:100',
            'email'=> 'required|min:4|max:100',
            'message'=> 'required|min:15|max:500',
        ]);
        $review = new Feedback();
        $review->name = $request->input(key: 'name');
        $review->email = $request->input(key: 'email');
        $review->message = $request->input(key: 'message');

        // записываем данные в БД
        $review->save();

        // отправялем письмо с данными с формы
        Mail::send(['text' => 'mail'], ['name', 'web'], function ($message){
            $message->to('hask_21@bk.ru', 'Test')->subject('Заявка с формы обратной связи');
            $message->from('hask_21@bk.ru', 'Test');
        });
        return view('feedback_check');
    }
}
