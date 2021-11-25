@extends('welcome')
@section('mainSection')
    <div class="col-md-10">
        <h3 class="text-center bg-warning font-weight-bold">Book Detail</h3>
        <div class="row">
            <div class="col-md-3">
                <label for="" class="label">Title : </label>
            </div>
            <div class="col-md-9">
                {{$book->title}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="" class="label">Author : </label>
            </div>
            <div class="col-md-9">
                {{$book->Detail->author}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="" class="label">Publisher : </label>
            </div>
            <div class="col-md-9">
                {{$book->Detail->publisher}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label for="" class="label">Year : </label>
            </div>
            <div class="col-md-9">
                {{$book->Detail->year}}
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <label for="" class="label">Description : </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                {{$book->Detail->description}}
             </div>
        </div>
    </div>
@endsection
