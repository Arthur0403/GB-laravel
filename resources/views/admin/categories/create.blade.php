@extends('../templates/admin')

@section('title', 'Admin | Create category')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1>Category Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row pb-2">
            <div class="col-md-6 mx-auto">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
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
                                <label for="inputName">Category Name*</label>
                                <input type="text" id="inputName" class="form-control" name="category_name">
                            </div>
                            @if($errors->has('category_name'))
                                <div class="alert alert-danger mt-2">
                                    @foreach($errors->get('category_name') as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                            @endif
{{--                            <div class="form-group">--}}
{{--                                <label for="inputAuthor">Author</label>--}}
{{--                                <input type="text" id="inputAuthor" class="form-control" name="author">--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select" name="status">
                                    <option selected="">Draft</option>
                                    <option>Active</option>
                                    <option>Disabled</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Create Category" class="btn btn-success float-right">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
