<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Inquiry;
use function GuzzleHttp\json_decode;

class InquiryController extends Controller
{
    public static function inquiryTypes()
    {
        return [
            1 => 'Внедряване на Система за управление',
            2 => 'Изпълнение на изисквания на НАТО',
            3 => 'Продуктово съответствие и СЕ маркировка',
            4 => 'Друг интерес'
        ];
    }
    public function store()
    {
        Inquiry::create(request()->all());
        // Send mail
        $this->sendEmail();
        return redirect('inquiry');
    }

    public function recaptcha()
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => '6Lc8KqIUAAAAALiKWRani8Lz8ooP21tqJN7NMX8_',
            'responce' => request('recaptcha')
        ];

        $options = [
            'http' => [
                'header' => "Content-type: aplication/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);
        if ($resultJson->success != true) {
            return back()->with('message', 'Captcha error');
        }
    }

    public function sendEmail()
    {
        $data['title'] = "This is Test Mail Tuts Make";

        Mail::send('emails.new_inquiry', $data, function ($message) {

            $message->to('info@seminari365.com', 'qac-bg.com inquiry')

                ->subject('Tuts Make Mail');
        });

        if (Mail::failures())
        {
            return 'Sorry! Please try again latter';
        } else {
            return 'Great! Successfully send in your mail';
        }
    }
}
