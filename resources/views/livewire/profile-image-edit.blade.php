<div class="row mb-3">
    <form wire:submit="uploadImage">
        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
        <div class="col-md-8 col-lg-9">
        <img height="100px" width="100px" src="{{ asset('storage/images/'.$existingImage) }}" alt="profile image">
        <input type="file" wire:model="image" class="form-control">
        @error('image')
            <span class="text-danger">{{$message}}</span>
        @enderror
        <div class="pt-2">
            <button type="submit" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></button>
            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
        </div>
        </div>
    </form>
</div>