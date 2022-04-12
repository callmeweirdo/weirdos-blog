@extends('layouts.app')

@section('content')
    <div class=" w-4/5 m-auto text-center">
        <div class="py-15 border-b border-200">
            <h1 class="text-6xl">
                Blog Post
            </h1>
        </div>
    </div>

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto ">
            <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs py-3 px-5 font-exrabold rounded-3xl ">create post</a>
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 ">
            <div>
                <img src="https://cdn.pixabay.com/photo/2018/09/29/04/30/planet-3710757_960_720.jpg" width="700" alt="">
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text ">{{ $post->title }}</h2>

                <span class="textt-gray-500">
                    By <span class="font-bold-800 italic font-bold ">
                        {{ $post->user->name }}
                    </span>, Created on {{ date('jS M Y', strtotime($post->created_on) ) }}
                </span>

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ $post->description }}
                </p>

                <a href="" class="uppercase bg-blue-500 text-gray-100 font-extrabold py-4 px-8 rounded-3xl ">keep readng</a>
            </div>
        </div>
    @endforeach
@endsection
