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
        @include('components.testimonials')
    </section>

    <section>
        @include('components.subscribers')
    </section>
</x-app-layout>
