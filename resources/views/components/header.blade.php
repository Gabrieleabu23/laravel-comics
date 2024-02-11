<header>
    <div class="top_header h-100">
        <div class="container w-75 h-100">
            <div class="d-flex justify-content-end align-items-center h-100 text-light gap-5">
                <div class="d-flex align-items-center">
                    <h6 class="m-2 me-0">DC POWER </h6><span class="ms-0">&#8480;</span>
                    <h6 class="m-2 me-0">VISA</h6><span>&copy;</span>
                </div>
                <div class="d-flex align-items-center gap-1">
                    <h6 class="m-2 me-1">ADDITIONAL DC SITES</h6><span>&#9660;</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container w-75 py-4 px-0">
        <div class="d-flex justify-content-between align-items-center">
            <img src="{{ asset('img/dc-logo.png') }}" alt="">
            <div class="row justify-content-center align-items-center">
                <div class="col-auto">
                    <ul class="d-flex align-items-center m-0">
                        @foreach ($listPages as $page)
                            <li class="p-2">
                                <a href="{{ $page['url'] }}" class="{{ $page['active'] ? 'blu_active_border' : '' }}">
                                    {{ $page['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-2 p-0 ps-3">
                    <form class="d-flex align-items-center justify-content-end form_search" role="search">
                        <input class="form-control me-2  rounded-0 nav_search" type="search" placeholder="Search"
                            aria-label="Search">
                        <i class="fas fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
