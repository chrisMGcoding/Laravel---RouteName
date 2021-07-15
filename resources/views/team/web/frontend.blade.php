@extends('template/main')

@section('content')
    <h1>Equipe Front-End</h1>

    <div class="container">
        <div class="row">
        @foreach($frontTab as $item)

            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/'.$item->src)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item->nom}}</h5>
                    <p class="card-text">{{$item->fonction}}</p>
                </div>
            </div>

        @endforeach
        </div>
    </div>

@endsection