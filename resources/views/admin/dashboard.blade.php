@extends('layouts.admin.main')
@section('container')
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                                    Content body start
                                                                                                                                                                                                                                                                                                                                                ***********************************-->
    <div class="content-body">

        <div class="container-fluid mt-3">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-3" style="background-image: linear-gradient(230deg, #087f5b, #0bb77d)">
                        <div class="card-body">
                            <h3 class="card-title text-white">Users</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $user }}</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-1" style="background-image: linear-gradient(230deg, #087f5b, #0bb77d)">
                        <div class="card-body">
                            <h3 class="card-title text-white">Post</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $post_count }}</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-pencil"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-2" style="background-image: linear-gradient(230deg,  #087f5b, #0bb77d)">
                        <div class="card-body">
                            <h3 class="card-title text-white">Time Predict (AVG)</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ number_format($time_predict, 2) }}s</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-clock-o"></i></span>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-4" style="background-image: linear-gradient(230deg,  #087f5b, #0bb77d)">
                        <div class="card-body">
                            <h3 class="card-title text-white">Model Accuracy (AVG)</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ number_format($accuracy, 2) }}%</h2>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-bullseye"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">User Post</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>User</th>
                                            <th>Content</th>
                                            <th>Create at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($post as $p)
                                            <tr>
                                                <td>
                                                    <img src="{{ $p->image_url }}" alt="" style="width: 190px">
                                                </td>
                                                <td>{{ $p->title }}</td>
                                                <td>{{ $p->author->name }}</td>
                                                <td>{{ $p->content }}s</td>
                                                <td>{{ $p->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>User</th>
                                            <th>Content</th>
                                            <th>Create at</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
                                                                                                                                                                                                                                                                                                                                                    Content body end
                                                                                                                                                                                                                                                                                                                                                ***********************************-->
@endsection
