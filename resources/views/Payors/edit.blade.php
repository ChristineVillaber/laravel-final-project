<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                Edit Payor
            </title>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
                    <style>
                        *{
            font-family: arial;
        }
                    </style>
                </link>
            </link>
        </meta>
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="text-center">
                        <h2>
                            <b>
                                Edit Payors
                            </b>
                        </h2>
                    </div>
                    <div class="text-right">
                        <a class="btn btn-info" enctype="multipart/form-data" href="{{ route('Payors.index') }}">
                            <i class="fa-solid fa-arrow-left fa-beat" style="color: #ffffff;">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('Payors.update',$Ontime->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
            @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-4 mx-auto">
                    <div class="row mt-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 mx-auto">
                            <div class="form-group">
                                <strong>
                                   Borrower Name
                                </strong>
                                <input class="form-control" name="name" type="text" value="{{ $Ontime->name }}">
                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-15">
                            <div class="form-group">
                                <strong>
                                    Borrower Date
                                </strong>
                                <input class="form-control" name="date" type="text" value="{{ $Ontime->date }}">
                                    @error('date')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>
                                    Borrower Amount
                                </strong>
                                <input class="form-control" name="amount" type="text" value="{{ $Ontime->amount }}">
                                    @error('amount')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>
                                    Borrower Remarks
                                </strong>
                                <input class="form-control" name="remarks" type="remarks" value="{{ $Ontime->remarks }}">
                                    @error('remarks')
                                    <div class="alert alert-danger mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </input>
                            </div>
                        </div>
                        
                        <button class="btn mx-auto btn-primary" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>