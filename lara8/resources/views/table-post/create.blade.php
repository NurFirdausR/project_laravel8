@extends('partial.ind')

@push('style')
    
<link rel="stylesheet" href="">
@endpush

@section('content')
<h2>Tambah Data</h2>
<form action="/layout/post" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan Title">
        @error('title')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="body">body</label>
        <input type="text" class="form-control" name="body" id="body" placeholder="Masukkan Body">
        @error('body')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
</div>

@endsection