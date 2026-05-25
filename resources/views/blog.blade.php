@extends('master')

@section('title', 'BLOG : Halaman Home')

@section('judul_halaman', 'Halaman Home')

@section('konten')
    <h2>Welcome to My Blog</h2>
    <p>If you can read this, the controller and the view are working perfectly.</p>

    <div class="card mt-4">
        <div class="card-header">
            <h5>Latest Posts</h5>
        </div>
        <div class="card-body">
            <p>Check out the <strong>TENTANG</strong> page to learn more about this blog.</p>
            <p>Have any questions? Visit our <strong>KONTAK</strong> page to get in touch!</p>
        </div>
    </div>
@endsection
