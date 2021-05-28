@extends('blog.blogapp')
@section('content')




<!-- START BLOG -->
<section id="blog" class="gray_bg section_padding">
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
                
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
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
			</div> <!-- END ROW -->
		</div> <!-- END AREA -->
	
	
	</div> <!-- END CONTAINER -->
</section>
<!-- END BLOG -->





@endsection