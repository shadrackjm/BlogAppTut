<div class="col-xl-6">
    <livewire:post-viewers-count :postId="$post_id" />
    @if ($isLiked == false)
        <i class="bi bi-heart float-end" style="cursor: pointer;" wire:click.prevent="likeUnlike"></i> <span class="text-muted float-end mx-2">{{$likesCount}}</span>
    @else
        <i class="bi bi-heart-fill float-end" style="cursor: pointer;" wire:click.prevent="likeUnlike"></i><span class="text-muted float-end mx-2">{{$likesCount}}</span>
    @endif
</div>