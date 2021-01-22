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
            Create Members 
        </h2>
    </x-slot>

<div class="container mt-5">
    <form action="{{route('members.store')}}" method="POST">
        @csrf



        <div class="row">
            <div class="col-6">
                <label>User name</label>
                <input type="text" name="user_name" class="form-control" placeholder="ayan123">
                <br>
            </div>
            <div class="col-6">
                <label>Date Of Birth</label>
                <input type="date" name="dob" class="form-control">
                <br>
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First name">
                <br>
            </div>
            <div class="col-6">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last name">
                <br>
            </div>
        </div>
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="gym@gmail.com">
        <br>
        <div class="row">
            <div class="col-6">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control" placeholder="017*****">
                <br>
            </div>
            <div class="col-6">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="address">
                <br>
            </div>
        </div>
        <label>Fees</label>
                <input type="text" name="fees" class="form-control" placeholder="1440.00">
        <br>



        <button class="btn btn-info" type="submit">ADD</button>

    </form>
</div>
</x-app-layout>
