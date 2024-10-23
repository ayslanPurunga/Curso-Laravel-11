@extends('admin.layouts.app')
@section('title', 'Criação de novo usuário')

@section('content')
@include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <h2 class="mb-4 text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Novo Usuário
        </h2>
    </div>

{{-- @include('admin.includes.errors') --}}
<form action="{{ route('users.store')}}" method="POST">
    @include('admin.users.partials.form')
</form>

@endsection()
