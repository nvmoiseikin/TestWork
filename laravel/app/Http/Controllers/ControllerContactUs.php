<?php

namespace App\Http\Controllers;

//use App\Http\Requests\ContactUsVal as Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;
use Validator;
//use App\Mail\ContactUsMail;

class ControllerContactUs extends Controller
{
    public function index(Request $request)
    {

        //return redirect(route('contacts'));
    }

    public function ship(Request $request)
    {
        $request->validate([
            'name' => 'required|max:127',
            'email' => 'required|max:127|email',
            'text' => 'required|max:1023'
        ]);
        return response()->json(['success'=>'Done!']);

        $data = $request->all();

            try {
                Mail::send('mail', ['data' => $data], function ($message) use ($data) {
                    $mail_admin1 = env('MAIL_ADMIN1');
                    $mail_admin2 = env('MAIL_ADMIN2');
                    //$message->from($data['email']);

                    $message->to($mail_admin1)->replyTo($data['email'], $data['name'])->subject('Вопрос с сайта');
                    $message->to($mail_admin2)->replyTo($data['email'], $data['name'])->subject('Вопрос с сайта');

                    return redirect('/#form')->with('myflag', '1');
                    //var_dump($data);
                });
            } catch (Exception $e) {
                // var_dump($e);
                ///die('not success');
            }
            return 'shipped';


        //$url = URL::route('home') . '#form';
        //return Redirect::to($url);


        //return redirect()->back();
    }
}