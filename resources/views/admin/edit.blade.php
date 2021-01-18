{{-- extend the parent tpl --}}
@extends('admin-master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Admin &raquo; item &raquo; Edit item')

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
        <!-- New item form -->
        {!! Form::open(array('url' => 'admin/items/'. $item->id . '/update', 'method' => 'post')) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $item->name, array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categories:') !!}
                @foreach($category as $cat)             
                    <label>{!! Form::checkbox('category_id[]', $c, ($checkedCat->contains($c++)? true : false) )!!} {!! $cat !!} </label>                
                @endforeach            
        </div>
        <div class="form-group">
            {!! Form::label('subject_id', 'Subjects:') !!}
                @foreach($subject as $sub)             
                    <label>{!! Form::checkbox('subject_id[]', $s, ($checkedSub->contains($s++)? true : false))!!} {!! $sub !!} </label>                
                @endforeach            
        </div>
        <div class="form-group">
            {!! Form::label('type_id', 'Types:') !!}
                @foreach($type as $typ)
                    <label>{!! Form::radio('type_id', $t, (($checkedType==$t++)? true : false))!!} {!! $typ !!} </label>
                @endforeach            
        </div>
        <div class="form-group">
            {!! Form::label('name_artist', 'Name artist:') !!}
            {!! Form::text('name_artist', $item->name_artist, array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('origin', 'Origin:') !!}
            {!! Form::text('origin', $item->origin, array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('year', 'Year:') !!}
            {!! Form::number('year', $item->year, array('class' => 'form-control')) !!}
        </div>
         <div class="form-group">
            {!! Form::label('discription', 'Discription:') !!}
            {!! Form::textarea('discription', $item->discription, array('class' => 'form-control', 'rows' => '10')) !!}
        </div>       
        <a href="{{ url('/admin') }}">Cancel</a>
        {!! Form::submit('submit', array('class' => 'btn btn-primary pull-right')) !!}
        {!! Form::close() !!}
    </div>
    </section>
@endsection