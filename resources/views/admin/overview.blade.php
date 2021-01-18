{{-- extend the parent tpl --}}
@extends('admin-master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Admin &raquo; Items &raquo; Overview')


@section('content')
    <p class="breadcrumb"><a href="{{ url('/') }}/">Art Shop</a> &raquo; <a href="{{ url('/') }}/admin">admin</a> &raquo; overview</p>

    <section class="adminview">
    <h1>Overview of your items</h1>
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Title</th>
            <th>Created on</th>
            <th class="text-center">#Offers</th>
            <th class="text-center">Highest Bid</th>            
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if($items)
            @forelse($items as $item)
                <tr>
                <td >
                        {!! Form::open(array('url' => 'admin/items/delete', 'method' => 'post', 'class' => "delete")) !!}
                        {{-- CSRF protection is included through collective --}}
                        {{ Form::hidden('id', $item->id) }}

                        {{-- {!! method_field('DELETE') !!} -- }}
                        {{-- creates a hidden field to link to the DELETE method --}}
                        <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                        {!! Form::close() !!}
                    </td>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('/items/' . $item->id ) }}">{{ $item->name }}</a></td>
                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('d/m/Y - h:i') }}</td>
                    <td class="text-center">{{ $item->offers->count() }}</td>
                    <td class="text-center">{{ $item->offers()->max('price') }}</td>
                    
                    <td class="text-right">
                        <a href="{{ url('/admin/items/'. $item->id . '/update') }}" class="btn btn-primary btn-sm"><i class="glyphicon "></i> Adjust item</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>&nbsp;</td>
                    <td>No items to show! </td>
                </tr>
            @endforelse
        @endif
        </tbody>
    </table>

    <p class="text-center"><a href="{{ url('/admin/items/create') }}" class="btn btn-success "><i class="glyphicon"></i> Sell another item</a></p>
</section>
    <script>
        jQuery(function($) {
            $('form.delete').on('submit', function(e) {
                return confirm('Sure you want to delete this item?');
            });
        });
    </script>

@endsection