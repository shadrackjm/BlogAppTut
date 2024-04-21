@extends('layouts/user-layout')
@section('space-work')
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('storage/images/' .$post_data->photo) }}"  alt="" class="card-img-top">
                        <div class="row my-2">
                            <div class="col-xl-6">
                                {{-- here we will pass on which day the post was published --}}
                                <i class="bi bi-calendar"></i>
                                <span class="text-muted">{{date('D M Y h:i:s A',strtotime($post_data->created_at))}}</span> <br>
                                <span class="text-muted">{{$post_data->name}}</span>
                            </div>
                        </div>
                        <h2 class="text-primary">{{$post_data->post_title}}</h2>
                        <p>{{$post_data->content}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body pb-0">
              <h5 class="card-title">Related Posts</h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h6><a href="#">Nihil blanditiis at in nihil autem</a></h6>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>


              </div><!-- End sidebar recent posts-->

            </div>
                </div>
            </div>
        </div>
    </div>
@endsection