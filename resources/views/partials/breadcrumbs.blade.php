@if (count($breadcrumbs))
<div class="col-md-12">
    <div class="breadcrumbs">
        <div class="container">
            <h2 class="breadcrumb panel-title">
                @foreach ($breadcrumbs as $breadcrumb)

                    @if ($breadcrumb->url && !$loop->last)
                        <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @else
                        <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                    @endif

                @endforeach
            </h2>
        </div>
    </div>
</div>
@endif