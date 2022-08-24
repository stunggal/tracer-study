@extends('layouts.main')

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    <section class="section dashboard">
        <div class="row">

            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Insert Period</h5>
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif

                                    <!-- Horizontal Form -->
                                    <form method="post" action="/period">
                                        @csrf
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Period</label>
                                            <div class="col-sm-10">
                                                <input type="number"
                                                    class="form-control @if ($errors->has('period')) is-invalid @endif"
                                                    name="period" value="{{ old('period') }}" placeholder="Period">
                                                @if ($errors->has('period'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('period') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-secondary">
                                                Reset
                                            </button>
                                        </div>
                                    </form>
                                    <!-- End Horizontal Form -->
                                </div>
                            </div>
                        </div>
                    </div>

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
                                                        <a href="#" class="badge bg-warning">Edit</a>
                                                        <a href="#" class="badge bg-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
