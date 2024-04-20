<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class taskController extends Controller
{
    public function createtask(Request $request)
    {

        $inserted = DB::table('tasks')->insert([
            'activity' => $request->input('activity'),
            'time' => $request->input('time'),
        ]);
    
        // Check if insertion was successful
        if ($inserted) {
            return redirect('/')->with('message', 'done');
        } else {
            return response()->json(['message' => 'Failed to create student'], 500);
        }

        // dd($inserted);
    } 
    public function gettasks(Request $request)
    {
        $tasks = DB::table('tasks')->select('activity', 'time')->get();
        return view('/components/tasks', ['tasks' => $tasks]);
    }       
    public function updatetasks(Request $request)
    {
        $tasks = DB::table('tasks')->select('id','activity', 'time')->get();
        return view('/components/update', ['tasks' => $tasks]);
    } 
    public function updatetasks2(Request $request, $id)
    {
        $activity = $request->input('activity');
        $time = $request->input('time');

        DB::table('tasks')->where('id', $id)->update([
            'activity' => $activity,
            'time' => $time,
        ]);
        
        return redirect()->back()->with('success', 'Task updated successfully');
    } 
    public function destroy($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        
        return redirect()->back()->with('success', 'Task updated successfully');
    } 
}
