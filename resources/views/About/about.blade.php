@extends('header')
@section('content')
<h1>哈哈哈</h1>
    @if($name == 'World~!')
        <h1>真</h1>
    @else
        <h1>假</h1>
    @endif
    <h1>开始测试foreach</h1>
    @if(count($ceshi) > 0)
    <ul>
        @foreach($ceshi as $data)
            <li>{{ $data }}</li>
        @endforeach
    </ul>
    @endif
@stop
