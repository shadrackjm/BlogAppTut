<div class="card">

            <div class="card-body">
              <h5 class="card-title"> My Dashboard</h5>
              <div class="row">
                <div class="col">
                    <div class="card" style="background-color: #98a0e3; font-size:20px;">
                      <div class="card-body text-center text-white">
                          Subscribers
                      </div>
                      <div class="card-footer text-center text-white"  style="background-color: #98a0e3">
                        100
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background-color: #db4662; font-size:20px;">
                      <div class="card-body text-center text-white">
                          Likes
                      </div>
                      <div class="card-footer text-center text-white"  style="background-color: #db4662">
                        100
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="background-color: #3ade9f; font-size:20px;">
                      <div class="card-body text-center text-white">
                          Comments
                      </div>
                      <div class="card-footer text-center text-white"  style="background-color: #3ade9f">
                        100
                      </div>
                    </div>
                </div>
                <div class="col" >
                    <div class="card" style="background-color: #e3a598; font-size:20px;">
                      <div class="card-body text-center text-white">
                          Posts
                      </div>
                      <div class="card-footer text-center text-white"  style="background-color: #e3a598">
                        {{$post_count}}
                      </div>
                    </div>
                </div>
              </div>
          
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Posted At</th>
                    <th scope="col">Last Updated</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $item)
                  {{-- for livewire to keep track and work efficient with loops use keys to uniquely identify each row in a loop --}}
                      <tr wire:key="{{$item->id}}">
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->post_title}}</td>
                        <td>{{$item->content}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
