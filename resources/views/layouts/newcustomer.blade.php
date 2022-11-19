@extends('layouts.master')
@section('content')
        <div class="row gutter-xs">
            <div class="col-xs-12 col-md-6">
              <div class="card">
              <div class="card-header">
                <center><h3>Create New Customer</h3>    </center>
                
              </div>
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
                @if(session('success'))
                <div class="alert alert-success">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form class="form-horizontal form-border" id="form" method="post" action="{{route('savecustomer')}}">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Customer Name </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="customer_name" placeholder="Enter customer name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Contact Person</label>
                        <div class="col-sm-6">
                                <input type="text" class="form-control" name="txtContactPerson" placeholder="Enter contact person">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Full Address</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="txtAddress" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Phone Number</label>
                        <div class="col-sm-6">
                            <input type="tel" class="form-control"  name="customer_phone"  placeholder="Enter Phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Email Address</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control"  name="customer_email"  placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Service Contract</label>
                        <div class="col-sm-6">
                            <input type="checkbox" name="chkService" value="Y">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Total Service Contract Hours per Month</label>
                        <div class="col-sm-6">
                            <input type="number" autocomplete="off" class="form-control" id="total" name="txtTotalTime">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Back-up Monitoring </label>
                        <div class="col-sm-6">
                            <input type="checkbox" name="chkBackup" value="Y">
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-6">
                            <button type="submit" name="btnSubmit" class="btn btn-primary">Create New Customer</button>
                        </div>
                    </div>
                    
                </form>
                </div>
              </div>
            </div>
            
            
            
        </div>
@endsection()
@section('title','Create Customer')
