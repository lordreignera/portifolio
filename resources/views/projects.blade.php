@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h2>Projects</h2>
    <ul>
        <li>Multi Facility System (Python)</li>
        <li>Hospital Management System (PHP)</li>
        <li>Audit System (PHP)</li>
        <li>eVoting System (PHP)</li>
        <li>Vision Group Analytics System (Node.js/Express)</li>
    </ul>
    <a href="{{ url('/experience') }}" class="btn btn-outline-primary mt-3">My Experience</a>
</div>
@endsection
