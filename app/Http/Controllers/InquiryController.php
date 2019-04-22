<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;

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
    public function store() {        
        Inquiry::create(request()->all());
        return redirect('inquiry');
    }
}
