@foreach (json_decode($working_days, true) as $item)
    <li class="capitalize">{!! str_replace(['_', '.'], ' ', $item) !!}</li>
@endforeach
