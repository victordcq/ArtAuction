{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Art shop &raquo; users')

@section('content')
<p class="breadcrumb"><a href="{{ url('/') }}/">Art shop</a> &raquo; Users</p>

<section class="users">
    <h1>Users</h1>
    @if ($users)
        <ul>
            @forelse ($users as $user)
                
                    <li><a href="{{ url('/') }}/users/{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</a></li>                
            @empty
                <li>No users to show!</li>
            @endforelse
        </ul>
    @endif
</section>
@endsection