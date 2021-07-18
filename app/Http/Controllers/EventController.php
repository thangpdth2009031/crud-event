<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(){
        return view('events.form');
    }

    public function list(){
        $listEvent = Event::all();
        return view('events.list', ['list'=>$listEvent]);
    }
    public function store(Request $request){
        $result = new Event();
        $result->eventName = $request->get('eventName');
        $result->bandNames = $request->get('bandNames');
        $result->startDate = $request->get('startDate');
        $result->endDate = $request->get('endDate');
        $result->portfolio = $request->get('portfolio');
        $result->ticketPrice = $request->get('ticketPrice');
        $result->status = $request->get('status');
        $result->save();
        return redirect('/admin/events/list');
    }
    public function save(Request $request, $id) {
        $save = Event::find($id);
        $save->update($request->all());
        $save->save();
        return redirect('/admin/events/list');
    }
    public function update($id) {
        $update = Event::find($id);
        return view('events.edit', ['data'=>$update]);
    }
    public function destroy($id) {
        $delete = Event::find($id);
        $delete->delete();
        return redirect('/admin/events/list');
    }

}
