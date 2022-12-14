<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3  bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        {{-- <a class="navbar-brand m-1" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank"> --}}
        {{-- <img src="{{asset('assets/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo"> --}}
        <span class="ms-1 font-weight-bold text-white">ANKA BUSINESS SUPPORT</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if (session('role') == 'admin')
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="{{ route('dashboard') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
            @endif

            @if (session('role') == 'admin')
                <div class="nav-link text-white accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed text-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Tabular Report
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <li class="nav-item">
                                    <a class="nav-link text-white " href="{{ route('recents') }}">
                                        <div
                                            class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="material-icons opacity-10">table_view</i>
                                        </div>
                                        <span class="nav-link-text ms-1">Recent Bookings</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white " href="{{ route('productDetails') }}">
                                        <div
                                            class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="material-icons opacity-10">table_view</i>
                                        </div>
                                        <span class="nav-link-text ms-1">Product Details</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white " href="{{ route('participant') }}">
                                        <div
                                            class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="material-icons opacity-10">receipt_long</i>
                                        </div>
                                        <span class="nav-link-text ms-1">Participant Details</span>
                                    </a>
                                </li>


                            </div>
                        </div>
                    </div>
                </div>
            @endif
            {{-- <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('participant') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">map</i>
            </div>
            <span class="nav-link-text ms-1">Graph Reports</span>
          </a>
        </li> --}}

            {{-- tabular reports --}}
            @if (session('role') == 'admin')
                {{-- <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('tabular') }}">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">reports</i>
              </div>
              <span class="nav-link-text ms-1">Tabular Reports</span>
            </a>
          </li> --}}
            @endif



            @if (session('role') == 'user')
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="{{ route('recents') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
            @endif

            @if (session('role') == 'user')
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{ route('productDetails') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Product Details</span>
                    </a>
                </li>
            @endif

            @if (session('role') == 'user')
                <li class="nav-item">
                    <a class="nav-link text-white " href="{{ route('participant') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Participant Details</span>
                    </a>
                </li>
            @endif

        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">

            <form action="{{ route('user.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-white w-100">Logout</button>
            </form>

        </div>
    </div>
</aside>
