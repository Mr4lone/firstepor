@extends('blog.blogapp')
@section('content')

<!-- START BLOG -->
<section id="blog" class="gray_bg section_padding">
	<div class="container">
        	
		<div class="blog_area wow fadeInUp">
			<div class="row">
                <div class="section_heading text-center wow zoomIn">
                    <h2>Our <span>Blog</span></h2>                
                    <div class="section_heading_border">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('posts.index') }}"> နောက်သို့</a>
                    </div>
                </div> <!-- END HEADING -->

			</div> <!-- END ROW -->
		</div> <!-- END AREA -->
        <div class="blog_area wow fadeInUp">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="post-slide">

						<div class="post-review">
						<h3 class="post-title">  {{ $post->title }}</h3>
						<div class="post-img">
							<img src="{{ Storage::url($post->image) }}" height="75" width="75"  alt="">
							
						</div>
							<p class="post-description"> {{($post->shortnote)}}</p>
							<p class="post-description">  {{ $post->description }}</p>
							<a href="#" class="read">read more<i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
		
			</div> <!-- END ROW -->
		</div>
	
	</div> <!-- END CONTAINER -->
</section>
<!-- END BLOG -->

@endsection