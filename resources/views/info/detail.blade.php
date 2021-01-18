{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Art Shop &raquo; categories &raquo; category - Detail')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/') }}/">Art Shop</a> &raquo; <a href="{{ url('/') }}/categories">categories</a> &raquo; {{ $category->name }} </p>

    <section class="users">
        <div>
            <h1>{{ $category->name }} </h1>
            <div class='discription'>
            {!! $category->discription !!}
        </div>
        </div>
    </section>
    <p class="back"><a id="backa" href="{{ url('/') }}/categories"> << Back to categories overview</a></p>
@endsection