@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h2>About Me</h2>
    <p>I am a System Analyst and Developer with 2 years of experience. I have developed systems in Python (Multi Facility System), PHP (Hospital Management System, Audit System, eVoting System), and Node.js/Express (Vision Group Analytics System). Currently, I am pursuing an apprenticeship with Refactory Uganda and volunteering with CPHL as a system developer.</p>
    <a href="{{ url('/projects') }}" class="btn btn-outline-primary mt-3">View My Projects</a>
</div>
@endsection
