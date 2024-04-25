@props(['links'])
<section>
    @foreach($links as $link)
        <x-link-block :link="$link" />
    @endforeach
</section>
