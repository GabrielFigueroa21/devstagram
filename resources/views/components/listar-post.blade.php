<div>
   @if ($posts->count())
        <div class="grid md:grid-col-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach ($posts as $post)
               <div>
                  <a href="{{ route('posts.show', ['user' => $post->user ,'post' => $post]) }}">
                        <div class="flex w-full items-center">
                           <img src="{{ asset('perfiles') . '/' . $post->user->imagen }}" alt="Imagen de perfil" class="md:h-10 md:w-10 max-md:w-4 max-md:h-4 rounded-full">
                           <h1 class="p-5">{{ $post->user->username }}</h1>
                        </div>   
                    
                        <img  src="{{ asset('uploads') . '/' . $post->imagen }}" alt="Imagen del post {{ $post->titulo }}">    
                  </a>
               </div>
            @endforeach
         </div>
          <div class='my-10'>{{ $posts->links('pagination::tailwind') }}  </div>
   @else
      <p class='text-center'>No hay posts, sigue a alguien para poder mostrar sus posts</p>
   @endif   
</div>