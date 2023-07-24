@extends('layouts.app')

@section('content')
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
                    <img src="{{ $comic['thumb']}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection