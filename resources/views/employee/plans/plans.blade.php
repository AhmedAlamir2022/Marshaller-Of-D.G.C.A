<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Arrival Plans - Marshaller of D.G.C.A</title>
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
            @include('employee.body.main-header')
            @include('employee.body.main-sidebar')
            <!--================================= Main content -->
            <div class="content-wrapper">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> Arrival Plans List</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                                <li class="breadcrumb-item"><a href="{{ route('employee.dashboard') }}" class="default-color">Dashboard</a></li>
                                <li class="breadcrumb-item active">Arrival Plans List</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                                <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                                    Add New Arrival Plan</button><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                                        style="text-align: center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Company</th>
                                                <th>Flight Number</th>
                                                <th>Added Date</th>
                                                <th>Processes</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 0; ?>
                                            @foreach ($plans as $plan)
                                            @if($plan->employee_id  == Auth::guard('employee')->user()->id)
                                                <tr>
                                                    <?php $i++; ?>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $plan->airline_company }}</td>
                                                    <td>{{ $plan->flight_number }}</td>
                                                    <td>{{ $plan->created_at  }}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                            data-target="#view{{ $plan->id }}"
                                                            title="View"><i
                                                                class="fa fa-book"></i></button>
                                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                            data-target="#delete{{ $plan->id }}"
                                                            title="Delete"><i
                                                                class="fa fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                                <!-- delete_modal_user -->
                                                <div class="modal fade" id="delete{{ $plan->id }}" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                    id="exampleModalLabel">
                                                                    Delete Arrival Plan
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('delete.1plan',$plan->id) }}" method="post">
                                                                    @csrf
                                                                    Are You Sure You Wanr To Delete This Arrival Plan ?
                                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                                        value="{{ $plan->id }}">
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                                            <label for="title">Arrival</label>
                                                                            <input type="text" value="{{ $plan->arrival }}" class="form-control" readonly>
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
                                                                    </div><br>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add_modal_Grade -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                        Add New Arrival Plan
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- add_form -->
                                    <form action="{{ route('add.newplan') }}" method="post" autocomplete="off">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Airline Company</label>
                                                <input type="text" name="airline_company" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label for="title">Flight Number</label>
                                                <input type="number" name="flight_number" class="form-control" required>
                                            </div>
                                        </div> <br>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Airline Type</label>
                                                <input type="text" name="airplane_type" class="form-control" required>
                                            </div>
                                        </div> <br>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Gate</label>
                                                <input type="number" name="gate" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label for="title">Time</label>
                                                <input type="time" name="time" class="form-control" required>
                                            </div>
                                        </div> <br>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Arrival</label>
                                                <input type="text" name="arrival" class="form-control" required>
                                            </div>
                                        </div> <br>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Airplane Reg</label>
                                                <input type="text" name="airplane_reg" class="form-control" required>
                                            </div>
                                        </div> <br>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Notes</label>
                                                <textarea class="form-control" name="notes" rows="5" required></textarea>
                                            </div>
                                        </div><br><hr>
                                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Add New</button>
                                    </form>
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