<?php

namespace Platonic\Core\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Platonic\Core\Http\Controllers\Controller;
use Platonic\Core\Models\Task;

class TasksController extends Controller
{
	
	public function index(){
		$tasks = Task::oldest()->get();
		return view('core::tasks.index', compact('tasks'));
	}

	public function create(){
		return view('core::tasks.index');
	}

	public function store(){
		$validator = Validator::make(Request::all(), [
	        'name' => 'required|max:255',
	    ]);

	    if ($validator->fails()) {
	        return back()->withInput()->withErrors($validator);
    	}

    	Task::create(Request::all());

		return redirect()->route('dashboard::resume::index');
	}

	public function update(Task $task){
		Task::update(['completed' => !$task->completed]);
		return redirect()->route('dashboard::resume::index');
	}

	public function destroy(Task $task){
		Task::destroy($task->id);
		return redirect()->route('dashboard::resume::index');
	}

}