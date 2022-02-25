@auth
<x-panel>

    <form action="/posts/{{$post->slug}}/comments" method="POST">
        @csrf
        
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/100?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-xl" >
            <h2 class="ml-4">
                Want to participate?
            </h2>
        </header>
        <div class="mt-6">
            <textarea name="body" rows="5" placeholder="Thing of something to say!" class="w-full text-sm focus:outline-none focus:ring" required>
            </textarea>

            @error('body')
            <span class="text-xs text-red-500"></span>
                
            @enderror
        </div>
        
        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <x-submit-button>Post</x-submit-button>
        </div>
    </form>
</x-panel>
@else
<p>
    <a href="/register">Register</a> or <a href="/login">Log in </a> to leave a comment.
</p>
@endauth