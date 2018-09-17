<?php

namespace SoldatiGabriele\PackageName\Events;

use Illuminate\Queue\SerializesModels;

class EventName
{
    use SerializesModels;

    public $lead;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }
}
