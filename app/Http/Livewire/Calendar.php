<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class Calendar extends Component
{

//    public $events = [];
    public function render()
    {
        $events = Event::all()->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->nom,
                'start' => $event->start,
                'end' => $event->end,
                'color' => $event->color,
            ];
        });
//        dd($events);
        return view('livewire.calendar',compact('events'));
    }
}
