{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Art shop &raquo; Categories')

@section('content')
<p class="breadcrumb"><a href="{{ url('/') }}/">Art shop</a> &raquo; Categories</p>

<section class="users">
    <h1>Categories</h1>
    @if ($categories)
        <ul>
            @forelse ($categories as $category)                
                    <li><a href="{{ url('/') }}/categories/{{ $category->id }}">{{ $category->name }}</a></li>                
            @empty
                <li>No categories to show!</li>
            @endforelse
        </ul>
    @endif
</section>
@endsection