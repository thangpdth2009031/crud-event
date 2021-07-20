<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventValidatorFormRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use function Illuminate\Events\queueable;

class EventController extends Controller
{
    public function create(){
        return view('events.form');
    }

    public function list(Request $request){
        $queryBuilder = Event::query();
        $search = $request->query('search');
        $status = $request->query('status');
        if ($search && strlen($search) > 0 ) {
            $queryBuilder = $queryBuilder->where('eventName', 'like', '%'.$search.'%')
                ->orWhere('bandNames', 'like', '%'.$search.'%');
        }
        if ($status) {
            $queryBuilder = $queryBuilder->where('status', $status);
        }
        $event = $queryBuilder->paginate(10)->appends(['search'=>$search, 'status'=>$status]);
        return view('events.list', ['list'=>$event, 'status'=>$status]);
    }
    public function store(EventValidatorFormRequest $request){

        $result = new Event();
        $result->fill($request->validated());
        $result->save();
        return redirect('/admin/events/list');
    }
    public function save(EventValidatorFormRequest $request, $id) {
        $save = Event::find($id);
        $save->update($request->validated());
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
