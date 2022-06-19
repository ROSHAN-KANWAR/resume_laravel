@extends('layouts.main')
@section('titlepage')
<title>Welcome Skill page</title>    
@endsection
@section('main-section')

<div class="container mt-5">
    <h2 class="text-warning mb-4 border-bottom">Skill</h2>
    <div class="row text-white">
        <div class="col-sm-5 text-center">
            <h3 class="mt-5">HTML/CSS</h3>
            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
        </div>
        <div class="col-sm-5 offset-sm-2 text-center">
            <h3 class="mt-5">JavaScript</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    style="width: 90%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="90">90%</div>
            </div>
        </div>
    </div>
    <div class="row text-white mt-5">
        <div class="col-sm-5 text-center">
            <h3 class="mt-5">JavaPrograme</h3>
            <div class="progress">
                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar"
                    style="width: 50%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="50">50%</div>
            </div>
        </div>
        <div class="col-sm-5 offset-sm-2 text-center">
            <h3 class="mt-5">Python</h3>
            <div class="progress">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                    style="width: 70%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="70">70%</div>
            </div>
        </div>
    </div>
    <div class="row text-white mt-5">
        <div class="col-sm-5">
            <h3 class="mt-5">SQL</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                    style="width: 80%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="80">80%</div>
            </div>
        </div>
        <div class="col-sm-5 offset-sm-2">
            <h3 class="mt-5">Angular</h3>
            <div class="progress">
                <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar"
                    style="width: 80%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="80">80%</div>
            </div>
        </div>
    </div>
</div>


@endsection