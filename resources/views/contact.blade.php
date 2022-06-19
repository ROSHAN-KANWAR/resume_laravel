@extends('layouts.main')
@section('titlepage')
<title>Welcome Contact page</title>    
@endsection
@section('main-section')

<div class="container mt-5">
    <h1 class="text-warning mb-5 border-bottom">Contact Us</h1>
    <div class="row text-white mb-5">
        <p class="mx-auto mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
             Recusandae quod suscipit autem facere. 
            Odit perspiciatis nemo ipsam quae, laudantium rerum!</p>
            <div class="col-sm-9 mb-5">
                <form action="form">
              <div class="form-row">
                  <div class="form-group col-md-6 mb-2">
                 <label for="inputname">Your Name</label>
                 <input type="text" name="" id="" class="form-control" required autocomplete="off">
                  </div>
                    <div class="form-group col-md-6 mb-2">
                        <label for="inputname">Email *</label>
                        <input type="email" name="" id="" class="form-control" required autocomplete="off">
                    </div>
              </div>
            <div class="form-group mb-2">
                   <div class="mb-5 mt-2">
                    <label >Your Message *</label>
                    <textarea class="form-control" required></textarea> 
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-md-4 d-block m-auto">Submit</button>
            </form>
            </div>
            <div class="col-md-3 text-center">
                <div class="list-unstyled">
                    <li>
                        <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                        <p>Korba C.G INDIA</p>
                    </li>
                    <li>
                        <i class="fas fa-phone fa-2x i-color"></i>
                        <p>+91 9009090909</p>
                    </li>
                    <li>
                        <i class="fas fa-envelope fa-2x i-color"></i>
                        <p>cproshan1705@gmail.com</p>
                    </li>
                </div>
            </div>
    </div>
    <div class="text-center">
     <h2 class=" text-warning">!!   Thanks for Visiting   !!</h2>
    </div>
</div>

@endsection