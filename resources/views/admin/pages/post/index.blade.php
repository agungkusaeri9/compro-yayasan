@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Berita</h4>
                    <a href="{{ route('admin.posts.create') }}" class="btn my-2 mb-3 btn-sm py-2 btn-primary">Tambah
                        Berita</a>
                    <div class="table-responsive">
                        <table class="table dtTable table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Jumlah Pengunjung</th>
                                    <th>Penulis</th>
                                    <th>Status</th>
                                    <th>Dibuat</th>
                                    <th style="min-width: 220px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ $item->image() }}" class="img-fluid"
                                                style="max-height: 40px;border-radius:0px" alt="">
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->visitor }}</td>
                                        <td>{{ $item->user->name ?? '-' }}</td>
                                        <td>{!! $item->status() !!}</td>
                                        <td>{{ $item->created_at->translatedFormat('l, d F Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.posts.edit', $item->id) }}"
                                                class="btn btn-sm py-2 btn-info">Edit</a>
                                            <form action="javascript:void(0)" method="post" class="d-inline"
                                                id="formDelete">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btnDelete btn-sm py-2 btn-danger"
                                                    data-action="{{ route('admin.posts.destroy', $item->id) }}">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<x-Admin.Sweetalert />
<x-Admin.Datatable />
