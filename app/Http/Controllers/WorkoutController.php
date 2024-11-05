<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\workout;

class WorkoutController extends Controller
{
    public function index(){
        $workouts = workout::all();
        return view('workouts.index',['workouts'=>$workouts]);
        }
        public function destroy($id){   
            $workout = workout::find($id);
            $workout ->delete();
            return redirect( route('workout.index'))->with ( 'success', 'workout Delete successfully' );
            
            }
        
        
        public function create(){
            return view('workouts.create');
            }
            public function edit($id)
            {
                $workout = workout::findOrFail($id);
                return view('workouts.edit', compact('workout'));
            }
            public function update(Request $request, $id)
{
    $workout = workout::findOrFail($id);
    $data = $request->validate([
        'name' => 'required',
        'durasi' => 'required|numeric',
        'intensitas' => 'required',
        'description' => 'nullable',
    ]); 
    $workout->update($data); 

    return redirect(route('workout.index'))->with('success', 'workout updated successfully');
}

            public function store(Request $request){
                $data = $request->validate([
                    'name' => 'required',
                    'durasi' => 'required|numeric',
                    'intensitas' => 'required',
                    'description' => 'nullable',
                ]);
                $newworkout = workout::create($data);
                return redirect(route('workout.index'));
                workout::create($validateddata);
            }
                }
