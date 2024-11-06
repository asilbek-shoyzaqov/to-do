@extends('layouts.adminlayouts')
@section('title', 'Edit Tasks')
@section('content')
    @include('admin.section.sidebar')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-10">
                    <h2>Vazifani tahrirlash</h2>
                    <form action="{{ route('admin.my-tasks.update', $task->id )}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Vazifa nomi</label>
                                    <input name="title" type="text" value="{{ $task->title }}"
                                           class="form-control @error('title') is-invalid @enderror">
                                    @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Vazifa tavsifi</label>
                                    <textarea name="description" class="form-control">{{ $task->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Holat</label>
                                    <select name="completed" class="form-control">
                                        <option value="0" {{ $task->completed == 0 ? 'selected' : '' }}>Not Completed</option>
                                        <option value="1" {{ $task->completed == 1 ? 'selected' : '' }}>Completed</option>
                                    </select>
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
