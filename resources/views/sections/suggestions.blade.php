<div id="section3" class="section" name="section3">
    <div class="text-block-center">

        <div class="Headline">
            <h1>Need date ideas?</h1>

        </div>
        <div class="text-container">
            <h2>Food 🍕</h2>
            <p>{{ $food->description }}</p>

            @if(empty($food->url) === false)
                <a href="{{ $food->url }}" target="_blank">🌎 More details</a>
            @endif

        </div>

        <div class="text-container">
            <h2>Activity 🚲</h2>
            <p>{{ $activity->description }}</p>

            @if(empty($activity->url) === false)
                <a href="{{ $activity->url }}" target="_blank">🌍 More details</a>
            @endif
        </div>

        <div class="text-container">
            <h2>Random 👑</h2>
            <p>{{ $random->description }}</p>

            @if(empty($random->url) === false)
                <a href="{{ $random->url }}" target="_blank">🌏 More details</a>
            @endif
        </div>

    </div>
    <div class="text-block-center">

        <a class="shuffle-btn" href="/">SHUFFLE!</a>
    </div>
</div>