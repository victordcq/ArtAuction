
@extends('master')

@section('title', 'Art Shop &raquo; Items &raquo; Detail')

@section('CSS')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick.css') }}"/>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick-theme.css') }}"/>
@endsection


@section('content')
    <p class="breadcrumb"><a href="{{ url('/') }}/">Art Shop</a> &raquo;<a href="{{ url('/items') }}"> items</a> &raquo; {{ $item->name }}</p>

<section class="detailItem">
    <div>
        <h1><a href="{{ url('/items')}}/{{ $item->id }}" title="{{ $item->name }}">{{ $item->name }}</a> ({{$item->types->name}})</h1>
        <h2>Artist: {{$item->name_artist}}</h2>


        @if ($item->offers()->max('price'))
            <p class='offer'><b>Highest offer:</b> € {{ $item->offers()->max('price') }}</p>
        @else
            <p class='offer'> No offers yet!</p>
        @endif

        <p class="text-right"><a href="{{ url('/admin/item')}}/{{$item->id}}/offer" class="btn btn-info"><i class="glyphicon"></i> Make an offer</a></p>


        <div class="detailimg">
            <img src="/storage/img/{{ $item->id }}/1.jpg"></img>
        </div>

        <div class='details'>
            <h1>Details</h1>
            <div class='detail-left'>
                
                <p><b>Origin:</b> {{$item->origin}}</p>
                <p><b>Year:</b> {{$item->year}}</p>
                <p><b>Type:</b> {{$item->types->name}}</p>
            </div>
            <div class='detail-middle'>
                <p><b>subjects:</b></p>
            @if ($item->subjects)
                @forelse ($item->subjects as $subject)
                    <p>{{$subject->name}}</p>
                @empty
                    <p>No specified subjects</p>
                @endforelse
            @endif
            </div>
            <div class='detail-right'>
            <p><b>categories:</b></p>
            @if ($item->categories)
                @forelse ($item->categories as $category)
                    <p>{{$category->name}}</p>
                @empty
                    <p>No specified categories</p>
                @endforelse
            @endif
            </div>
        </div>
        <div class='discription'>
        <h3>Description</h3>
            {!! $item->discription !!}
        </div>
                    
        <p><b>Being sold by:</b> <em><a href="{{url('/users')}}/{{ $item->users_id }}">{{ $item->users->firstname }} {{ $item->users->lastname }}</a></em> on <em>{{ $item->created_at }}</em></p>

        @if ($item->offers()->max('price'))
            <p class='offer'><b>Number of offers:</b> {{ $item->offers->count() }}</p>
            <p class='offer'><b>Highest offer:</b> € {{ $item->offers()->max('price') }}</p>
        @else
            <p class='offer'> <b>No offers yet!</b></p>
        @endif
        
        <p class="text-right"><a href="{{ url('/admin/item')}}/{{$item->id}}/offer" class="btn btn-info"><i class="glyphicon"></i> Make an offer</a></p>
    </div>
</section>
<p class="back"><a id="backa" href="{{ url('/items') }}">&larr; Back to shop overview</a></p>

    

@endsection