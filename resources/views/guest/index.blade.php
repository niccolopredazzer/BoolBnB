@extends('layouts.layout')
@section('content')

    <div class="offset-1 col-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Pages</li>
		    </ol>
        </nav>

        {{-- TUTTI POSSONO VEDERE LE CASE --}}
        <div class="row">
            <div class="col-5">
                <h2>Pages</h2>
            </div>
        </div>
        <form class="" action="{{route('houses.store')}}"  method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
        <form>
        <div class="form-group">
                <label for="address">Address</label>
                <input type="search" id="address" name="address" placeholder="Where are we going?"> </input>
        </div>
        {{-- LONG --}}
        <div class="form-group">
                <input type="hidden" class="form-control" name="longitude" id="longitude"></input>
        </div>
        {{-- LAT --}}
        <div class="form-group">
                <input type="hidden" class="form-control" name="latitude" id="latitude"></input>
        </div>
        <div class="form-group">
            <button type="submit" id="dio" class="btn btn-dark">Invia</button>
        </div>
        <table class="table">
            <thead>
                <th>id</th>
                <th>Title</th>
                <th colspan="3">Action</th>
            </thead>
            <tbody>
                @foreach ($houses as $key => $house)
                    <tr>
                        <td>{{$house->id}}</td>
                        <td>{{$house->title}}</td>
                        <td><a class="btn btn-primary" href="{{route('houses.show', $house->id)}}">Visualizza</a></td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
