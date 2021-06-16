@extends('../templates/admin')

@section('title', 'Admin | Edit user')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1>User Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row pb-2">
            <div class="col-md-6 mx-auto">
                <form action="{{ route('users.update', ['user'=> $user]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">General</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <label for="inputName">User Name*</label>
                                <input type="text" id="inputTitle" class="form-control" name="name" value="{{ $user->name }}">
                                @if($errors->has('name'))
                                    <div class="alert alert-danger mt-2">
                                        @foreach($errors->get('name') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="inputName">E-mail*</label>
                                <input type="text" id="inputTitle" class="form-control" name="email" value="{{ $user->email }}">
                                @if($errors->has('email'))
                                    <div class="alert alert-danger mt-2">
                                        @foreach($errors->get('email') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select" name="is_admin">
                                    <option value="1" @if($user->is_admin === true) selected @endif>Admin</option>
                                    <option value="0" @if($user->is_admin === false) selected @endif>Redactor</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Edit User" class="btn btn-success float-right">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
