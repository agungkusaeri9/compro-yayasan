@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Setting</h4>
                    <form method="post" action="{{ route('admin.setting.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="site_name">Nama Situs</label>
                            <input type="text" class="form-control @error('site_name') is-invalid @enderror"
                                value="{{ $setting->site_name ?? '-' }}" name="site_name">
                            @error('site_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                value="{{ $setting->email ?? '-' }}" name="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">No. HP</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                value="{{ $setting->phone ?? '-' }}" name="phone">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" cols="30" rows="4"
                                class="form-control @error('address') is-invalid @enderror" style="min-height: 120px">{{ $setting->address ?? '-' }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="author">Pemilik</label>
                            <input type="text" class="form-control @error('author') is-invalid @enderror"
                                value="{{ $setting->author ?? '-' }}" name="author">
                            @error('author')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="visi_misi">Visi Misi</label>
                            <textarea name="visi_misi" id="visi_misi" cols="30" rows="4"
                                class="form-control @error('visi_misi') is-invalid @enderror" style="min-height: 120px">{{ $setting->visi_misi ?? '-' }}</textarea>
                            @error('visi_misi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description" cols="30" rows="4"
                                class="form-control @error('description') is-invalid @enderror" style="min-height: 120px">{{ $setting->description ?? '-' }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        @if ($setting)
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="favicon">Favicon</label>
                                        <img src="{{ $setting->favicon() }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md align-self-center">
                                        <input type="file" class="form-control @error('favicon') is-invalid @enderror"
                                            value="{{ $setting->favicon ?? '-' }}" name="favicon">
                                        @error('favicon')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        @else
                            <div class="form-group">
                                <label for="favicon">Favicon</label>
                                <input type="file" class="form-control @error('favicon') is-invalid @enderror"
                                    value="{{ $setting->favicon ?? '-' }}" name="favicon">
                                @error('favicon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        @endif
                        @if ($setting)
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="image">Gambar</label>
                                        <img src="{{ $setting->image() }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md align-self-center">
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            value="{{ $setting->image ?? '-' }}" name="image">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        @else
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    value="{{ $setting->image ?? '-' }}" name="image">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        @endif
                        <button type="submit" class="btn btn-block btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<x-Admin.Sweetalert />
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/summernote/summernote-bs4.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 300
            });
        });
        $('#visi_misi').summernote({
            height: 300
        });
    </script>
@endpush
