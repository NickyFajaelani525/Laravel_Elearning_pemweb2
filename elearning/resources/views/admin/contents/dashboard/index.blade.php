@extends('admin.main')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="admin/dashboard">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Popol & Kupa</h5>
            <p><i> "You know what? Carrying four fools to victory isn't easy."
              <br>"Kau tahu? Membawa empat orang bodoh menuju kemenangan tidaklah mudah."</i></p>
          </div>
        </div>

      </div>

      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Nathan</h5>
            <p><i>“It is in despair that I see the fondest hopes,”<br>“Dalam sebuah keputusasaan, aku melihat harapan yang indah.”</i></p>
          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection