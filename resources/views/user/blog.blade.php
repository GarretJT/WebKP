@extends('layouts.user')

@section('header')
    <style>
        #hero{
          background: url('{{asset('user/images/destination.png')}}') top center;
            background-attachment: fixed; /* Keeps the image still while scrolling */
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
            margin: 0px;
            height: 250px; /* Adjust the height as necessary */
        }
        .form-control:focus {
          box-shadow: none;
        }

        .form-control::placeholder {
          font-size: 0.95rem;
          color: #aaa;
          font-style: italic;
        }
        .article{
          line-height: 1.6;
          font-size: 15px;
        } 
    </style>    
@endsection

@section('hero')
    <h1>MENU</h1>
@endsection

@section('content')  
  <!--========================== Menu Section ============================-->
  <section id="menu">
    <div class="container wow fadeIn">

      <div class="row">
        <div class="col-12">
          <h2 class="text-center mb-5">Our Menu</h2>
          
          <!-- Card for Menu Item 1 -->
          <div class="card mb-4" style="max-width: 18rem;">
            <img src="{{asset('user/images/menu1.jpg')}}" class="card-img-top" alt="Menu Item 1">
            <div class="card-body">
              <h5 class="card-title">Menu Item 1</h5>
              <p class="card-text">A delicious and savory dish made with the finest ingredients. Perfect for any meal of the day!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
          
          <!-- Card for Menu Item 2 -->
          <div class="card mb-4" style="max-width: 18rem;">
            <img src="{{asset('user/images/menu2.jpg')}}" class="card-img-top" alt="Menu Item 2">
            <div class="card-body">
              <h5 class="card-title">Menu Item 2</h5>
              <p class="card-text">A sweet and savory treat that's perfect for dessert or a snack. Don't miss out on this delight!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>

          <!-- Card for Menu Item 3 -->
          <div class="card mb-4" style="max-width: 18rem;">
            <img src="{{asset('user/images/menu3.jpg')}}" class="card-img-top" alt="Menu Item 3">
            <div class="card-body">
              <h5 class="card-title">Menu Item 3</h5>
              <p class="card-text">A savory meal that combines bold flavors and fresh ingredients. A true crowd-pleaser!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>

          <!-- Card for Menu Item 4 -->
          <div class="card mb-4" style="max-width: 18rem;">
            <img src="{{asset('user/images/menu4.jpg')}}" class="card-img-top" alt="Menu Item 4">
            <div class="card-body">
              <h5 class="card-title">Menu Item 4</h5>
              <p class="card-text">A hearty dish that will satisfy your cravings with its rich flavors and texture. Don't miss out!</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section><!-- #menu -->
@endsection
