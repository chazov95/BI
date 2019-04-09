@extends('layouts.mainauth')
@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">


<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center  pt-3 pb-2 mb-3 border-bottom">
    
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-success">Сотрудники</button>
            <button type="button" class="btn btn-sm btn-outline-success">Графики</button>
            <button type="button" class="btn btn-sm btn-outline-success">Идеи клиентов</button>
          </div>
        </div>
         <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-success">Редактировать компанию</button>
          </div>
        </div>
      </div>      

<div class="container col-md-9 ml-sm-auto col-lg-12 col-xl-12 px-4">
<div class="text-center">
    <img class="d-block mx-auto " src="{{ url($company->logo) }}" alt="" width="72" height="72">
    <h2>{{ $company->name }}</h2>
    <p class="lead">{{ $company->description_short }}</p>
  </div>
<div class="row">
<div class="pt-5 container">
  <div class="row">
    <div class="col-sm">
      <button type="button" class="btn btn-success">Добавить точку</button>
    </div>
    <div class="col-sm"><h3>Главные точки</h3></div>
    <div class="col-sm"></div>
  </div>
</div>
 
</div>

      
<div class="album py-3">
  <div class="containe">
    <div class="row">
      
@foreach($mainDots as $dot)  
<div class="col-md-4">
  <div class="card mb-4 shadow-sm">
    <div class="card-body"><p class="text-center">
      <img src="https://static.tildacdn.com/tild3532-6130-4437-b966-653766626265/1.jpg" class="rounded-circle" alt="" height="40" width="40" align="cover-container"><br>
      <a href="{{ route('dotIndex',['id'=>$company->id, 'dotId'=>$dot->id]) }}"><b>{{ $dot->name }}</b></a></p>
      <p class="card-text">{{ $dot->description_short }}</p>
    </div>
  </div>
</div>
@endforeach


    </div>
  </div>
</div>


<br><br>


<div class="container">
  <div class="row">
    <div class="col-sm">
      <button type="button" class="btn btn-success">Добавить задачу</button>
    </div>
    <div class="col-auto"><h2>Мои задачи в компании</h2></div>
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
                <div class="card mb-2">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{ $task1->name }}</h6>
                    <p class="card-text">
                      {{ $task1->created_at }}
                   
                    </p>
                     <a href="#!" class="card-link">Card link</a>
                  </div>
                </div>
                @endforeach
              </td>
             <td class="w-25">
               @foreach($tasks_status2 as $task2)
               <div class="card mb-2">
                 <div class="card-body">
                   <h6 class="card-subtitle mb-2 text-muted">{{ $task2->name }}</h6>
                   <p class="card-text">
                     {{ $task2->created_at }}
                   </p>
                    <a href="#!" class="card-link">Card link</a>
                 </div>
               </div>
               @endforeach
             </td>
              <td class="w-25">
               @foreach($tasks_status3 as $task3)
               <div class="card mb-2">
                 <div class="card-body">
                   <h6 class="card-subtitle mb-2 text-muted">{{ $task3->name }}</h6>
                   <p class="card-text">
                     {{ $task3->created_at }}
                   </p>
                    <a href="#!" class="card-link">Card link</a>
                 </div>
               </div>
               @endforeach
             </td>
              <td class="w-25">
               @foreach($tasks_status4 as $task4)
               <div class="card mb-2">
                 <div class="card-body">
                   <h6 class="card-subtitle mb-2 text-muted">{{ $task4->name }}</h6>
                   <p class="card-text">
                     {{ $task4->created_at }}
                   </p>
                    <a href="#!" class="card-link">Card link</a>
                 </div>
               </div>
               @endforeach
             </td>
              <td class="w-25">
               @foreach($tasks_status5 as $task5)
               <div class="card mb-2">
                 <div class="card-body">
                   <h6 class="card-subtitle mb-2 text-muted">{{ $task5->name }}</h6>
                   <p class="card-text">
                     {{ $task5->created_at }}
                   </p>
                    <a href="#!" class="card-link">Card link</a>
                 </div>
               </div>
               @endforeach
                
             </td> 
            </tr>
               
           
          </tbody>
        </table>
      </div>

    
    </main>
    @endsection