@extends('base')
@section('body')
    {{--Hero Banner with Video--}}
    @include('sections/hero')

    {{--Memories--}}
    @include('sections/memories')

    {{--Suggestions--}}
    @include('sections/suggestions')

    {{--Upload forms--}}
    @include('sections/upload-forms')
@endsection