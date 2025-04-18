<div class="m-0 d-flex justify-content-end justify-content-md-between nav-div">

    <!-- Mobile View - Collapsible Navbar -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="d-flex d-md-none flex-column accordion accordion-flush accordion-custom" id="accordionFlush">
            <label class="search w-100 p-3">
                <input type="text" placeholder="Hľadať podľa názvu..." class="form-control input-custom rounded-pill border-0">
            </label>

            <!-- Accordion Items for Mobile -->
            @foreach (['Gitary', 'Basgitary', 'Iné strunové nástroje'] as $category)
                <div class="accordion-item accordion_color">
                    <h1 class="accordion-header">
                        <button class="accordion-button collapsed accordion_color" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $loop->index }}" aria-expanded="false" aria-controls="flush-collapse{{ $loop->index }}">
                            {{ $category }}
                        </button>
                    </h1>
                    <div id="flush-collapse{{ $loop->index }}" class="accordion-collapse collapse bg-acc" data-bs-parent="#accordionFlush">
                        <div class="accordion-body d-flex flex-column">
                            @foreach (['elektrické', 'elektro-akustické', 'klasické', 'detské'] as $item)
                                <a href="{{ route('filters_page') }}">{{ $item }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Static Items -->
            <div class="accordion-item accordion_color">
                <a href="{{ route('filters_page') }}">
                    <button class="accordion-button collapsed accordion_color border-0 accordion-custom" type="button">
                        Reproduktory a kombá
                    </button>
                </a>
            </div>
            <div class="accordion-item accordion_color">
                <a href="{{ route('filters_page') }}">
                    <button class="accordion-button collapsed accordion_color border-0 accordion-custom" type="button">
                        Príslušenstvo
                    </button>
                </a>
            </div>
            <div class="accordion-item accordion_color">
                <a href="{{ route('filters_page') }}">
                    <button class="accordion-button collapsed accordion_color accordion-custom" type="button">
                        Platne
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- Navbar Toggler for Mobile -->
    <button class="navbar-toggler menu-custom" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{ asset('images/menu.svg') }}" alt="Menu" height="35">
    </button>

    <!-- Desktop View - Categories -->
    <div class="row d-none d-md-flex w-100" id="categoryGroup">
        @foreach ([
            ['name' => 'Gitary', 'icon' => 'git.svg', 'items' => ['elektrické', 'elektro-akustické', 'akustické', 'klasické', 'detské']],
            ['name' => 'Basgitary', 'icon' => 'bass.svg', 'items' => ['4 strunové', '5 strunové']],
            ['name' => 'Iné struny', 'icon' => 'banjo.svg', 'items' => ['ukulele', 'banjo', 'mandolína', 'kora']],
            ['name' => 'Kombá', 'icon' => 'kombo.svg', 'items' => []],
            ['name' => 'Príslušenstvo', 'icon' => 'kabel.svg', 'items' => []],
            ['name' => 'Platne', 'icon' => 'platna.svg', 'items' => []]
        ] as $category)
            <div class="m-0 col-2 d-flex flex-column position-relative">
                <a href="{{ route('filters_page') }}"
                   class="d-flex flex-column"
                   @if(count($category['items']) > 0)
                       data-bs-toggle="collapse"
                   data-bs-target="#{{ Str::slug($category['name']) }}Collapse"
                    @endif
                >
                    <img src="{{ asset('images/'.$category['icon']) }}" alt="{{ $category['name'] }}" height="70" class="d-none d-md-block">
                    <p class="m-0">{{mb_strtoupper($category['name']) }}</p>
                </a>
                @if(count($category['items']) > 0)
                    <ul id="{{ Str::slug($category['name']) }}Collapse" class="collapse position-absolute w-100 pt-2 pb-2 p-0 dropdown-custom" data-bs-parent="#categoryGroup">
                        @foreach ($category['items'] as $item)
                            <li><a href="{{ route('filters_page') }}">{{ $item }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
</div>
