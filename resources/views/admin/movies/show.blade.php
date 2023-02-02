@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="card">

            <div class="card-header">
                {{$movie -> title}}
            </div>

            <div class="card-body">
                {{$movie -> original_title}}
                <br>
                {{$movie -> nationality}}
                <br>
                {{$movie -> date}}
                <br>
                {{$movie -> vote}}
                <br>
            </div>
            
        </div>
    </div>
</div>

@endsection