<div id="section2" class="section" name="section2">
    <div class="text-block-center">
        <h2 id="memories">Our happy matches</h2>

        <div class="gallery" data-hook="light-gallery">
            <ul id="lightgallery">
                @foreach($memories as $memory)
                    <li data-src="{{ $memory->image }}"
                        data-sub-html="<h3>{{ $memory->description }}</h3>">
                        <a href="#section2">
                            <div class="thumbnail" style="background-image: url({{ $memory->image }})"></div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</div>