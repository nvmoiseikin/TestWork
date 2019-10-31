<?php

namespace App\Http\Controllers;

//use App\Http\Requests\ContactUsVal as Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;
use Validator;
use Illuminate\Http\Response;
use GuzzleHttp\Client;
//use App\Mail\ContactUsMail;

class ControllerContactUs extends Controller
{
    public function index(Request $request)
    {

        //return redirect(route('contacts'));
    }

    protected function checkRecaptcha($token, $ip)
    {
        $response = (new Client)->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret'   => config('recaptcha.secret'),
                'response' => $token,
                'remoteip' => $ip,
            ],
        ]);
        $response = json_decode((string)$response->getBody(), true);
        return $response['success'];
    }

    public function ship(Request $request)
    {
        $request->validate([
            'name' => 'required|max:127',
            'email' => 'required|max:127|email',
            'text' => 'required|max:1023'
        ]);


        if (config('recaptcha.enabled') && !$this->checkRecaptcha( $request->recaptchaToken, $request->ip())) {
            return  response()->json(['success' => 'Captcha is invalid.']);
        }
        else {

            $data = $request->all();
                //var_dump($data);

            try {
                Mail::send('mail', ['data' => $data], function ($message) use ($data) {
                    $mail_admin1 = env('MAIL_ADMIN1');
                    $mail_admin2 = env('MAIL_ADMIN2');
                    //$message->from($data['email']);

                    $message->to($mail_admin1)->replyTo($data['email'], $data['name'])->subject('Вопрос с сайта');
                    $message->to($mail_admin2)->replyTo($data['email'], $data['name'])->subject('Вопрос с сайта');

                    return response()->json(['success' => 'shipped']);
                });
            } catch (Exception $e) {

                return response()->json(['success' => 'not shipped']);
            }

        }
        //$url = URL::route('home') . '#form';
        //return Redirect::to($url);


        //return redirect()->back();
    }
}