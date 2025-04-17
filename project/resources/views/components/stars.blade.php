@php
    $filled = $rating ?? 0;
@endphp

<div class="star-rating">
    @for ($i = 1; $i <= 5; $i++)
        @if ($i <= $filled)
            <i class="fa fa-star rating-color"></i>
        @else
            <i class="fa fa-star rating-color2"></i>
        @endif
    @endfor
</div>
