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
      </div>      

<div class="container">
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

      
<div class="album py-5 bg-light">
  <div class="containe">
    <div class="row">
      
@foreach($company->dots as $dot)  
<div class="col-md-4">
  <div class="card mb-4 shadow-sm">
    <div class="card-body"><p class="text-center">
      <img src="https://static.tildacdn.com/tild3532-6130-4437-b966-653766626265/1.jpg" class="rounded-circle" alt="" height="40" width="40" align="cover-container"><br>
      <b>{{ $dot->name }}</b></p>
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
      <button type="button" class="btn btn-success">Добавить идею</button>
    </div>
    <div class="col-sm"><h2>Мои задачи</h2></div>
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
              <td><div class="card">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">
      Some quick example text to build on the card title
    </p>
     <a href="#!" class="card-link">Card link</a>
  </div>
</div></td>
              <td><div class="card">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">
      Some quick example text to build on the card title
    </p>
    <input type="range" class="custom-range" value="3" min="0" max="4" step="1" id="customRange3">
  </div>
</div>

<div class="card">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">
      Some quick example text to build on the card title
    </p>
    <input type="range" class="custom-range" value="3" min="0" max="4" step="1" id="customRange3">
  </div>
</div>

</td>
              <td><div class="card">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">
      Some quick example text to build on the card title
    </p>
     <a href="#!" class="card-link">Card link</a>
  </div>
</div></td>
              <td><div class="card">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">
      Some quick example text to build on the card title
    </p>
     <a href="#!" class="card-link">Card link</a>
  </div>
</div></td>
              <td><div class="card">
  <div class="card-body">
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">
      Some quick example text to build on the card title
    </p>
     <a href="#!" class="card-link">Card link</a>
  </div>
</div></td>
               
           
          </tbody>
        </table>
      </div>

    
    </main>
    @endsection