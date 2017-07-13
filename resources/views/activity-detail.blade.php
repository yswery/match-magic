@include('base')
@yield('body')
    <h1 style="text-align: center">Activity Detail | {{ app('request')->path('slug') }}</h1>
