<div class="row">
    {{-- here we will loop through all posts.. --}}
        @foreach ($posts as $post)
            <div class="col-xl-4">
            <div class="card">
                <img src="{{ asset('storage/images/' .$post->photo) }}" height="200px" alt="" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{$post->post_title}}</h5>
                    <p>{{str($post->content)->words(10)}}</p>
                    {{-- this functions will truncate the words above 10 --}}
                </div>
                <div class="card-footer">
                    <span class="text-muted">By {{$post->name}}</span> | 
                    <a href="/view/post/{{$post->id}}" class="card-link">read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>