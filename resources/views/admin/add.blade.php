{{-- extend the parent tpl --}}
@extends('admin-master')
@section('title', 'Admin &raquo; Item &raquo; Add Item')

@section('JS')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection

@section('content') 
<section class="users">
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Item form -->
        {!! Form::open(array('url' => 'admin/items/create', 'method' => 'post', 'files' => true)) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', '', array('class' => 'form-control')) !!}
        </div>        
        <div class="form-group">
            {!! Form::label('category_id', 'Categories:') !!}
                @foreach($category as $cat)
                    <label>{!! Form::checkbox('category_id[]', $c++, null)!!} {!! $cat !!} </label>             
                @endforeach            
        </div>
        <div class="form-group">
            {!! Form::label('subject_id', 'Subjects:') !!}
                @foreach($subject as $sub)
                    <label>{!! Form::checkbox('subject_id[]', $s++, null)!!} {!! $sub !!} </label>                
                @endforeach            
        </div>
        <div class="form-group">
            {!! Form::label('type_id', 'Types:') !!}
                @foreach($type as $typ)
                    <label>{!! Form::radio('type_id', $t++, null)!!} {!! $typ !!} </label>                
                @endforeach            
        </div>
        <div class="form-group">
            {!! Form::label('name_artist', 'Name artist:') !!}
            {!! Form::text('name_artist', '', array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('origin', 'Origin:') !!}
            {!! Form::text('origin', '', array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('year', 'Year:') !!}
            {!! Form::number('year', '', array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('discription', 'Discription:') !!}
            {!! Form::textarea('discription', '', array('class' => 'form-control', 'rows' => '10')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('images[]', 'Images:') !!}
            {!! Form::file('images[]', array('multiple'=>true, 'accept' =>'image/jpeg')) !!}
        </div>

        <a href="{{ url('/admin') }}">Cancel</a>
        {!! Form::submit('submit', array('class' => 'btn btn-primary pull-right')) !!}
        {!! Form::close() !!}
    </div>
    </section>
@endsection