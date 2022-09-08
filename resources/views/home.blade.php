@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <center>
                            {{ __('You are logged in!') }}
                        </center>
                    </div>
                    <div>
                        <div class="table-responsive p-0">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Content</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($post as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->slug }}</td>
                                            <td>{{ $data->content }}</td>
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
