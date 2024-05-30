{{--
<div class="card">
    <div class='card-body'>
        <h5>
            <a href="{{ route('hike.show', ['slug' => $hike->getSlug(), 'hike' => $hike]) }}">{{ $hike->name }}</a>
        </h5>
        <p class='card-text'>
            {{ $hike->distance }} km - {{ $hike->duration }} min
        </p>
        <p class='card-text'>
            {{ $hike->description }}
        </p>
        <div class="text-primary" style="font-size: 1.4rem;">
            {{ $hike->elevation_gain }}
        </div>

    </div>
</div>
--}}
<div class="card shadow-sm">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
            dy=".3em">Thumbnail</text>
    </svg>
    <div class="card-body">
        <h5>{{ $hike->name }}</h5>
        <p class="card-text">{{ $hike->description }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex flex-wrap gap-2 justify-content-center py-2">
                <span class="badge text-bg-primary rounded-pill">{{ $hike->distance }} km </span>
                <span class="badge text-bg-primary rounded-pill">{{ $hike->duration }} min</span>
            </div>
            <small class="text-body-secondary"><a
                    href="{{ route('hike.show', ['slug' => $hike->getSlug(), 'hike' => $hike]) }}">View
                    details</a></small>
        </div>
    </div>
</div>
