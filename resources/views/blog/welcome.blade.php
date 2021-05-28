@extends('blog.blogapp')
@section('content')


<!-- START PRELOADER -->
<div class="preloader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
        <div class="double-bounce3"></div>
        <div class="double-bounce4"></div>
    </div>
</div>
<!-- END PRELOADER -->

<!-- START BLOG -->

{{-- ======*************************************************************************=========================== --}}
<section id="blog" class="gray_bg section_padding">
<div class="container">
<div class="blog_area wow fadeInUp">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.create') }}"> Create</a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="post-slide">
                <div class="post-img">
                    <img src="images/blog/1.jpg" alt="">
                    <span class="icons">
                        <img src="images/blog/1.png" alt="">
                    </span>
                </div>
                <div class="post-review">
                  
                    <a  href="{{ route('posts.show',$post->id) }}"><h3 class="post-title">{{ $post->title }}</h3></a>
                    <ul class="post-bar">
                        <li><i class="fa fa-calendar"></i>March 30, 2020</li>
                        <li><i class="fa fa-user"></i> admin</li>
                    </ul>
                    <p class="post-description">{{ $post->description }}</p>
                    {{-- <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a> --}}
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
               
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
     <!-- END ROW -->
</div>
</div> 
</section>



{{-- ======*************************************************************************=========================== --}}

{{-- <section id="blog" class="gray_bg section_padding">
	<div class="container">
        	
		<div class="blog_area wow fadeInUp">
			<div class="row">
                <div class="section_heading text-center wow zoomIn">
                    <h2>Our <span>Blog</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam<br/> ultrices sapien vel quam luctus pulvinar.</p>	
                    
                    
                    <div class="section_heading_border">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('posts.create') }}"> Create</a>
                    </div>
                </div> <!-- END HEADING -->

                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                
                <table class="table table-bordered mb-5">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                    @foreach ($posts as $post)
               
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                             <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                   
                    @endforeach

                   
                </table>
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
			</div> <!-- END ROW -->
		</div> <!-- END AREA -->
	
	
	</div> <!-- END CONTAINER -->
</section>
<!-- END BLOG --> --}}





@endsection