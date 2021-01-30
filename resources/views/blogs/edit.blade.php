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
    
<form action="{{route('adminBlog.update', $blogs->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-6">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="title" value="{{$blogs->title}}">
                <br>
            </div>
            <div class="col-6">
                <label>Descriptions</label>
                <textarea type="text" name="descriptions" class="form-control" placeholder="descriptions">{{$blogs->descriptions}}</textarea>
                <br>
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <label>Author</label>
                <input type="text" name="author" class="form-control" placeholder="author" value="{{$blogs->author}}">
                <br>
            </div>
            <div class="col-6">
            <label>Old Image</label>
            <div><img src="/upload/{{$blogs->img_path}}" style="max-height:100px" ;></div>
                <label>Add new Image</label>
                <input type="file" name="img_path" class="form-control" >
                <br>
            </div>
        </div>

       


        
        
        <button class="btn btn-info" type="submit">Update</button>

    </form>
</div>
</x-app-layout>