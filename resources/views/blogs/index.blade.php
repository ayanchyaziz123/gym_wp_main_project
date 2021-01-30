@extends('members.layout')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ALL Members
        </h2>
    </x-slot>



    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif



    <div class="container">
        <a class="btn btn-info mt-5 mb-2" href="{{route('adminBlog.create')}}">Add a Blog</a>
        <div>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        </div>

        <table class="table table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            @foreach ($blogs as $blog)


            <tr>
            <td><img src="/upload/{{$blog->img_path}}" style="max-height:50px";></td>
                <td>{{substr($blog->title,0 , 30)}}...</td>
                <td>{{substr($blog->descriptions,0 , 30)}}...</td>
                <td>{{substr($blog->author,0 , 20)}}...</td>
                <td>
                    <form action="{{route('adminBlog.destroy', $blog->id)}}" method="POST">
                        <a class="btn btn-primary" href="{{route('adminBlog.show', $blog->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a class="btn btn-warning m-2" href="{{route('adminBlog.edit', $blog->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>

            @endforeach
            
        </table>
        {{$blogs->links()}}
      </span>
      <style>
      .w-5{
        display: none;
      }
      </style>

    </div>

</x-app-layout>