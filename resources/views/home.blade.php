@extends('layouts.app')

@section('title') Main page @endsection

@section('content')
    <h1>Main page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempore sequi magnam quia exercitationem facilis dolorum delectus aperiam pariatur, aut, accusamus ipsa. Culpa corporis officiis sed provident! Illum, sunt molestiae.</p>
@endsection

@section('aside')
    @parent
    <p>Text</p>
@endsection
