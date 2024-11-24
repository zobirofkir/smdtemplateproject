<x-app-layout>

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        @include('components.sliders')
    </section>

    <section>
        @include('components.actualities')
    </section>

    <section>
        @include('components.about-smd')
    </section>

    <section>
        @include('components.last-events')
    </section>

    <section>
        @include('components.videos')
    </section>
</x-app-layout>
