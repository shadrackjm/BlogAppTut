@extends('layouts/user-layout')
@section('space-work')
{{-- create a livewire component then pass down the post we get from controller --}}
<livewire:edit-post :post_data="$post_data" />
@endsection