@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Stationwise Data  </h6>
            </div>

            <div class="nav-item d-flex align-self-end px-5">
              <a href="{{ url('add-table-row') }}"  class="btn btn-primary active mb-0 text-white " role="button" aria-pressed="true">
                  Add
              </a>
             </div>
             
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">Creation Date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">District</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Station</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PM2.5</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">AQI</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Season</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Organisation</th>
                      <th ></th>
                      <th ></th>
                    </tr>
                  </thead>
                  <tbody>
                 
                    @foreach ($tableData as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm ">{{$item->id}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->created_at}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->district}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-3 mb-0">{{$item->station}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-1 mb-0">{{$item->pm}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->aqi}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold  mb-0">{{$item->season}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-1 mb-0">{{$item->organization}}</p>
                      </td>
                      <td class="align-middle">
                        <a href="{{ url('edit-table-row/'.$item->id) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                     
                      <td class="align-middle">
                        <a href="{{ url('delete-table-row/'.$item->id) }}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>   
                    @endforeach          

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
  
  @endsection
