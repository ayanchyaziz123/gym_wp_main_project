@extends('members.layout')
@section('content')
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Show user
        </h2>
    </x-slot>


<div class="container mt-5">
   
    <form action="{{route('members.update', $member->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <label>User Name</label>
                <input type="text" name="user_name" class="form-control" placeholder="ayan123" value="{{$member->user_name}}" readonly>
                <br>
            </div>
            <div class="col-6">
                <label>Date Of Birth</label>
                <input type="text" name="user_name" class="form-control" placeholder="ayan123" value="{{$member->dob}}" readonly>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="ayan123" value="{{$member->first_name}}" readonly>
                <br>
            </div>
            <div class="col-6">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="ayan123" value="{{$member->last_name}}" readonly>
                <br>
            </div>
        </div>
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="ayan123" value="{{$member->email}}" readonly>
        <br>

        <div class="row">
            <div class="col-6">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control" placeholder="ayan123" value="{{$member->mobile}}" readonly>
                <br>
            </div>
            <div class="col-6">
                <label>Address</label>
                <input type="text" name="mobile" class="form-control" placeholder="ayan123" value="{{$member->address}}" readonly>
                <br>
            </div>
        </div>

        <label>Fees</label>
        <input type="text" name="mobile" class="form-control" placeholder="ayan123" value="{{$member->fees}}" readonly>
        <br>


    </form>

</div>
</x-app-layout>