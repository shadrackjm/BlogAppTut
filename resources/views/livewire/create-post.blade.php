<div class="card">
    {{-- here create a form to add new post --}}
    <div class="card-header">
        add new post
    </div>
    <div class="card-body">
        {{-- here we call save function --}}
        <form class="my-3" wire:submit="save"> 
        <div class="col-sm-10">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model="post_title" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Post Title</label>
            </div>
            {{-- show validation error here --}}
            @error('post_title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-sm-10">
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="post details" wire:model="content" id="floatingTextarea" style="height: 100px;"></textarea>
                <label for="floatingInput">Your post goes here..</label>
            </div>
            @error('content')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/user/home" wire:navigate class="btn btn-secondary">cancel</a>
        </div>
    </form>
    </div>
</div>
