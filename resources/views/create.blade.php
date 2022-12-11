@extends('master.header')
@section('title')
Subscribe-BCA Consulting
@endsection
@section('content')
<div class="card text-dark bg-light " style="margin-top: 7rem; width: 700px;margin-left: 40rem">
  <img class="card-img-top" src="https://media.istockphoto.com/id/928799424/vector/news-update-online-news-newspaper-news-website-flat-vector.jpg?s=612x612&w=0&k=20&c=X5Wdnk3cpOYKmzK5oIJk0wmRqKadfR0Faf15gzQb3TI=" alt="">
  <div class="card-body">

    <h4 class="card-title">Subscribe to our newsletter in order not to miss new arrivals</h4>
    <p class="card-text">promotions and discounts of our store</p>
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3 mt-4">
            <input type="text" name="email" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-success border-rad">Subscribe</button>
          </div>
  </form>
</div>
</div>
<style>
    .form-control {
        display: block;
    width: 100%;
    min-height: calc(1.5em + .75rem + 2px);
    padding: .575rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 52px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;}
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #f9a826;
    outline: 0;
    box-shadow: none;
}
.border-rad{

border-top-right-radius: 28px;
border-bottom-right-radius: 28px;

color: #fff;
background-color: #f9a826;
border-color: #f9a826;
}




.border-rad:hover{

 background-color: #f9a826;
border-color: #f9a826;

}
</style>
@endsection
