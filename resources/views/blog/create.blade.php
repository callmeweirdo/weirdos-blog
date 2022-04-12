@extends('layouts.app')

@section('content')
    <div class=" w-4/5 m-auto text-center">
        <div class="py-15 border-b border-200">
            <h1 class="text-6xl">
                Create Post
            </h1>
        </div>
    </div>
    @if ($errors->any())
        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-red-700 bg-gray-100 rounded-2xl py-4 ">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="w-4/5 m-auto pt-20">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf



            <input type="text" name="title" placeholder="title..."
                class="bg-transparent block border-b-2 w-full h-20 text-xl ontline-none  ">

            <textarea name="description" placeholder="description"
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

            <div class="bg-gray-lighter pt-15 ">
                <label
                    class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer ">
                    <span class="mt-2 text-base leading-normal">
                        select a file
                    </span>
                    <input type="file" name="image" class="hidden">
                </label>

            </div>

            <button type="submit"
                class=" uppercase mt-15 text-gray-100 bg-blue-500 text-lg font-extrabold py-4 px-8 rounded">
                submit post
            </button>
        </form>
    </div>
@endsection
