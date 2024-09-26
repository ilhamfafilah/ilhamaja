@extends('Layout')

@section('content')
    <main>
        @include('home')
        @include('about')
        @include('proyek')
        @include('kontak')
    </main>

    {{-- @include('Footer') --}}
@endsection
