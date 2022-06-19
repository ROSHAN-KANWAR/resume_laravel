@include('layouts.header')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar  text-center">
            <img src="{{asset('photos/avt-img.jpg')}}" alt="" class="mt-4 img-thumbnail img-fluid rounded-circle">
  <div class="nav flex-column  mt-5">
      <a href="{{route('home')}}" class=" nav-link {{ Request::routeIs('home') ? 'active' : ""}}">Home</a>
      <a href="{{route('skill')}}" class=" nav-link {{ Request::routeIs('skill') ? 'active' : ""}}">Skill</a>
      <a href="{{route('service')}}" class=" nav-link {{ Request::routeIs('service') ? 'active' : ""}}">Service</a>
      <a href="{{route('contact')}}" class=" nav-link {{ Request::routeIs('contact') ? 'active' : ""}}">Contact</a>
  </div>
        </div>
        <div class="col-md-10">
            @yield('main-section')
        </div>
    </div>
</div>
@include('layouts.footer');