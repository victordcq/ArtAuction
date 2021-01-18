{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'Art shop &raquo; users')

@section('content')
<p class="breadcrumb"><a href="{{ url('/') }}/">Art shop</a> &raquo; About</p>

<section class="users">
    <h1>About art shop</h1>
    <p>This art shop has been created by Victor Declercq. It was a task for school. All items are not really being sold, this is just a demonstration website. Subjects, categories, and the art have been chosen randomly. There may be some mistakes about the information about each item, they are just examples.</p>
    <p>
    Several data especialy numbers and dates are created randomly, so some numbers may be weird, the dates will go back several years even before the creation of this website. It may be that some items are being sold that havent even been created yet. These are just examples </p>
    <p>Offers are also generared randomly so some prices might be to high or low for their real value. Do not take these serious for  a real auction</p>
    <p> This content was not allowed to be random, yet this was all rather useless information just to fill this page a bit, this about page is just an example. Usualy here should be more information about the website, but as this website is not real, i cant create a realistic about page.</p>
    
    <p>Contact:  <a href="{{ url('/') }}/users/{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}</a></p>
</section>
@endsection