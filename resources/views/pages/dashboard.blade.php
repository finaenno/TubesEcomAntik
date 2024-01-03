@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h1 class="text-capitalize">Si Audit</h1>
                        <h3 class="text-capitalize">
                            Si Audit membantu permasalahan dalam hal audit dengan cepat, mudah serta murah. Selalu siap membantu kapanpun dan dimanapun.
                        </h3>
                    </div>
                    <div class="card-body p-3">
                        <div class="chart">
                            <p class="text-sm mb-3">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection