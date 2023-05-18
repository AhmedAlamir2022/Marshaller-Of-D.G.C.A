<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arrival Plans Report- Marshaller of D.G.C.A</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
        <meta name="author" content="potenzaglobalsolutions.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        @include('admin.body.head')
    </head>
    <body style="font-family: 'Cairo', sans-serif">
        <div class="wrapper">
            @include('admin.body.main-header')
            @include('admin.body.main-sidebar')
            <!--================================= Main content -->
            <div class="content-wrapper">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> Arrival Plans Report</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">Dashboard</a></li>
                                <li class="breadcrumb-item active">Arrival Plans Report</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <!-- row closed -->
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <form method="post" action="{{ route('search.plan') }}">
                                    @csrf 
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="title">From :</label>
                                            <input type="date" value="{{ $start_at ?? '' }}" name="start_at" class="form-control" required>
                                        </div>
                                        <div class="col">
                                            <label for="title">To :</label>
                                            <input type="date" name="end_at" value="{{ $end_at ?? '' }}" class="form-control" required>
                                        </div>
                                    </div> <br><hr>
                                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Show Report</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="error">{{ $errors->first('Name') }}</div>
                    @endif
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    @if (isset($details))
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                                        style="text-align: center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Company</th>
                                                <th>Flight Number</th>
                                                <th>Employee</th>
                                                <th>Added Date</th>
                                                <th>Processes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; ?>
                                            @foreach ($details as $plan)
                                                <tr>
                                                    <?php $i++; ?>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $plan->airline_company }}</td>
                                                    <td>{{ $plan->flight_number }}</td>
                                                    <td>{{ $plan->Employees->name }}</td>
                                                    <td>{{ $plan->created_at  }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                            data-target="#view{{ $plan->id }}"
                                                            title="View"><i
                                                                class="fa fa-book"></i></button>
                                                    </td>
                                                </tr>
                                                <!-- View_modal_user -->
                                                <div class="modal fade" id="view{{ $plan->id }}" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    View Arrival Plan Details
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <div class="col">
                                                                            <label for="title">Airline Company</label>
                                                                            <input type="text" value="{{ $plan->airline_company }}" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="col">
                                                                            <label for="title">Flight Number</label>
                                                                            <input type="text" value="{{ $plan->flight_number }}" class="form-control" readonly>
                                                                        </div>
                                                                    </div> <br>
                                                                    <div class="form-row">
                                                                        <div class="col">
                                                                            <label for="title">Airline Type</label>
                                                                            <input type="text" value="{{ $plan->airplane_type }}" class="form-control" readonly>
                                                                        </div>
                                                                    </div> <br>
                                                                    <div class="form-row">
                                                                        <div class="col">
                                                                            <label for="title">Gate</label>
                                                                            <input type="text" value="{{ $plan->gate }}" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="col">
                                                                            <label for="title">Time</label>
                                                                            <input type="text" value="{{ $plan->time }}" class="form-control" readonly>
                                                                        </div>
                                                                    </div> <br>
                                                                    <div class="form-row">
                                                                        <div class="col">
                                                                            <label for="title">AArrival</label>
                                                                            <input type="text" value="{{ $plan->arrival }}" class="form-control" readonly>
                                                                        </div>
                                                                    </div> <br>
                                                                    <div class="form-row">
                                                                        <div class="col">
                                                                            <label for="title">Employee</label>
                                                                            <input type="text" value="{{ $plan->Employees->name }}" class="form-control" readonly>
                                                                        </div>
                                                                        <div class="col">
                                                                            <label for="title">Airplane Reg</label>
                                                                            <input type="text" value="{{ $plan->airplane_reg }}" class="form-control" readonly>
                                                                        </div>
                                                                    </div> <br>
                                                                    <div class="form-row">
                                                                        <div class="col">
                                                                            <label for="title">Notes</label>
                                                                            <textarea class="form-control" rows="3" readonly>{{ $plan->notes }}</textarea>
                                                                        </div>
                                                                    </div><br><hr>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================================= footer -->
                @include('admin.body.footer')
                </div><!-- main content wrapper end-->
            </div>
        </div>
        <!--================================= footer -->
        @include('admin.body.footer-scripts')
    </body>
</html>