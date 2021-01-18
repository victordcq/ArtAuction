{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Art Shop &raquo; Items &raquo; users - Detail')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/') }}/">Art Shop</a> &raquo; <a href="{{ url('/') }}/users">users</a> &raquo; {{ $users->firstname }} {{ $users->lastname }}</p>

    <section class="users">
        <div>
            <h1>{{ $users->firstname }} {{ $users->lastname }}</h1>
            <dl class="clearfix">
                <dt>E-mail address:</dt>
                    <dd><a href="mailto:{{ $users->email }}">{{$users->email}}</a></dd>               
                <dt>address:</dt>
                    <dd>{{ $users->address }}</dd>              
                
            </dl>
            <p><a href="{{ url('/') }}/users/{{ $users->id }}/items"><b>Show Items from this user >> <b></a></p>
        </div>
        
    </section>
    <p class="back"><a id="backa" href="{{ url('/') }}/users"> << Back to user overview</a></p>
@endsection