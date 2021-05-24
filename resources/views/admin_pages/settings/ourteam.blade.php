@extends('layouts.admin_layouts.app')

@section('content')

    @include('layouts.admin_layouts.session')
   <link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
   <link src="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <div class="container-fluid">

        {{-- header nav --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-1">
                <li class="breadcrumb-item"><a href="{{url('/admin/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
            </ol>
        </nav>

        <div class="title">
            <h3> Our Team  </h3>
            <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                Add New Member
              </button>
        </div>

         <hr>

         <div class="table-responsive">
             <table id="ourteam-table" class="table table-striped table-bordered" style="width:100%">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Sn</th>
                        <th scope="col" class="sort" data-sort="name">Name</th>
                        <th scope="col" class="sort" data-sort="name">Post</th>
                        <th scope="col" class="sort" data-sort="name">Status</th>
                        <th scope="col" class="sort" data-sort="name">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $key=>$team)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->post }}</td>
                        <td>
                            <form action="{{ url('admin/changeteamstatus/') }}/{{ $team->id }}" method="POST">
                                @csrf
                                <button type="submit" class="btn {{ $team->status ? 'btn-outline-success' : 'btn-outline-danger' }} btn-sm">
                                    {{ $team->status ? 'Active' : 'Disable' }}
                                </button>
                            </form>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col">

                                    <form action="{{ route('team.destroy',$team->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-outline-default btn-sm"  data-toggle="modal" data-target="#editModal{{ $team->id }}">Edit</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <div class="modal fade" id="editModal{{ $team->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="editModalLabel">Edit Member</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('team.update', $team->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="form-control-label">Name</label>
                                        <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{ $team->name }}" id="name" name="name">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="post" class="form-control-label">Post</label>
                                        <input class="form-control @error('post') is-invalid @enderror" type="text" value="{{ $team->post }}" id="post" name="post">
                                        @error('post')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFileLang" lang="en" name="image" value="{{ old('image') }}">
                                        @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                        <label class="custom-file-label" for="customFileLang">Select file</label>

                                    </div>
                                    <br> <br>
                                    <div class="form-group">

                                        <label class="custom-toggle">
                                            <input type="checkbox" {{ $team->status ? 'checked' : '' }} name="status">
                                            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes" ></span>
                                        </label>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    @endforeach
                </tbody>
             </table>

             <div class="d-flex justify-content-center">
                {!! $teams->links() !!}
            </div>

         </div>

    </div>



  <!-- create Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Team Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name" class="form-control-label">Name</label>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}" id="name" name="name">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="post" class="form-control-label">Post</label>
                    <input class="form-control @error('post') is-invalid @enderror" type="text" value="{{ old('post') }}" id="post" name="post">
                    @error('post')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>

                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="customFileLang" lang="en" name="image" value="{{ old('image') }}">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    <label class="custom-file-label" for="customFileLang">Select file</label>

                </div>
                <br> <br>
                <div class="form-group">

                    <label class="custom-toggle">
                        <input type="checkbox" checked name="status">
                        <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes" ></span>
                    </label>
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  {{-- edit modal --}}


@section('script')
<script type="text/javascript">
    @if (count($errors) > 0)
        $('#exampleModal').modal('show');
    @endif
    </script>

@endsection

@endsection
