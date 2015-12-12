	<!-- testimonials -->
	<div id="testimonials" class="testimonials">
		<!-- container -->
		<div class="container">
			<div class="testimonials-info">
				<h3>Testimonials</h3>
				<h5 class="caption testimonials-caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac arcu tristique, porttitor erat condimentum, dignissim ex. Nunc ultrices, lacus ut finibus aliquam</h5>
			</div>
			<div class="testimonials-grids">
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					</script>
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							<li>
								<div class="testimonials-grid">
									<img src="{{ asset('images/3.png') }}" alt="" />
									<p><span>"</span>Suspendisse laoreet convallis ultricies. In facilisis erat nibh, vitae venenatis quam malesuada vel. Nunc ultricies libero et ultrices venenatis. Nulla varius egestas ultrices. Nulla a tempus lacus, sit amet iaculis odio.<span>"</span></p>
								</div>
							</li>
							<li>
								<div class="testimonials-grid">
									<img src="{{ asset('images/4.png') }}" alt="" />
									<p><span>"</span>Laoreet suspendisse convallis ultricies. In facilisis erat nibh, vitae venenatis quam malesuada vel. Nunc ultricies libero et ultrices venenatis. Nulla varius egestas ultrices. Nulla a tempus lacus, sit amet odio iaculis.<span>"</span></p>
								</div>
							</li>
						</ul>
					</div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //testimonials -->