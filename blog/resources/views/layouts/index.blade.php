@extends('layouts.app')

@include ('layouts.navbar.nav')


@yield('content')

@include ('layouts.footer.footer')

@stack('scripts')