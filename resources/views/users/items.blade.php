{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Art shop &raquo; users &raquo; Detail &raquo; items')


@section('content')
<p class="breadcrumb"><a href="{{ url('/') }}">Art shop</a> &raquo;
    <a href="{{ url('users') }}">users</a> &raquo; <a href="{{ url('users/' . $user->id) }}">{{ $user->firstname }} {{ $user->lastname }}</a> &raquo; items</p>

<section class="users">
    <h1>Items from {{ $user->firstname }} {{ $user->lastname }}</h1>
    @if ($items)
    <ul>
        @foreach ($items as $item)
        <li><a href="{{ url('items/' . $item->id) }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
    @else
        <p>No items to show!</p>
    @endif
</section>

<p class="back"><a id="backa" href="{{ url('users/' . $user->id) }}">&larr; Back to user detail</a></p>
@endsection