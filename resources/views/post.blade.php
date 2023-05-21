@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="card mt-3">
        <div class="card-body">
            <h1 class="card-title">Judul</h1>
            <p class="card-text">Deskripsi</p>
            <h5 class="card-price">Harga</h5>
        </div>
        <a href="/pricing">back</a>
    </div>
</div>
@endsection

<style>
.card {
    background-color: black;
    color: white;
    padding: 20px;
}
</style>
