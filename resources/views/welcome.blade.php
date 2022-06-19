@extends('layouts.main')
@section('titlepage')
<title>Welcome Home Page</title>    
@endsection
@section('main-section')
       <div class="forimage text-center">
        <img src="{{asset('photos/avt-img.jpg')}}" alt="" class="mt-4 img-thumbnail img-fluid ">
       </div>
       <div class="decs mt-4">
           <p><span class="hello">Hello</span>
         Lorem ipsum dolor, sit amet <span>Roshan Kanwar</span> adipisicing elit. Fuga tenetur odit, nam necessitatibus suscipit voluptas quisquam officiis expedita consequatur architecto commodi dolorem veritatis magnam animi aliquam modi nostrum debitis! Dolorum?</p>
           <p>Accusantium ratione sed quo, rem quae deleniti natus necessitatibus reprehenderit. Lorem, ipsum dolor sit amet consectetur <span>Korba</span> elit. Saepe, neque. </p>
           <p>Lorem ipsum dolor <span>Engineering</span> consectetur adipisicing elit. Porro laudantium eos, perferendis quis, ducimus aut magni dolores alias quam voluptates iure ab ipsum ad illo aliquid voluptatibus rem. Aut, magnam.</p>
       </div>
       <div class="text-center">
        <a href="{{route('contact')}}" class="btn btn-warning my-3 mx-5">Hire Me</a>
        <a href="{{route('contact')}}" class="btn btn-outline-info my-3">Contact</a>
    </div>
@endsection