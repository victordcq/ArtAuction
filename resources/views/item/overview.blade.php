{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Art Shop &raquo; Items')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/')}}/">Art shop</a> &raquo;  Items</p>
    <div class="filter clearfix">        
        {!! Form::open(array('url' => 'items/', 'method' => 'post')) !!}
            <div class="form-details">
                <div class=" form-name">
                    {!! Form::label('name', 'Title:') !!}
                    {!! Form::text( 'name',null,array('class' => 'form-controln')) !!}
                </div>
                <div class=" form-name">
                    {!! Form::label('name_artist', 'Name artist:') !!}
                    {!! Form::text('name_artist', '', array('class' => 'form-controln')) !!}
                </div>

                <div class=" form-origin">
                    {!! Form::label('origin', 'Origin (country):') !!}
                    {!! Form::text('origin', '', array('class' => 'form-controlv')) !!}
                </div>
                <div class=" form-year">
                    {!! Form::label('yearmin', 'From (year)') !!}
                    {!! Form::number('yearmin', '', array('class' => 'form-controlv')) !!}
                </div>
                <div class=" form-year">
                    {!! Form::label('yearmax', 'Till (year)') !!}
                    {!! Form::number('yearmax', '', array('class' => 'form-controlv')) !!}
                </div>
                
            </div>
            <div class=" form-checkbox">
                {!! Form::label('category_id', 'Categories:') !!}
                @foreach($category as $cat)
                    <label>{!! Form::checkbox('category_id[]', $c++, null)!!} {!! $cat !!} </label>                
                @endforeach            
            </div>
            <div class=" form-checkbox">
                {!! Form::label('subject_id', 'Subjects:') !!}
                @foreach($subject as $sub)
                    <label>{!! Form::checkbox('subject_id[]', $s++, null)!!} {!! $sub !!} </label>                
                @endforeach            
            </div>
            <div class=" form-checkbox">
                {!! Form::label('type_id', 'Types:') !!}
                @foreach($type as $typ)
                    <label>{!! Form::checkbox('type_id[]', $t++, null)!!} {!! $typ !!} </label>                
                @endforeach            
            </div>
            
            <div class=" knop">
            {!! Form::submit('Filter', array('class' => 'btn btn-info')) !!}
            </div>
        {!! Form::close() !!}
    </div>

    <section class="items clearfix">

        @if ($items)

            <p class="results">{{$items->count()}} results found</p>
        
            @forelse ($items as $item)
                <article class="list">
                    <div class="grid-left">
                        <div class="viewimg">
                            <img src="/storage/img/{{ $item->id }}/1.jpg" width="500" height="500"></img>
                        </div>
                    </div>
                    <div class="grid">
                        <h1 class="itemname"><a href="{{ url('/items')}}/{{ $item->id }}" title="{{ $item->name }}">{{ $item->name }}</a></h1>
                        <h2>Artist: {{$item->name_artist}}</h2>
                        <p class="type">- {{$item->types->name}}</p>
                    
                    
                    
                        @if ($item->offers()->max('price'))
                            <p class='offer'>Highest offer: € {{ $item->offers()->max('price') }}</p>
                        @else
                            <p class='offer'> No offers yet!</p>
                        @endif      
                                        
                        <footer>being sold by <em><a href="{{url('/users')}}/{{ $item->users_id }}">{{ $item->users->firstname }} {{ $item->users->lastname }}</a></em> </footer>
                    </div>
                    <div class="grid-right">
                        <p class="offerbtn"><a href="{{ url('/admin/item')}}/{{$item->id}}/offer" class="btn btn-info"><i class="glyphicon"></i> Make an offer</a></p> 
                    </div>

                    
                </article>
            @empty
                <p class="results">Try a different filter</p>
            @endforelse

        @endif
        
    </section>


@endsection