@extends('backend.layouts.base')

@section('title', 'Edit Category')

@section('content')

<div class="container-fluid">
    <livewire:backend.category.manage categoryId="{{ $category->id }}" />
</div>

@endsection