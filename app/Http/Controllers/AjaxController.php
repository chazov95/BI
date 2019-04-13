<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dot_task;
class AjaxController extends Controller
{
    public function taskContent(Request $request){
    
    $taskId=$request->input('id');
    $taskModel = Dot_task::find($taskId);
    $taskArray ["taskDescription"] = $taskModel->description;
    $taskArray ["name"] = $taskModel->name;
    $taskArray ["problem"] = $taskModel->problem;
    $taskArray ["deadline"] = $taskModel->deadline;
    $taskArray ["created_at"] = $taskModel->created_at->format('d.m.Y H:i');
    $taskArray ["edit_button"] = '<button type="button" onClick="editTask('.$taskId.')" class="btn btn-primary">Редактировать</button>';
    $taskArray ["submit_button"] = '<button type="submit" onClick="submitChanges('.$taskId.')" class="btn btn-success">Обновить</button>';
   header("Content-type: application/json; charset=utf-8");
   echo json_encode($taskArray);
	
}

public function editTask(Request $request)
{
	$this->validator($request, [
'name' => 'required',
'problem' => 'required|max:2000',
'description' => 'required|max:2000',
'deadline' => 'required'
	]);

	$taskId=$request->input('id');
	$taskModelUpdate = Dot_task::find($taskId)->update($request->all());
	dump($taskModelUpdate);
}

}
