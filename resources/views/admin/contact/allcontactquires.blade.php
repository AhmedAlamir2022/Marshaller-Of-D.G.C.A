<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Quiery- Marshaller of D.G.C.A</title>
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
                            <h4 class="mb-0" style="font-family: 'Cairo', sans-serif;"> Contact Quires List</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="default-color">Dashboard</a></li>
                                <li class="breadcrumb-item active">Contact Quires List</li>
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
                                
                                <!-- row -->
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <div class="card card-statistics h-100">
                                            <div class="card-body">
                                                @foreach ($quires as $quiry)
                                                <form method="post" action="{{ route('edit.quiery', $quiry->id) }}">
                                                    @csrf 
                                                    <div class="row">
                                                        <div class="col-md-12 border-right-2 border-right-blue-400">
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label font-weight-semibold">Country<span class="text-danger">*</span></label>
                                                                <div class="col-lg-9">
                                                                    <input name="country" value="{{ $quiry['country'] }}" required type="text" class="form-control" required>
                                                                    <input id="id" type="hidden" name="id" class="form-control" value="{{ $quiry->id }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label font-weight-semibold">Phone<span class="text-danger">*</span></label>
                                                                <div class="col-lg-9">
                                                                    <input name="email" value="{{ $quiry['email'] }}" type="email" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label font-weight-semibold">Email<span class="text-danger">*</span></label>
                                                                <div class="col-lg-9">
                                                                    <input name="phone" value="{{ $quiry['phone'] }}" type="number" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">Save Info</button>
                                                </form>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- row closed -->
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