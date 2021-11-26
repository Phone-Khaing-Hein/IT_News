@extends('blog.master')

@section('content')
    <div class="">
        <div class="py-3">

            <div class="small post-category mb-3">
                <a href="{{route('baseOnCategory',$article->category_id)}}" rel="category tag">{{$article->getCategory->title}}</a>
            </div>

            <h2 class="fw-bolder">{{$article->title}}</h2>
            <div class="my-3 feature-image-box">
                <div class="d-block d-md-flex justify-content-between align-items-center my-3">
                    <div class="">
                        <img alt="" src="{{ isset($article->getUser->photo) ? asset('storage/profile/'.$article->getUser->photo) : asset('dashboard/img/user-default-photo.jpg') }}"
                             class="avatar avatar-50 photo rounded-circle" height="30" width="30">
                        <a href="{{route('baseOnUser',$article->getUser->id)}}" class="ms-2 text-decoration-none">
                            {{$article->getUser->name}}
                        </a>
                    </div>

                    <a href="{{route('baseOnDate',$article->created_at->format("Y-m-d H:i:s"))}}" class="text-primary text-decoration-none">
                        <i class="feather-calendar"></i>
                        {{$article->created_at->format("d M Y h:i a")}}
                    </a>
                </div>

                <p class="text-black-50" style="white-space: pre-line;">
                    {{$article->description}}
                </p>


                @php
                    $previousArticle = \App\Article::where("id","<",$article->id)->latest('id')->first();
                    $nextArticle = \App\Article::where("id",">",$article->id)->first();

                @endphp

                <div class="nav d-flex justify-content-between p-3">
                    <a href="{{isset($previousArticle) ? route('detail',$previousArticle->slug) : '#'}}"
                       class="btn btn-outline-primary page-mover rounded-circle @empty($previousArticle) disabled @endempty">
                        <i class="feather-chevron-left"></i>
                    </a>

                    <a class="btn btn-outline-primary px-3 rounded-pill" href="{{route('index')}}">
                        Read All
                    </a>

                    <a href="{{isset($nextArticle) ? route('detail',$nextArticle->slug) : '#'}}"
                       class="btn btn-outline-primary page-mover rounded-circle @empty($nextArticle) disabled @endempty">
                        <i class="feather-chevron-right"></i>
                    </a>
                </div>
            </div>


        </div>
        <div class="d-block d-lg-none d-flex justify-content-center"></div>
    </div>
@endsection
