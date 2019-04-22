<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [ 'contact_person', 'company', 'email', 'phone', 'subject', 'body'];
}
