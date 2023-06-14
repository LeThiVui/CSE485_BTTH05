@extends('layouts.base')
<!-- Triển khai title  -->
@section('title','Home Page')
@section('main')
    <div class ="row mt-4" >
        @foreach($articles as $article)
        <div class="col-md-3 mb-2">
            <div class="card" style="width: 18rem;">
                <img src="{{$article->hinhanh}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="{{$article->ten_bviet}}">Card title</h5>
                    <p class="card-text">
                        <a href="{{route('articles.show',$article->ma_bviet)}}" class="text-decoration-none">
                        {{$article->tomtat}}
                        </a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection