@extends('blog.blogapp')
@section('content')

<!-- START ABOUT-US -->
<section id="about_us" class="gray_bg section_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="single_about">
					<div class="about_title">
						<span>About Consultary</span>
						<h2>We Are A Creative Agency</h2>
						<p class="description">Lorem Ipsum is simply dummy text of the printing and 
						typesetting industry. Lorem Ipsum has been the industry's standard dummy text
						ever since the 1500s, when an unknown printer took a galley of type and 
						scrambled it to make a type specimen book. It has survived not only five 
						centuries,</p>
						<br/>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It
						has roots in a piece of classical Latin literature from 45 BC, making it
						over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
						College in Virginia.
						</p>
					</div>
					<a href="#" class="about-btn btn btn-default main_btn">Read More</a>
				</div>
			</div> 
			<!-- END COL -->
			
			<div class="col-md-6 col-sm-6">
				<div class="single-about">
					<img src="images/about.jpg" alt="" />
				</div>
			</div>
			 <!-- END COL -->
		</div> <!-- END ROW -->
	</div>	<!-- END CONTAINER -->
</section>
<!-- END ABOUT-US -->


<!-- START BLOG -->
<section id="blog" class="gray_bg section_padding">
	<div class="container">
        	
		<div class="blog_area wow fadeInUp">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Add New Post</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
            
                 <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
            
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                          <strong>Description:</strong>
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                        </div>
                    </div>
            
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
		</div> <!-- END AREA -->
	
	
	</div> <!-- END CONTAINER -->
</section>
<!-- END BLOG -->





@endsection