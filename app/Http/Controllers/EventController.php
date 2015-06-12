<?php namespace App\Http\Controllers;

use App\Item;
use App\Event;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class EventController extends BaseController
{
    public function store(Request $request){
    		$event = new Event;
    		$event->name = $request->input('name');
    		$event->location = $request->input('location');
    		$event->amount = $request->input('amount');
    		$event->description = $request->input('description');
    		$event->startdate = $request->input('startdate');
    		$event->picture = $request->input('picture');
    		$event->save();
            $event = Event::where('name', '=', $event->name)->first();
            echo $event->id;
            $items = $request->input('items');
            $items = explode(',',$items);
            foreach($items as $it){
                $item = new Item;
                $item->item = $it;
                $item->event_id = $event->id;
                $item->save();
            }
            return redirect()->back();
    }
    public function index(){
    	return Event::all();
    }
}
