@include('base')
@yield('body')
    <div class="idea-list-area">
        <section class="idea-item-section">
            @for($x = 0; $x < 5; $x++)
                <span class="idea">

                    <img src="#" alt="Idea Image"/>

                    <div class="idea-summary">
                        <strong class="idea-summary-title">[Enter title here...]</strong>
                        <p class="idea-summary-description">[Enter description here...</p>
                    </div>
                </span>
            @endfor
        </section>
    </div>
