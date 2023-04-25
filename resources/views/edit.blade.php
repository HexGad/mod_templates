@extends('dashboard.layouts.base')
@section('toolbar')
    @include('dashboard.layouts.components.toolbar',[
        'title' => 'Templates',
        'breadcrumbs' => [
            ['title'=> 'Home', 'url' => url('/dashboard/')],
            ['title'=> 'Templates', 'url' => route('dashboard.templates.index')],
            ['title'=> 'Edit Templates'],
        ]
    ])
@endsection

@push('styles')
    {{ module_vite('templates', 'resources/assets/sass/app.scss') }}
@endpush


@section('content')
    <div id="app">
        <edit :template-data="{{json_encode($template)}}"></edit>
    </div>
@endsection

@push('scripts')
    {{ module_vite('templates', 'resources/assets/js/app.js') }}
@endpush
