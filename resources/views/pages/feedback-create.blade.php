@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Feedback'])
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="row gx-1">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Feedback
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-primary btn-sm ms-auto">Create</button>
                        </div>
                    </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kode Temuan Audit</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Isi</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                          <h6 class="mb-0 text-xs">A01</h6>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">FA01</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">abcddflkdoekdoewdownolwmjodmjowdnodmoqmd</p>
                    </td>
                    <td class="align-middle text-center">
                        <span class="badge bg-gradient-info">View</span>
                        <span class="badge bg-gradient-info">Edit</span>
                        <span class="badge bg-gradient-info">Delete</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                          <h6 class="mb-0 text-xs">A01</h6>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">FA01</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">abcddflkdoekdoewdownolwmjodmjowdnodmoqmd</p>
                    </td>
                    <td class="align-middle text-center">
                        <span class="badge bg-gradient-info">View</span>
                        <span class="badge bg-gradient-info">Edit</span>
                        <span class="badge bg-gradient-info">Delete</span>
                    </td>
                  </tr>

 
                  
                </tbody>
              </table>
            </div>
          </div>
    </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
