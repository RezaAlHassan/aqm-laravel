@extends('layouts.user_type.auth')

@section('content')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <div class="container-fluid py-4">
      
      
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Map : Today's AQI</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">District</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">AQI</th>
                     
                    </tr>        
                  </thead>
                  <tbody>
                   
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestDhakaSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestDhakaSt->aqi }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestRajshahiSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestRajshahiSt->aqi }}</p>
                      </td>

                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestRangpurSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestRangpurSt->aqi }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestSylhetSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestSylhetSt->aqi }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestBarishalSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestBarishalSt->aqi }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestKhulnaSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestKhulnaSt->aqi }}</p>
                      </td>


                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestChittagongSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestChittagongSt->aqi }}</p>
                      </td>
                    </tr>
              
                    

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Daily Line Chart : Today's AQI</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">District</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PM2.5</th>
 
                    </tr>        
                  </thead>
                  <tbody>
                   
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestDhakaSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestDhakaSt->pm }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestRajshahiSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestRajshahiSt->pm }}</p>
                      </td>


                    </tr>

                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestRangpurSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestRangpurSt->pm }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestSylhetSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestSylhetSt->pm }}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestBarishalSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestBarishalSt->pm }}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestKhulnaSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestKhulnaSt->pm }}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestChittagongSt->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestChittagongSt->pm }}</p>
                      </td>
                    </tr>            
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
           
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Bar Chart : Yearly <b>PM2.5</b> </h6>
            </div>
             <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Average PM2.5</th>

                    </tr>
                  </thead>
                  <tbody>
                    
                 @foreach ($barItem as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm ">{{ $item->year }}</h6>
                          </div>
                        </div>
                      </td> 
                      <td>
                        <p class="text-xs font-weight-bold ps-1 mb-0">{{$item->pm }}</p>
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

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Box Plot: Station - <b>PM2.5</b>  </h6>

            </div>

             <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Station</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Maximum</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Upper Quartile</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Median</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lower Quartile</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Minimum</th>
                    </tr>
                  </thead>
                  <tbody>
                 
                    @foreach ($stationBP as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm ps-3">{{$item->stationNo}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-2 mb-0">{{$item->maxPm}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-4 mb-0">{{$item->upper}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-2 mb-0">{{$item->median}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-4 mb-0">{{$item->lower}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-3 mb-0">{{$item->minPm}}</p>
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

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Box Plot: Month - <b>PM2.5</b>  </h6>

            </div>

             <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Station</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Maximum</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Upper Quartile</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Median</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lower Quartile</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Minimum</th>
                    </tr>
                  </thead>
                  <tbody>
                 
                    @foreach ($monthBP as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm ps-3">{{$item->month}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-2 mb-0">{{$item->maxPm}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-4 mb-0">{{$item->upper}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-2 mb-0">{{$item->median}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-4 mb-0">{{$item->lower}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-3 mb-0">{{$item->minPm}}</p>
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

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Box Plot: Season - <b>AQI</b>  </h6>

            </div>

             <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Station</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Maximum</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Upper Quartile</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Median</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lower Quartile</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Minimum</th>
                    </tr>
                  </thead>
                  <tbody>
                 
                    @foreach ($seasonBP as $item)
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm ps-3">{{$item->season}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-2 mb-0">{{$item->maxaqi}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-4 mb-0">{{$item->upper}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-2 mb-0">{{$item->median}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-4 mb-0">{{$item->lower}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold ps-3 mb-0">{{$item->minaqi}}</p>
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

      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Dashboard Controller : <b>Today's Data</b></h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">District</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Average Temperature (C)</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rain Precipitation (%)</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Wind Speed (km/h)</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Visibilty</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cloud Cover</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Relative Humidity (%)</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                    
                  </thead>
                  <tbody>
                   
                    
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestDhaka->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestDhaka->temperature }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestDhaka->rain }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestDhaka->windspeed }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestDhaka->visbility }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestDhaka->cloud }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestDhaka->humidity }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestRajshahi->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestRajshahi->temperature }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRajshahi->rain }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRajshahi->windspeed }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRajshahi->visbility }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRajshahi->cloud }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRajshahi->humidity }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestRangpur->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestRangpur->temperature }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRangpur->rain }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRangpur->windspeed }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRangpur->visbility }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRangpur->cloud }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestRangpur->humidity }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestSylhet->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestSylhet->temperature }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestSylhet->rain }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestSylhet->windspeed }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestSylhet->visbility }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestSylhet->cloud }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestSylhet->humidity }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestBarishal->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestBarishal->temperature }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestBarishal->rain }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestBarishal->windspeed }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestBarishal->visbility }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestBarishal->cloud }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestBarishal->humidity }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestKhulna->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestKhulna->temperature }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestKhulna->rain }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestKhulna->windspeed }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestKhulna->visbility }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestKhulna->cloud }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestKhulna->humidity }}</p>
                      </td>

                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-3 py-1">

                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $getLatestChittagong->district }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $getLatestChittagong->temperature }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestChittagong->rain }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestChittagong->windspeed }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestChittagong->visbility }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestChittagong->cloud }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0 ps-3">{{ $getLatestChittagong->humidity }}</p>
                      </td>
                    </tr>    

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
