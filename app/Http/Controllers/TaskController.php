<?php

namespace App\Http\Controllers;


use App\Models\task;
use Illuminate\Http\Request;



class TaskController extends Controller
{
    //
    public function index(){
        $taskList = task::all();

        return view('taskShow', compact('taskList'));
    }
    
 
        public function edit($id){
            $task = task::findOrFail($id);
            return view('editTask', compact('task'));
        }

        public function update(Request $request, $id){
            $validated = $request -> validate([
            'TaskTitle' => 'required',
            'Task' => 'required',
            'Status' => 'required',
        ]);

            $task = task::findOrFail($id);
            $task->update($validated);

            return redirect('/TaskShow');
        }

        public function destroy($id){
            $task = task::findOrFail($id);
            $task->delete();

            return redirect('/TaskShow');
        }
   public function store(Request $request){
        $validated = $request -> validate([
            'TaskTitle' => 'required',
            'Task' => 'required',
        ]);

        $validated['Status'] = "unfinished";

        task::create($validated);

        return redirect('/TaskShow');
   }
}
