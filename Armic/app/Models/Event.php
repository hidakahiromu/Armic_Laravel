<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $filable=['name','phone_number','event_name','event_day','event_venue','event_image','event_introduction','event_fee','ticket_where','event_contact'];

    protected $table = 'event';

    protected $primarykey='event_name';

    
}

