@extends('layouts.app')


@section('content')
 
       <div class="container mg-10">
       <div class="row">
       <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2 class="m-0 text-dark">Manage companies - Add</h2>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Manage Companies</a></li>
                    <li class="breadcrumb-item">Add</li>
                </ol>
            </div>
        </div>
    </div>
  <main class="cotainer mt-5">
          <div class="row justify-content-center">
              <div class="col-md-4">
              
                  <div class="card">
                      
                      <div class="card-body">
                          <form action="{{ route('company.update',$company->id) }}" method="POST">
                          <div class="col-md-12">
                              @csrf
                              @method('PUT')
                              <div class="form-group mb-2">
                                  <label for="">Company Name</label>
                                  <input type="text" name="companyname" value="{{ $company->companyname }}" placeholder="Company Name" id="name" class="form-control">
                                  @if ($errors->has('companyname'))
                                  <span class="text-danger">{{ $errors->first('companyname') }}</span>
                                  @endif
                              </div>
                             
                              <div class="form-group mb-2">
                                  
                              <label for="">Company Name</label>
                                 <select name="chapter" value="{{ $company->chapter }}" id="" class="form-control">
                                      <option >---Select Chapter---</option>
                                      <option value="Southwest Line">Southwest Line</option>
                                      <option value="Missouli Valley Line">Missouli Valley Line</option>
                                      <option value="Southeastern Line">Southeastern Line</option>
                                      <option value="American Line Builders">American Line Builders</option>
                                  </select>
                                  @if ($errors->has('chapter'))
                                  <span class="text-danger">{{ $errors->first('chapter') }}</span>
                                  @endif
                              </div>
  
                              <div class="form-group">
                                  <input type="radio" name="status" value="{{ $company->status }}"  id="status" value="Active">
                                  <strong>Active</strong>&nbsp;&nbsp;&nbsp;
                                  
                                  <input type="radio" name="status" value="{{ $company->status }}"  id="status" value="Inactive">
                                  <strong>Inactive</strong>
                                  @if ($errors->has('status'))
                                  <span class="text-danger">{{ $errors->first('status') }}</span>
                                  @endif
                              </div>
  
                              
  
                             
                              <div class="d-grid mx-auto">
                                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                              </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
  </main>
  @endsection