@extends('layouts.mainauth')
@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center  pt-3 pb-2 mb-3 border-bottom">
        <img src="{{ url($company->logo) }}" class="rounded-circle" alt="" height="40" width="40">
        <h1 class="h3">{{ $company->name }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Родительская точка</button>
            <button type="button" class="btn btn-sm btn-outline-success">Редактировать точку</button>
          </div>
          
        </div>
      </div>

      

<div class="container">

<div class="row">
    <div class="col-sm-8">
      Название графика
     <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="450" height="200"  style="display: block; width: 200px; height: 200px;"></canvas>
    </div>
  
    <div class="col-sm-4">
     



<div class="row">
    <div class="offset">
      <!-- карточка 1 -->
      <div class="card">
  <div class="card-header">
    Описание точки
  </div>
  <div class="card-body">
    
    <p class="card-text">{{ $company->description_short }}</p>
  </div>
</div>
<br>
    </div>
  </div>
  <!-- This class can be used with responsive classes such as -md- as well: -->
  <div class="row">
    <div class="offset">
    <!-- карточка 1 -->
      <div class="card">
  <div class="card-header">
    Статистика
  </div>
  <div class="card-body">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
  </div>
</div>
    </div>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <button type="button" class="btn btn-success">Добавить точку</button>
    </div>
    <div class="col-sm"><h2>Дочерние точки</h2></div>
    <div class="col-sm"></div>
  </div>
</div>
 
</div>

      
       
<div class="card-deck">
  <div class="card">
    <div class="card-body"><p class="text-center">
      <img src="https://static.tildacdn.com/tild3532-6130-4437-b966-653766626265/1.jpg" class="rounded-circle" alt="" height="40" width="40" align="cover-container"><br>
      <b>Card subtitle</b></p>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Card title</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
  </div>
</div>


<br><br>


<div class="container">
  <div class="row">
    <div class="col-sm">
      <button type="button" class="btn btn-success">Добавить идею</button>
    </div>
    <div class="col-sm"><h2>Точечные идеи</h2></div>
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