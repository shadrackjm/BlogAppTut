<div class="news">
    @foreach ($related_posts as $item)
        <div class="post-item clearfix" wire:key="{{$item->id}}">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('storage/images/' .$item->photo) }}"  alt="" height="50px" width="50px">
            </div>
            <div class="col-md-9">
                <h6><a href="/view/post/{{$item->id}}" wire:navigate>{{$item->post_title}}</a></h6>
                <p>{{str($item->content)->words(7)}}</p>
            </div>
        </div>
            
        </div>
    @endforeach

</div>