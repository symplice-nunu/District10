@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Chapter</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('district10.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Company Name</strong>
                {{ $district->companyname }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email Address</strong>
                {{ $district->emailaddress }}
            </div>
        </div>
    </div>
@endsectio