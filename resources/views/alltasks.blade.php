@extends('layouts.mainauth')
@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pb-5">
<div class="container col-md-9 ml-sm-auto col-lg-12 col-xl-12 px-4">       
<div class="container mt-5 ">
  <div class="row">
    <div class="col-4">
      <button type="button" class="btn btn-success">Добавить задачу</button>
    </div>
    <div class="col-4 text-center"><h2>Все мои задачи</h2></div>
    <div class="col-4">
      <ul class="nav nav-pills">
   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Фильтр по моим компаниям</a>
    <div class="dropdown-menu">
      
      @foreach($allCompanies as $company)
      <a class="dropdown-item" href="#!">{{ $company->name }}</a>
     
      @endforeach
    </div>
  </li>
</ul>

    </div>
  </div>
</div>
 
</div>

      <div class="table-responsive">
         <table class="table table-striped table-sm">
          <thead>
            <tr class="text-center">
              <th class="bg-primary text-white">Ждут</th>
              <th class="bg-warning text-white">В работе</th>
              <th class="bg-success text-white">Сделано</th>
              <th class="bg-danger text-white">Факап</th>
            </tr>
          </thead>
          <tbody>
             <tr>
              <td class='w-25' id="status1">
                @if (count($tasks_status1) > 0)
                @foreach($tasks_status1 as $task1)
                <div class="card  bg-light mb-2 d-inline-block w-100" id="task{{ $task1->id }}">
                  <div class="toast-header"><strong class="mr-auto"><a href="#" onclick = "showTask({{ $task1->id }})" data-toggle="modal" data-target="#mainModal">{{ $task1->name }}</a></strong>
                    <a href="#" onclick = "editTask({{ $task1->id }})" data-toggle="modal" data-target="#mainModal"><small class="text-secondary"> (ред.)<!--  &#9998; --> </small> </a>
                    <script async="" src="{{ asset('js/main.js') }}"></script>
                    <button type="button" class="ml-2 mb-1 close" onClick="delTask('task{{ $task1->id }}')" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true" class="f">&times; </span>
                    </button>
                  </div>
                  <div class="card-body">
                      <p class="card-text">
                        <span class="font-weight-bold">Компания:</span> {{ $company->find($task1->company_id)->name }}
                        <br>
                        <span class="font-weight-bold">Крайний срок:</span> {{ $task1->deadline }}
                        <br>
                        <span class="font-weight-bold">Постановщик:</span> {{ $user->find($task1->author_id)->real_name }} {{ $user->find($task1->author_id)->real_lastname }}
                        <br>
                        <span class="font-weight-bold">Ответственный:</span> {{ $user->find($task1->responsible_id)->real_name }} {{ $user->find($task1->responsible_id)->real_lastname }}
                      </p>
                  </div>
           <div class="btn-group w-100">
            <button onClick="goStatus('status1', 'task{{ $task1->id }}', 'status1task{{ $task1->id }}')" class="btn btn-sm btn-primary" role="button"  id='status1task{{ $task1->id }}' type="button"  disabled></button>
            <button onClick="goStatus('status2', 'task{{ $task1->id }}', 'status2task{{ $task1->id }}')" type="button" role="button" id='status2task{{ $task1->id }}'  class="btn btn-sm btn-warning"></button>
            <button onClick="goStatus('status3', 'task{{ $task1->id }}', 'status3task{{ $task1->id }}')" type="button" id='status3task{{ $task1->id }}' class="btn btn-sm btn-success"></button>
            <button onClick="goStatus('status4', 'task{{ $task1->id }}', 'status4task{{ $task1->id }}')" type="button" id='status4task{{ $task1->id }}' class="btn btn-sm btn-danger" role="button"></button>
            <button onClick="goStatus('status5', 'task{{ $task1->id }}', 'status5task{{ $task1->id }}')" type="button" id='status5task{{ $task1->id }}' class="btn btn-sm btn-secondary"></button>
          </div>                    
                @endforeach
                @else
                <div class="card  bg-light bg-primary mb-2 d-inline-block w-100">
                  <div class="card-header"><h6>Пусто</h6></div></div>
                @endif
              </td>
              
             <td class='w-25' id="status2">
              @if (count($tasks_status2) > 0)
               @foreach($tasks_status2 as $task2)
              <div class="card  bg-light bg-primary mb-2 d-inline-block w-100">
                  <div class="card-header"><h6>{{ $task2->name }}</h6></div>
                  <div class="card-body">
                      <p class="card-text">
                         <span class="font-weight-bold">Компания:</span> {{ $company->find($task2->company_id)->name }}
                        <br>
                        <span class="font-weight-bold">Крайний срок:</span> {{ $task2->deadline }}
                            <br>
                        <span class="font-weight-bold">Постановщик:</span> {{ $user->find($task2->author_id)->real_name }} {{ $user->find($task2->author_id)->real_lastname }}
                            <br>
                        <span class="font-weight-bold">Ответственный:</span> {{ $user->find($task2->responsible_id)->real_name }} {{ $user->find($task2->responsible_id)->real_lastname }}
                      </p>
                     
                  </div>
                    <div class="progress btn-sm" >
                      <div onClick="document.location='https://bootstrap-4.ru'" class="progress-bar bg-faded" role="progressbar" style="width: 20%"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
               
               @endforeach
                @else
                <div class="card  bg-light bg-primary mb-2 d-inline-block w-100">
                  <div class="card-header"><h6>Пусто</h6></div></div>
                @endif
             </td>
              <td class='w-25' id="status3">
               @if (count($tasks_status3) > 0)
               @foreach($tasks_status3 as $task3)
               <div class="card  bg-light bg-primary mb-2 d-inline-block w-100">
                  <div class="card-header"><h6>{{ $task3->name }}</h6></div>
                  <div class="card-body">
                      <p class="card-text">
                         <span class="font-weight-bold">Компания:</span> {{ $company->find($task3->company_id)->name }}
                        <br>
                        <span class="font-weight-bold">Крайний срок:</span> {{ $task3->deadline }}
                            <br>
                        <span class="font-weight-bold">Постановщик:</span> {{ $user->find($task3->author_id)->real_name }} {{ $user->find($task3->author_id)->real_lastname }}
                            <br>
                        <span class="font-weight-bold">Ответственный:</span> {{ $user->find($task3->responsible_id)->real_name }} {{ $user->find($task3->responsible_id)->real_lastname }}
                      </p>
                   
                  </div>
                   <div class="progress btn-sm">
                    <div onClick="document.location='https://bootstrap-4.ru'" class="progress-bar bg-faded" role="progressbar" style="width: 20%"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
              </div>
               @endforeach
              @else
                <div class="card  bg-light bg-primary mb-2 d-inline-block w-100">
                  <div class="card-header"><h6>Пусто</h6></div></div>
                @endif
             </td>
              <td class='w-25'id="status4">
              @if (count($tasks_status4) > 0)
               @foreach($tasks_status4 as $task4)
                <div class="card  bg-light bg-primary mb-2 d-inline-block w-100">
                  <div class="card-header"><h6>{{ $task4->name }}</h6></div>
                  <div class="card-body">
                      <p class="card-text">
                         <span class="font-weight-bold">Компания:</span> {{ $company->find($task4->company_id)->name }}
                        <br>
                        <span class="font-weight-bold">Крайний срок:</span> {{ $task4->deadline }}
                            <br>
                        <span class="font-weight-bold">Постановщик:</span> {{ $user->find($task4->author_id)->real_name }} {{ $user->find($task4->author_id)->real_lastname }}
                            <br>
                        <span class="font-weight-bold">Ответственный:</span> {{ $user->find($task4->responsible_id)->real_name }} {{ $user->find($task4->responsible_id)->real_lastname }}
                      </p>
                     
                  </div> <div class="progress btn-sm" style="height: : 200px">
                    <div onClick="document.location='https://bootstrap-4.ru'" class="progress-bar bg-faded" role="progressbar" style="width: 20%"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div></div>
                
               @endforeach
                @else
                <div class="card  bg-light bg-primary mb-2 d-inline-block w-100">
                  <div class="card-header"><h6>Пусто</h6></div></div>
                @endif
             </td>
            
            </tr>
            <tr>
              <td colspan="4" class="w-100 text-center"><h4>Отложено</h4></td>
              
            </tr>
               
               <tr>
             
               <td colspan="4" class="w-100 text-center" id="status5">
              @if (count($tasks_status5) > 0)
               @foreach($tasks_status5 as $task5)
              <div class="card  bg-light bg-primary mb-2 d-inline-block w-25">
                  <div class="card-header"><h6>{{ $task5->name }}</h6></div>
                  <div class="card-body">
                      <p class="card-text">
                         <span class="font-weight-bold">Компания:</span> {{ $company->find($task5->company_id)->name }}
                        <br>
                        <span class="font-weight-bold">Крайний срок:</span> {{ $task5->deadline }}
                            <br>
                        <span class="font-weight-bold">Постановщик:</span> {{ $user->find($task5->author_id)->real_name }} {{ $user->find($task5->author_id)->real_lastname }}
                            <br>
                        <span class="font-weight-bold">Ответственный:</span> {{ $user->find($task5->responsible_id)->real_name }} {{ $user->find($task5->responsible_id)->real_lastname }}
                      </p>
                     
                  </div> <div class="progress btn-sm">
                    <div onClick="document.location='https://bootstrap-4.ru'" class="progress-bar bg-faded" role="progressbar" style="width: 20%"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                
               @endforeach
                 
                @else
                <div class="card  bg-light bg-primary mb-2 d-inline-block w-25 float-left">
                  <div class="card-header"><h6>Пусто</h6></div></div>
                @endif
             </td> 
              
            </tr>
          </tbody>
        </table>
      </div>
    </main>
    @endsection