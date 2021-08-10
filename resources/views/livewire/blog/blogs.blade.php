<div>
            <div class="d-sm-flex align-items-center justify-content-between">
                <h1 class="h3 mb-0 text-gray-800">Blogs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                      {{-- <li class="breadcrumb-item"><a href="#">Blog</a></li> --}}
                      <li class="breadcrumb-item active">Blogs</li>
                    </ol>
                  </nav>
            </div>


            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="float-left mt-5">
                        <a href="{{ route('blogs.create') }}">
                            <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" wire:click="$emit('triggerCreate')">
                                <i class="fas fa-plus fa-sm text-white"></i> Add New Blog
                            </button>
                        </a>
                    </div>

                    <div class="float-right mt-5">
                        <input class="form-control mr-sm-2" wire:model="search" type="search" placeholder="Search Blog..." aria-label="Search">
                    </div>
                </div>
            </div>

            <div class="table-responsive">

                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th >
                            #
                        </th>
                        <th >
                            <a wire:click.prevent="sortBy('title')" role="button" href="#">
                                Title
                                @include('admin.includes.sort-icon', ['field' => 'title'])
                            </a>
                        </th>
                        <th >category</th>
                        <th >Created At</th>
                        <th >Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as  $key => $blog )

                        <tr>
                          <th scope="row">{{ $key+1 }}</th>
                          <td>{{ $blog->title }}</td>
                          {{-- <td><img src="{{ URL::asset('storage/') }}/{{ $blog->image }}" alt="{{ $blog->title }}" class="rounded img-fit"></td> --}}
                          <td>{{ $blog->category->name }}</td>
                          <td>{{ \Carbon\Carbon::parse($blog->created_at )->toFormattedDateString() }}</td>
                          <td>
                           <a href="">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit blog">
                                    <i class="far fa-edit"></i>
                                </button>
                            </a>

                            <button type="button" class="btn btn-info btn-sm">
                                <i class="fas fa-external-link-alt"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-sm">
                                <i class="fa fa-eye"></i>
                            </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete blog" wire:click="$emit('deleteTriggered', {{ $blog->id }}, '{{ $blog->title }}')">
                                    <i class="fa fa-trash"></i>
                                </button>

                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>

             {{ $blogs->links() }}



</div>
