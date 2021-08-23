 @extends('user.app')

 @section('bg-img', ('assets/img/home-bg.jpg'))
 @section('title', 'Titans Blog Section')
@section('subtitle', 'Enjoy your self')

 @section('main-content')

 <!-- Main Content-->
 <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{ route('post', $post->slug) }}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <h3 class="post-subtitle">{{ $post->subtitle }}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    {{ $post->created_at->diffForHumans() }}
                </p>
            </div>
            <!-- Divider-->
            @endforeach
            <hr class="my-4" />
            
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>

 @endsection
 
 