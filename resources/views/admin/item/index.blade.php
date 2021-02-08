@php
$title = '商品一覧';
@endphp

@extends('layouts.admin')

@section('content')
<section>
<p>
    <a href="{{ route('admin.item.create') }}" class="btn btn-outline-primary">{{ __('New') }}</a>
</p>
<p>
    商品追加
</p>
</section>
@endsection