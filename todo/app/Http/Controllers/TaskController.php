<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Task;

class TaskController extends Controller 
{

	public function index () {
		$tasks = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', [
      		'tasks' => $tasks
        ]);
	}

	public function create(Request $request) {
		
		$validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
              return redirect('/')
              ->withInput()
              ->withErrors($validator);
        }
        
        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect('/');
	}


	public function delete($id) {
		$task = Task::findOrFail($id);
		$task->delete();
        return redirect('/');
	}
}