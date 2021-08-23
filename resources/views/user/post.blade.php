@extends('user/app')

@section('bg-img', ('/assets/img/post-bg.jpg'))
{{-- //yielding the header texts --}}
@section('title', $slug->title)
@section('subtitle', $slug->subtitle)
@section('main-content')

<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <small>Created at {{ $slug->created_at->diffForHumans() }}</small>
                @foreach ($slug->categories as $category)
                <small class="pull-right" style="margin-right: 20px;">
                        {{ $category->name }}
                </h4>
        
                @endforeach
                
               {!! htmlspecialchars_decode($slug->body) !!}

               {{-- Tag clouds --}}
               <h4>Cloud  tags</h4>
               @foreach ($slug->tags as $tag)
                <small class="pull-right" style="margin-right: 20px;">
                        {{ $tag->name }}
                </h4>
        
                @endforeach
            </div>
        </div>
 
    </div>
</article>

@endsection