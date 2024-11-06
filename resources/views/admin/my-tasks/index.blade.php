@extends('layouts.adminlayouts')
@section('title', 'Manage Tasks')
@section('content')
    @include('admin.section.sidebar')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-10">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">
                                        <span>×</span>
                                    </button>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif
                        <div class="card-header d-flex justify-content-between">
                            <h4>All Tasks</h4>
                            <a href="{{ route('admin.my-tasks.create')}}" class="btn btn-info">Add Task</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $task->title }}</td>
                                            <td>{{ $task->user->name ?? 'Noma\'lum' }}</td> <!-- User ismini chiqarish -->
                                            <td>
                                                @if ($task->completed)
                                                    <span class="badge badge-success">Completed</span>
                                                @else
                                                    <span class="badge badge-warning">Not completed</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.my-tasks.edit', $task->id) }}"
                                                   class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                   title="Tahrirlash"><i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.my-tasks.destroy', $task->id) }}"
                                                      method="POST" id="delete-task-form-{{ $task->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn btn-danger btn-action" data-toggle="tooltip"
                                                       title="O'chirish"
                                                       onclick="if(confirm('O‘chirishni xohlaysizmi?')) { document.getElementById('delete-task-form-{{ $task->id }}').submit(); }">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
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
        </section>
    </div>
@endsection
