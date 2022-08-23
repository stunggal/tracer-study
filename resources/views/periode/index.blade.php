@extends('layouts.main')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    @dump($periodes)
    <section class="section dashboard">
        <div class="row">

            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body">
                                    <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tahun</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($periodes as $periode)
                                            @php
                                                $i++;
                                            @endphp
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><a href="#">{{ $i }}</a></th>
                                                    <td>{{ $periode->periode }}</td>
                                                    <td>
                                                        <a href="#" class="badge bg-primary">View</a>
                                                        <a href="#" class="badge bg-warning">edit</a>
                                                        <a href="#" class="badge bg-danger">View</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>

    </section>
@endsection
