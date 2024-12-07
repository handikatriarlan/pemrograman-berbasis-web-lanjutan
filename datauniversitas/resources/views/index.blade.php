@extends('dashboard.template')

@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
      <div class="main-body">
        <div class="page-wrapper">
          <div class="page-body">
            <div class="row">
              <div class="col-xl-6 col-md-6">
                <div class="card">
                  <div class="card-block">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="text-c-yellow f-w-600">{{ $count_pesereta }}</h4>
                        <h6 class="text-muted m-b-0">Total Mahasiswa</h6>
                      </div>
                      <div class="col-4 text-right">
                        <i class="feather icon-bar-chart f-28"></i>
                      </div>
                    </div>
                  </div>
                  <a href="/daftar-peserta">
                    <div class="card-footer bg-c-yellow">
                        <div class="row align-items-center">
                          <div class="col-9">
                            <p class="text-white m-b-0">Detail</p>
                          </div>
                          <div class="col-3 text-right">
                            <i class="feather icon-trending-up text-white f-16"></i>
                          </div>
                        </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-xl-6 col-md-6">
                <div class="card">
                  <div class="card-block">
                    <div class="row align-items-center">
                      <div class="col-8">
                        <h4 class="text-c-green f-w-600">{{ $count_registered }}</h4>
                        <h6 class="text-muted m-b-0">Total Dosen</h6>
                      </div>
                      <div class="col-4 text-right">
                        <i class="feather icon-file-text f-28"></i>
                      </div>
                    </div>
                  </div>
                  <a href="/daftar-peserta">
                    <div class="card-footer bg-c-green">
                        <div class="row align-items-center">
                          <div class="col-9">
                            <p class="text-white m-b-0">Detail</p>
                          </div>
                          <div class="col-3 text-right">
                            <i class="feather icon-trending-up text-white f-16"></i>
                          </div>
                        </div>
                    </div>
                  </a>
                </div>
              </div>
