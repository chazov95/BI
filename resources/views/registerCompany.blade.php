@extends('layouts.mainauth')

@section('main')

<!-- вид с формой регистрации компании -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="container">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center  pt-3 pb-2 mb-3 border-bottom">
   <img src="https://static.tildacdn.com/tild3532-6130-4437-b966-653766626265/1.jpg" class="rounded-circle" alt="" height="40" width="40">
      <h1 class="h4">Регистрация компании на BI</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Мои компании</button>
            <button type="button" class="btn btn-sm btn-outline-success" onclick="location.href = '{{ url('/home') }}'">Все компании</button>
          </div>
         
        </div>
</div>


  

  <div class="row">
    

    <div class="col-md-8 order-md-2 mb-4">
      <h4 class="mb-3">Регистрация</h4>
        <form class="needs-validation" novalidate>
          
             <label for="name">Наименование компании</label>
             <input type="text" class="form-control" id="name" placeholder="" value="" required>
              <div class="invalid-feedback">
              Valid first name is required.
        </div>
          
        <div class="mb-3">
        <label for="logo">Выбирите логотип Вашей компании</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>


        <div class="mb-3">
          <label for="adress">Электронная почта</label>
          <input type="adress" class="form-control" id="adress" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="description_short">Краткое описание деятельности компании</label>
          <textarea type="text" class="form-control" id="description_short" placeholder="Компания по производству металообрабатывающих станков" required></textarea> 
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        
            <label for="phone">Введите номер телефона </label>
            <input type="text" class="form-control" id="phone" placeholder="" value="" required>
            <div class="invalid-feedback">
              
         </div>
       
        
      
            <label for="adress">Введите адрес вашей компании </label>
            <input type="text" class="form-control" id="adress" placeholder="" value="" required>
            <div class="invalid-feedback">
              
         </div>
        
         <button type="submit"  class="btn btn-success mt-4">Отправить</button>
     
     </form>
   
  </div>

  <div class="col-md-4 order-md-2 mb-4">
      <div class="card">
        <img src="/img/default/donate.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Поддержите проект!</h4>
          <p class="card-text">
           Нет ничего важнее для IT-стартапов, чем поддержка пользователей. 
          </p>
          <p class="card-text">
           Вы можете перевести любую сумму в качестве пожертвования на развитие проекта.
          </p>
          <a href="#!" class="btn btn-success">Я поддерживаю!</a>
        </div>
      </div>
    </div>
</div>
 </div>

</main>
@endsection