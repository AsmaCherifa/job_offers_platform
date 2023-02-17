@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            <h2>Welcome back,</h2>
            <p class="mb-md-0">Your analytics dashboard template.</p>
          </div>
          
          
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
            <i class="mdi mdi-download text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-clock-outline text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-plus text-muted"></i>
          </button>
          <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
    <div class="d-flex flex-wrap justify-content-xl-between">
      <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
        <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
        <div class="d-flex flex-column justify-content-around">
          <small class="mb-1 text-muted">Job Offer</small>
          <div class="dropdown">
              <h5 class="mb-0 d-inline-block">277785</h5>
            
          </div>
        </div>
      </div>
      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
        <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
        <div class="d-flex flex-column justify-content-around">
          <small class="mb-1 text-muted">Job Seekers</small>
          <h5 class="me-2 mb-0">577545</h5>
        </div>
      </div>
      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
        <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
        <div class="d-flex flex-column justify-content-around">
          <small class="mb-1 text-muted">Campanies </small>
          <h5 class="me-2 mb-0">9833550</h5>
        </div>
      </div>
      <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
        <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
        <div class="d-flex flex-column justify-content-around">
          <small class="mb-1 text-muted">CV Downloads</small>
          <h5 class="me-2 mb-0">2233783</h5>
        </div>
      </div>
      <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
        <i class="mdi mdi-flag me-3 icon-lg text-danger"></i>
        <div class="d-flex flex-column justify-content-around">
          <small class="mb-1 text-muted">Flagged</small>
          <h5 class="me-2 mb-0">3497843</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Doughnut chart</h4>
        <canvas id="doughnutChart"></canvas>
      </div>
    </div>
  </div>

<script>
  var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
    var doughnutChart = new Chart(doughnutChartCanvas, {
      type: 'doughnut',
      data: doughnutPieData,
      options: doughnutPieOptions
    });
</script>
@endsection