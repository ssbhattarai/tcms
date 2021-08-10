<div>
        <div class="d-sm-flex align-items-center justify-content-between">
            <h1 class="h3 mb-0 text-gray-800">Blogs Create</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}" class="text-decoration-none">Blogs</a></li>
                  <li class="breadcrumb-item active">Create</li>
                </ol>
              </nav>
        </div>
        <hr>
        <div class="row">
            <div class="col-8">

                <div class="card">
                    <div class="card-body">

                        <form wire:submit.prevent="save">
                            <div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control" id="name" name="name" wire:model="name">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" wire:model="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" name="age" wire:model="age">
                                @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" wire:model="address">
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <button class="btn btn-primary" type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        h2
                    </div>
                </div>
            </div>
        </div>



</div>
