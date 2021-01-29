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
    <a class="btn btn-info mt-5 mb-2" href="{{route('members.create')}}">Add a Member</a>
    <div>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
    </div>
    
    <table class="table table-striped" id="myTable">
        <thead>
            <tr>
                <th scope="col">User name</th>
                <th scope="col">First Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Fees</th>
                <th scope="col">Action</th>


            </tr>
        </thead>
        @foreach ($members as $member)
        

            <tr>
                <td>{{$member->user_name}}</td>
                <td>{{$member->first_name}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->address}}</td>
                <td>{{$member->fees}}</td>
                <td>
                    <form action="{{route('members.destroy', $member->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                        <a class="btn btn-primary" href="{{route('members.show', $member->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a class="btn btn-warning m-2" href="{{route('members.edit', $member->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        
        @endforeach
    </table>
    {{$members->links()}}
      </span>
      <style>
      .w-5{
        display: none;
      }
      </style>

</div>

</x-app-layout>
