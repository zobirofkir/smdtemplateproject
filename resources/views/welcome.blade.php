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
        @include('components.slider')
    </section>
    
    <section>
        @include('components.we-do')
    </section>

    <section>
        @include('components.abouts')
    </section>

    <section>
        @include('components.services')
    </section>

    <section>
        @include('components.testimonial')
    </section>
    <section>
        @include('components.faq')
    </section>
    
    <section>
        @include('components.doctors')
    </section>

    <section>
        @include('components.subscribe')
    </section>

    <section>
        @include('components.blogs')
    </section>

    <section>
        @include('components.contact')
    </section>

</x-app-layout> 