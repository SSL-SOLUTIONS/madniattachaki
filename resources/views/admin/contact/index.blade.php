<!-- resources/views/products/index.blade.php -->
<link rel="icon" type="image/jpeg" href="{{ asset('website/favicon.jpeg') }}">
@extends('admin') <!-- Assuming you have a master layout -->

@section('content')
    <div class="container">
        <h2>All Messages</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contactusmessages as $contactusmessage)
            <tr>
        <td>{{$contactusmessage->name}}</td>
        <td>{{$contactusmessage->email}}</td>
        <td>{{$contactusmessage->phone}}</td>
        <td>{{$contactusmessage->subject}}</td>
        <td>{{$contactusmessage->message}}</td>
        <td>{{$contactusmessage->created_at->format('M d, Y')}}</td>

        <td> 
            @if($contactusmessage->status == 0)
            <a href="{{route('contactus.show',$contactusmessage->id)}}" class="btn btn-warning text-white">Mark as read</a>    
            @else
                <i class="fa fa-envelope-open"></i>
            @endif
        </td>
    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
