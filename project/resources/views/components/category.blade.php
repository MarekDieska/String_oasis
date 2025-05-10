<div class="m-0 d-flex justify-content-end justify-content-md-between nav-div">

    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="d-flex d-md-none flex-column accordion accordion-flush accordion-custom" id="accordionFlush">
            <form action="{{ route('filters_page') }}" method="GET" class="w-100">
                <input type="hidden" name="sub" value="0">
                <label class="search w-100">
                    <input type="text" name="q" placeholder="Hľadať podľa názvu..." class="form-control input-custom rounded-pill border-0 my-2" value="{{ request('q') }}">
                </label>
            </form>

            @foreach ($categories as $category)
                @if ($category->subcategories->first()->name)
                    <div class="accordion-item accordion_color">
                        <h1 class="accordion-header">
                            <button class="accordion-button collapsed accordion_color" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse{{ $loop->index }}"
                                    aria-expanded="false"
                                    aria-controls="flush-collapse{{ $loop->index }}">
                                {{ $category->name }}
                            </button>
                        </h1>
                        <div id="flush-collapse{{ $loop->index }}"
                             class="accordion-collapse collapse bg-acc"
                             data-bs-parent="#accordionFlush">
                            <div class="accordion-body d-flex flex-column">
                                @foreach ($category->subcategories as $subcategory)
                                    <a class="p-1" href="{{ route('filters_page', ['sub' => $subcategory->id]) }}">
                                        {{ $subcategory->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class="accordion-item accordion_color">
                        <a href="{{ route('filters_page', ['sub' => $category->subcategories->first()->id]) }}">
                            <button class="accordion-button collapsed accordion_color border-0 accordion-custom" type="button">
                                {{ $category->name }}
                            </button>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <button class="navbar-toggler menu-custom" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <img src="{{ asset('storage/images/menu.svg') }}" alt="Menu" height="35">
    </button>

    <div class="row d-none d-md-flex w-100" id="categoryGroup">
        @foreach ($categories as $category)
            <div class="m-0 col-2 d-flex flex-column position-relative">
                <a href="{{ route('filters_page', ['sub' => $category->subcategories->first()->id]) }}"
                   class="d-flex flex-column"
                   @if($category->subcategories->first()->name)
                       data-bs-toggle="collapse"
                   data-bs-target="#{{ Str::slug($category->name) }}Collapse"
                    @endif>
                    <img src="{{ asset('storage/images/'.$category->url) }}" alt="{{ $category->name }}" height="70" class="d-none d-md-block">
                    <p class="m-0">{{ mb_strtoupper($category->name) }}</p>
                </a>

                @if($category->subcategories->first()->name)
                    <ul id="{{ Str::slug($category->name) }}Collapse"
                        class="collapse position-absolute w-100 pt-2 pb-2 p-0 dropdown-custom"
                        data-bs-parent="#categoryGroup">
                        @foreach ($category->subcategories as $subcategory)
                            <li>
                                <a href="{{ route('filters_page', ['sub' => $subcategory->id]) }}">
                                    {{ $subcategory->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
</div>
