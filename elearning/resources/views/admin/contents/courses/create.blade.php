@extends('admin.main')

@section('content')

<div class="pagetitle">
    <h1>Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <form method="post" action="\admin\courses\create">
    @csrf
    <div class="form-group row">
      <label for="name" class="col-2 col-form-label">Name</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-archive"></i>
            </div>
          </div> 
          <input id="name" name="name" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="category" class="col-2 col-form-label">Category</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-bar-chart"></i>
            </div>
          </div> 
          <input id="category" name="category" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="desc" class="col-2 col-form-label">Description</label> 
      <div class="col-8">
        <textarea id="desc" name="desc" cols="40" rows="5" class="form-control"></textarea>
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-2 col-2">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  @endsection