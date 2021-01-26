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
                <th scope="col">Nameame</th>
                <th scope="col">Email</th>
                <th scope="col">Comment</th>
                <th scope="col">Action</th>


            </tr>
        </thead>
        @foreach ($contacts as $contact)
        

            <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->Comment}}</td>
                <td>
                    <form>
                        <a class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a class="btn btn-warning m-2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        
        @endforeach
    </table>

</div>

</x-app-layout>
