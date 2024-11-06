@extends('layouts.adminlayouts')
@section('title', 'Add Tasks')
@section('content')
    @include('admin.section.sidebar')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-6">
                    <h2>Vazifa yaratish</h2>
                        <form action="{{ route('admin.my-tasks.store')}}" method="POST">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Vazifa nomi</label>
                                        <input name="title" type="text"
                                               class="form-control @error('title') is-invalid @enderror">
                                        @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Vazifa tavsifi</label>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Saqlamoq</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </section>
    </div>
@endsection
