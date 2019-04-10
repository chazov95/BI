@extends('layouts.mainauth')
@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
  <div class="container col-md-9 ml-sm-auto col-lg-12 col-xl-12 px-4">       
 @foreach($allCompanies as $company)

<div class="text-center">
     <button type="button" class="btn btn-success">{{ $company->name }}</button>

  </div>
  @endforeach
<div class="row">

 
</div>




<div class="container">
  <div class="row">
    <div class="col-sm">
      <button type="button" class="btn btn-success">Добавить задачу</button>
    </div>
    <div class="col-auto"><h2>Все мои задачи</h2></div>
    <div class="col-sm"></div>
  </div>
</div>
 
</div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr class="text-center">
              <th>Ждут</th>
              <th>В работе</th>
              <th>Сделано</th>
              <th>Факап</th>
              <th>Отказались</th>
            </tr>
          </thead>
          <tbody>
             <tr>
              <td class="w-25">
                @foreach($tasks_status1 as $task1)
                <div class="card  bg-light bg-primary mb-2 d-inline-block">
                  <div class="card-header"><h6>{{ $task1->name }}</h6></div>
                  <div class="card-body">
                    
                      <p class="card-text">
                        <span class="font-weight-bold">Крайний срок:</span> {{ $task1->deadline }}
                            <br>
                        <span class="font-weight-bold">Постановщик:</span> {{ $user->find($task1->author_id)->real_name }} {{ $user->find($task1->author_id)->real_lastname }}
                            <br>
                        <span class="font-weight-bold">Ответственный:</span> {{ $user->find($task1->responsible_id)->real_name }} {{ $user->find($task1->responsible_id)->real_lastname }}
                      </p>
                    
                   

                  </div>
                    <div class="progress btn-sm" style="height: : 200px">
  <div onClick="document.location='https://bootstrap-4.ru'" class="progress-bar bg-faded" role="progressbar" style="width: 20%"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
                </div>
                @endforeach
              </td>
              
             <td class="w-25">
               @foreach($tasks_status2 as $task2)
               <div class="card  bg-light bg-primary mb-2 d-inline-block">
                  <div class="card-header"><h6>{{ $task2->name }}</h6></div>
                  <div class="card-body">
                      <p class="card-text">
                        <span class="font-weight-bold">Крайний срок:</span> {{ $task2->deadline }}
                            <br>
                        <span class="font-weight-bold">Постановщик:</span> {{ $user->find($task2->author_id)->real_name }} {{ $user->find($task2->author_id)->real_lastname }}
                            <br>
                        <span class="font-weight-bold">Ответственный:</span> {{ $user->find($task2->responsible_id)->real_name }} {{ $user->find($task2->responsible_id)->real_lastname }}
                      </p>
                     
                  </div>
                    <div class="progress btn-sm" style="height: : 200px">
                    <div onClick="document.location='https://bootstrap-4.ru'" class="progress-bar bg-faded" role="progressbar" style="width: 20%"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div></div>
               
               @endforeach
             </td>
              <td class="w-25">
               @foreach($tasks_status3 as $task3)
               <div class="card  bg-light bg-primary mb-2 d-inline-block">
                  <div class="card-header"><h6>{{ $task3->name }}</h6></div>
                  <div class="card-body">
                      <p class="card-text">
                        <span class="font-weight-bold">Крайний срок:</span> {{ $task3->deadline }}
                            <br>
                        <span class="font-weight-bold">Постановщик:</span> {{ $user->find($task3->author_id)->real_name }} {{ $user->find($task3->author_id)->real_lastname }}
                            <br>
                        <span class="font-weight-bold">Ответственный:</span> {{ $user->find($task3->responsible_id)->real_name }} {{ $user->find($task3->responsible_id)->real_lastname }}
                      </p>
                   
                  </div>
                   <div class="progress btn-sm" style="height: : 200px">
                    <div onClick="document.location='https://bootstrap-4.ru'" class="progress-bar bg-faded" role="progressbar" style="width: 20%"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div></div>
                
               @endforeach
             </td>
              <td class="w-25">
               @foreach($tasks_status4 as $task4)
                <div class="card  bg-light bg-primary mb-2 d-inline-block">
                  <div class="card-header"><h6>{{ $task4->name }}</h6></div>
                  <div class="card-body">
                      <p class="card-text">
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
             </td>
              <td class="w-25">
               @foreach($tasks_status5 as $task5)
              <div class="card  bg-light bg-primary mb-2 d-inline-block">
                  <div class="card-header"><h6>{{ $task5->name }}</h6></div>
                  <div class="card-body">
                      <p class="card-text">
                        <span class="font-weight-bold">Крайний срок:</span> {{ $task5->deadline }}
                            <br>
                        <span class="font-weight-bold">Постановщик:</span> {{ $user->find($task5->author_id)->real_name }} {{ $user->find($task5->author_id)->real_lastname }}
                            <br>
                        <span class="font-weight-bold">Ответственный:</span> {{ $user->find($task5->responsible_id)->real_name }} {{ $user->find($task5->responsible_id)->real_lastname }}
                      </p>
                     
                  </div> <div class="progress btn-sm" style="height: : 200px">
                    <div onClick="document.location='https://bootstrap-4.ru'" class="progress-bar bg-faded" role="progressbar" style="width: 20%"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div></div>
                
               @endforeach
             </td> 
            </tr>
               
           
          </tbody>
        </table>
      </div>

    
    </main>
    @endsection