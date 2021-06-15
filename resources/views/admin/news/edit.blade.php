@extends('../templates/admin')

@section('title', 'Admin | Edit news')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1>News Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">News Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row pb-2">
            <div class="col-md-6 mx-auto">
                <form action="{{ route('news.update', ['news'=> $news]) }}" method="post">
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
                                <label for="inputName">News Name*</label>
                                <input type="text" id="inputTitle" class="form-control" name="news_title" value="{{ $news->news_title }}">
                                @if($errors->has('news_title'))
                                    <div class="alert alert-danger mt-2">
                                        @foreach($errors->get('news_title') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">News Content*</label>
                                <textarea id="inputDescription" class="form-control" rows="4" name="news_description">{{ $news->news_description }}</textarea>
                                @if($errors->has('news_description'))
                                    <div class="alert alert-danger mt-2">
                                        @foreach($errors->get('news_description') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="inputStatus">Status</label>
                                <select id="inputStatus" class="form-control custom-select" name="status">
                                    <option @if($news->status === 'draft' || $news->status === 'Draft') selected @endif>Draft</option>
                                    <option @if($news->status === 'Active') selected @endif>Active</option>
                                    <option @if($news->status === 'Disabled') selected @endif>Disabled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputAuthor">Author</label>
                                <input type="text" id="inputAuthor" class="form-control" name="author" value="{{ $news->author }}">
                            </div>
                            <div class="form-group">
                                <label for="inputCategory">Category*</label>
                                <select id="inputCategory" class="form-control custom-select" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                        @if($category->id === $news->id_category) selected @endif>{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('category_id'))
                                    <div class="alert alert-danger mt-2">
                                        @foreach($errors->get('category_id') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Edit News" class="btn btn-success float-right">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
