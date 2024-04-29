<button class="btn btn-outline-primary btn-sm m-2" wire:click.prevent="followUnfollow({{$followed_id}})"> {{$IFollowed == true ? 'unfollow' : 'follow'}} {{$number_followers}}</button>
