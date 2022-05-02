<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('administrator.event.index');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = Event::create([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}
    	}
    }

    public function acara(Request $request){
        if($request->has('search')){
            $event = Event::where('title', 'LIKE', '%' .$request->search. '%')->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $event = Event::orderBy('id', 'desc')->paginate(5);
        }
        return view ('administrator.event.acara', ['event' => $event]);
    }

    public function create(Request $request){
        Event::create([
            
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'keterangan' => $request->keterangan,

        ]); 

    return redirect('/acara')->with("sukses", 'Data berhasil ditambahkan!');; 
    }

    public function edit($id){
        $event = Event::find($id);
        return view('administrator.event.edit', ['event' => $event]);
    }

    public function update(Request $request, $id){
        $event = Event::find($id);
        $dataevent=[
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'keterangan' => $request->keterangan,
        ];
        $event->update($dataevent);
        return redirect('/acara')->with("sukses", 'Data berhasil di-Update!');;
    }

    public function delete($id)
    {
        $event = Event::find($id);
        $event ->delete($event);
        return redirect('/acara')->with("sukses", 'Data berhasil dihapus!');
    }

    //kelian Banjar
    public function event_kelian(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('kelian.event.index');
    }

    public function acara_kelian(Request $request){
        if($request->has('search')){
            $event = Event::where('title', 'LIKE', '%' .$request->search. '%')->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $event = Event::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kelian.event.acara_kelian', ['event' => $event]);
    }

    //Kades
    public function event_kades(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = Event::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('kades.event.index');
    }

    public function acara_kades(Request $request){
        if($request->has('search')){
            $event = Event::where('title', 'LIKE', '%' .$request->search. '%')->orderBy('id', 'desc')->paginate(5);
        }
        else{
            $event = Event::orderBy('id', 'desc')->paginate(5);
        }
        return view ('kades.event.acara_kades', ['event' => $event]);
    }

}

