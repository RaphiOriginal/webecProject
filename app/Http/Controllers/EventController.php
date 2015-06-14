<?php namespace App\Http\Controllers;

use DB;
use Session;
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
    public function changeTitle(Request $request){
        $event = Session::pull('EditEvent');
        $event = Event::find($event->id);
        $event->name = $request->input('title');
        $event->save();
        session(['EditEvent' => $event]);
        return redirect()->back();
        echo var_dump(Session::all());
    }
    public function changeLocation(Request $request){
        $event = Session::pull('EditEvent');
        $event = Event::find($event->id);
        $event->location = $request->input('location');
        $event->save();
        session(['EditEvent' => $event]);
        return redirect()->back();
    }
    public function changeAmount(Request $request){
        $event = Session::pull('EditEvent');
        $event = Event::find($event->id);
        $event->amount = $request->input('amount');
        $event->save();
        session(['EditEvent' => $event]);
        return redirect()->back();
    }
    public function changeDescription(Request $request){
        $event = Session::pull('EditEvent');
        $event = Event::find($event->id);
        $event->description = $request->input('description');
        $event->save();
        session(['EditEvent' => $event]);
        return redirect()->back();
    }
    public function changeDateTime(Request $request){
        $event = Session::pull('EditEvent');
        $event = Event::find($event->id);
        $event->startdate = $request->input('datetime');
        $event->save();
        session(['EditEvent' => $event]);
        return redirect()->back();
    }
    public function changeItems(Request $request){
        $event = Session::pull('EditEvent');
        $event = Event::find($event->id);
        DB::table('items')->where('event_id', '=', $event->id)->delete();
        $items = $request->input('items');
        $items = explode(',',$items);
        foreach($items as $it){
            $item = new Item;
            $item->item = $it;
            $item->event_id = $event->id;
            $item->save();
        }
        $event->save();
        session(['EditEvent' => $event]);
        return redirect()->back();
    }
    public function delete($id){
        $event = Event::find($id);
        $event->delete();
        Session::forget('EditEvent');
        return redirect()->route('events');
    }
}
