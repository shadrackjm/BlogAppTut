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
    <h6>Comments</h6>
    @if (count($postComments) > 0)
        @foreach ($postComments as $item)
            <span class="text-capitalize">{{$item->name}}:</span> 
            <hr> <p class="text-muted"> {{$item->comment}}</p>
        @endforeach
    @else   
        <span class="text-muted">No comment yet!</span>
    @endif
    
</div>
