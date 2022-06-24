<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <h1 style="text-align:center">New Post</h1>
                   <form action="{{route('post.store')}}" method="POST">
                    @csrf
                    <label for="title" style="margin-left:10px">Title</label>
                    <br>
                    <input type="text" id="title" name="title" style="padding:10px; border-radius:10px;margin-bottom:10px">
                    <br>
                    <label for="content" style="margin-left:5px">Content</label>
                    <br>
                   <textarea name="content" id="content" cols="40" rows="5" style="border-radius:5px"></textarea>
                   <br>
                   <input type="submit" value="submit" style="font-size:15px; padding:15px; background-color:green; border-radius:5px; cursor:pointer">
                   </form>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
