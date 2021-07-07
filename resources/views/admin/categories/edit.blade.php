@extends('../templates/admin')

@section('title', 'Admin | Edit category')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1>Category Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row pb-2">
            <div class="col-md-6 mx-auto">
                <form action="{{ route('categories.update', ['category' => $category]) }}" method="post">
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
                                <label for="inputName">Category Name</label>
                                <input type="text" id="inputName" class="form-control" name="category_name" value="{{ $category->category_name }}">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="inputAuthor">Author</label>--}}
{{--                                <input type="text" id="inputAuthor" class="form-control" name="inputAuthor">--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select" name="status">
                                    <option @if($category->status === 'draft' || $category->status === 'Draft') selected @endif>Draft</option>
                                    <option @if($category->status === 'Active') selected @endif>Active</option>
                                    <option @if($category->status === 'Disabled') selected @endif>Disabled</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Edit Category" class="btn btn-success float-right">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
