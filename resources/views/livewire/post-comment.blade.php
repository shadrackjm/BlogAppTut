<div>
    <form wire:submit="leaveComment">
        <div class="form-group">
            <textarea wire:model="comment" class="form-control" cols="30" rows="3" placeholder="Your comment goes here..."></textarea>
            @error('comment')
                <span class="text-danger">{{$message}}</span>
            @enderror 
        </div>
        <button type="submit" class="btn btn-primary btn-sm my-2">publish</button>
    </form>
    <hr>
    <h6 class="card-title">Comments</h6>
    @if (count($postComments) > 0)
        @foreach ($postComments as $item)
        <div class="row">
            <div class="col-1">
                <img src="{{ asset('storage/images/' .$item->image) }}"  alt="" height="30px" width="30px" class="rounded-circle">
            </div>
            <div class="col-md-11">
                 <span class="text-capitalize">{{$item->name}}:</span> 
                <p class="text-muted"> {{$item->comment}}</p>
            </div>
        </div>
           
        @endforeach
    @else   
        <span class="text-muted">No comment yet!</span>
    @endif
    
</div>
