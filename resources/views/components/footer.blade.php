<div class="container w-75 p-0">
    <div class="d-flex justify-content-between">
        <ul class="col-5 d-flex p-0 flex-wrap">
            @foreach ($listFooter as $item)
                <div class="col-4">
                    <h3>{{ $item['name'] }}</h3>
                    <ul class="p-0 list-unstyled">
                        @foreach ($item['info_array'] as $info)
                            <li>
                                <a>{{ $info }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </ul>
        <img src="{{ mix("/public/img/dc-logo-bg.png") }}" alt="dc-logo-bg" class="zoomed_img">
    </div>
</div>
