


function delTask(id)
{
    if (confirm("Вы уверены, то хотите удалить задачу?")) 
    {
        $('#'+id).attr('class', 'card  bg-light bg-primary mb-2 d-none w-100');
    } 
    else
    {
    }
}

function goStatus(statusid, taskid, statusidtask)
{
    
    if (statusid == 'status1') 
    {
        /**/
        $fromStatusId=$('#'+statusidtask).parent().parent().parent().attr('id');
        $('#'+$fromStatusId+taskid).removeAttr('disabled');
        $('#'+statusidtask).attr('disabled', '');
        $('#'+ taskid).hide(1000, function(){ $('#'+ taskid).detach().prependTo('#status1')});
        $('#'+ taskid).show(1000);
    } 
    else if (statusid == 'status2') 
    {
        
      
       $fromStatusId=$('#'+statusidtask).parent().parent().parent().attr('id');
       $('#'+$fromStatusId+taskid).removeAttr('disabled');
       $('#'+statusidtask).attr('disabled', '');
       $('#'+ taskid).hide(1000, function(){ $('#'+ taskid).detach().prependTo('#status2')});
       $('#'+ taskid).show(1000);
       
    }
    else if (statusid == 'status3') 
    {
        $fromStatusId=$('#'+statusidtask).parent().parent().parent().attr('id');
        $('#'+$fromStatusId+taskid).removeAttr('disabled');
        $('#'+statusidtask).attr('disabled', '');
        $('#'+ taskid).hide(1000, function(){ $('#'+ taskid).detach().prependTo('#status3')});
        $('#'+ taskid).show(1000);
    }
    else if (statusid == 'status4') 
    {
        $fromStatusId=$('#'+statusidtask).parent().parent().parent().attr('id');
        $('#'+$fromStatusId+taskid).removeAttr('disabled');
        $('#'+statusidtask).attr('disabled', '');
        $('#'+ taskid).hide(1000, function(){ $('#'+ taskid).detach().prependTo('#status4')});
        $('#'+ taskid).show(1000);
    }
    else if (statusid == 'status5') 
    {
        $fromStatusId=$('#'+statusidtask).parent().parent().parent().attr('id');
        $('#'+$fromStatusId+taskid).removeAttr('disabled');
        $('#'+statusidtask).attr('disabled', '');
        $('#'+ taskid).hide(1000, function(){ $('#'+ taskid).detach().prependTo('#status5')});
        $('#'+ taskid).show(1000);
    }
}



function editTask(id){
           $.ajax({
                    url : "/taskContent",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                    "id": id
                    },
                    datatype: 'JSON',
                    type: "POST",
                    success: function( data ) {
                        data= JSON.parse(data);
    $('#mainModalLabel').html( 
          
          '<div class="form-group">'+
            '<label for="taskEditedName"><b>Заголовок</b></label>'+
            '<input type="text" class="form-control w-100" id="taskEditedName" value="'+data.name+'" rows="5" >'+
            '</div>'
            );
    $('#mainModalBody').html( 
    '<div class="form-group">'+
        '<label for="taskEditedProblem"><b>В чем проблема</b></label>'+
        '<textarea type="text" class="form-control" id="taskEditedProblem" rows="5">'
        + data.problem +
      '</textarea></div>'+
      '<div class="form-group">'+
        '<label for="taskEditedDescription"><b>Как исправить</b></label>'+
        '<textarea type="text" class="form-control" id="taskEditedDescription" rows="5">'
        +data.taskDescription+
      '</textarea></div>'+
      '<div class="form-group">'+
        '<label for="taskEditedDeadline"><b>Крайний срок</b></label>'+
        '<input type="date" class="form-control w-50" id="taskEditedDeadline" value="'+data.deadline+'" rows="5" >'+
        '</div>'
     );
    $('#mainModalFooter').html( data.submit_button );
    
                    }
                    });
}

/**
 * Функция принимает id задачи и возвращает 
 * информацию о задаче, вставляя ее в модальное окно
 * @param  int id
 * @return string
 */
function showTask(id){
      $.ajax({
                    url : "/taskContent",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                    "id": id
                    },
                    datatype: 'JSON',
                    type: "POST",
                    success: function( data ) {
                        data= JSON.parse(data);
                        $('#mainModalBody').html( '<strong>Что не так:</strong><br>'
                            + data.problem + 
                            '<br><strong>Как исправить:</strong><br>'
                            + data.taskDescription +
                            '<br><br><p> <b>Крайник срок:</b> '
                            + data.deadline +
                            '<br> <b>Дата создания:</b> '
                            + data.created_at +
                            '</p>');
                        $('#mainModalFooter').html( data.edit_button );
                        $('#mainModalLabel').html( data.name );
                    }
                    });
}

/**
 * Функция принимает id задачи, собирает информацию из полей и отправляет в обработчик
 */
function submitChanges(taskid) {
  
    var name = $('#taskEditedName').val();
    var problem = $('#taskEditedProblem').val();
    var description = $('#taskEditedDescription').val();
    var deadline = $('#taskEditedDeadline').val();
  $.ajax({
                    url : "/edit/Task",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: {
                    "id": taskid,
                    "name": name,
                    "problem": problem,
                    "description": description,
                    "deadline": deadline
                    },
                    datatype: 'JSON',
                    type: "POST",
                    success: function() {
$('#mainModalBody').html( 'Задача обновлена');
                    }
});
}