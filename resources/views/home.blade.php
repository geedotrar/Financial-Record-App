@extends('layouts.layout')

@section('title', 'Dashboard')

<style>
.form-container {
  max-width: 100%;
  overflow-x: hidden;
  overflow-y: hidden;
}
</style>

@section('content')
<div>
    <h1>Home</h1>

    <p>Welcome, {{ Auth::user()->username }}!</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
@endsection

