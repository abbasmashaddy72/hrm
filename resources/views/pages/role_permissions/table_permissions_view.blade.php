@foreach (json_decode($permissions, true) as $item)
    <li class="capitalize">{!! str_replace(['_', '.'], ' ', $item) !!}</li>
@endforeach
