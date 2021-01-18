{{-- extend the parent tpl --}}
@extends('admin-master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Admin &raquo; Item &raquo; Add Offer')

@section('JS')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection

@section('content')
        <!-- Bootstrap Boilerplate... -->
<section class="users">
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Offer form -->
        {!! Form::open(array('url' => 'admin/item/'. $item->id . '/offer', 'method' => 'post')) !!}

        <div class="form-group">
            <h2>{{ $item->name }}</h2> 
            @if ($item->offers()->max('price'))
                <p class='offer'>  Highest offer: {{ $item->offers()->max('price') }}€</p>
            @else
                <p class='offer'> No offers yet!</p>
            @endif         
        </div> 

        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::number( 'price',null,array('class' => 'form-control')) !!}
        </div>   

        {!! Form::hidden('item_id',  $item->id ) !!} 
        <a href="{{ url('/') }}">Cancel</a>
        {!! Form::submit('submit', array('class' => 'btn btn-primary pull-right')) !!}

        {!! Form::close() !!}
    </div>
</section>
@endsection