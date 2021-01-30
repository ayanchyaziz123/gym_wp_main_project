@extends('members.layout')
@section('content')

<x-app-layout>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Members
        </h2>
    </x-slot>


<div class="container mt-5">
    
<form>
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-6">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="title" value="{{$contacts->name}}" readonly>
                <br>
            </div>
            <div class="col-6">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="title" value="{{$contacts->email}}" readonly>
                <br>
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <label>Author</label>
                <input type="text" name="author" class="form-control" placeholder="author" value="{{$contacts->Comment}}" readonly>
                <br>
            </div>
    
        </div>

       

    </form>
</div>
</x-app-layout>
