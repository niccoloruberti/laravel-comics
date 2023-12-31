@extends('layouts.app')

@section('content')
    {{-- prima sezione --}}
    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-8">
                <div class="content">
                    <h2>{{ $comic['title'] }}</h2>
                    <div class="w-100 d-flex bg-success bg-opacity-75 my-3">
                        <div class="w-75 d-flex justify-content-between border border-secondary p-3">
                            {{-- price --}}
                            <div class="">
                                <span>U.S. Price: </span><span class="text-white">{{ $comic['price']}}</span>
                            </div>
                            {{-- available --}}
                            <div>
                                <span>AVAILABLE</span>
                            </div>
                        </div>
                        <div class="w-25 p-3 border border-secondary">
                            {{-- check availability --}}
                            <span class="text-white">Check Availability <i class="fas fa-caret-down text-white"></i></span>
                        </div>
                    </div>
                    <p>{{ $comic['description']}}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="content d-flex flex-column align-items-end">
                    <label class="text-uppercase">advertisement</label>
                    <img src="{{ Vite::asset('resources/img/adv.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    {{-- seconda sezione --}}
    <div class="bg-light">
        <div class="container">
            <div class="row py-3 pb-5">
                {{-- colonna sinistra --}}
                <div class="col-6">
                    <div class="row me-3">
                        <div class="col-12">
                            <div class="content border-bottom">
                                <h4>Talent</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-2 me-3 border-bottom">
                        <div class="col-4">
                            <div class="content">
                                <h6>Art by:</h6>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="content">
                                <p class="text-info">
                                    @foreach($comic['artists'] as $artist)
                                        {{$artist}}, 
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-2 me-3 border-bottom">
                        <div class="col-4">
                            <div class="content">
                                <h6>Written by:</h6>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="content">
                                <p class="text-info">
                                    @foreach($comic['writers'] as $writer)
                                        {{$writer}}, 
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- colonna destra --}}
                <div class="col-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="content border-bottom">
                                <h4>Specs</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-2 border-bottom">
                        <div class="col-4">
                            <div class="content">
                                <h6>Series:</h6>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="content">
                                <p class="text-uppercase text-info">{{$comic['series']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-2 border-bottom">
                        <div class="col-4">
                            <div class="content">
                                <h6>U.S. Price:</h6>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="content">
                                <p class="">{{ $comic['price']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-2 border-bottom">
                        <div class="col-4">
                            <div class="content">
                                <h6>On Sale Date:</h6>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="content">
                                <p class="">{{ $comic['sale_date']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection