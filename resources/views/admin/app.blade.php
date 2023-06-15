@extends('layouts.admin.main')
@section('container')
    <!--**********************************
                                                                                                                            Content body start
                                                                                                                        ***********************************-->
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Apps</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Prediction Result</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>User</th>
                                            <th>Disease Predict</th>
                                            <th>Time Predict</th>
                                            <th>Accuracy</th>
                                            <th>Create at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_detection as $dt)
                                            {{-- @dd($dt) --}}
                                            <tr>
                                                <td>
                                                    <img src="{{ $dt->image_url }}" alt="" style="width: 190px">
                                                </td>
                                                <td>{{ $dt->detector->name }}</td>
                                                <td>{{ $dt->result->name }}</td>
                                                <td>{{ $dt->time_predict }}s</td>
                                                <td>{{ $dt->accuracy }}%</td>
                                                <td>{{ $dt->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>User</th>
                                            <th>Disease Predict</th>
                                            <th>Time Predict</th>
                                            <th>Accuracy</th>
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
