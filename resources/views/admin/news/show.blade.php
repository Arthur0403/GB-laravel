@extends('../templates/admin')

@section('title', 'Admin | Show news')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">News Detail</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i>{{ $news->news_title }}</h3>
                    @switch($news->status)
                        @case('Active')
                            <span class="badge badge-success">{{ $news->status }}</span>
                            @break
                        @case('Disabled')
                            <span class="badge badge-danger">{{ $news->status }}</span>
                            @break
                        @default
                            <span class="badge badge-warning">{{ $news->status }}</span>
                    @endswitch
                    <p class="text-muted">{{ $news->news_description }}</p>
                    <br>
                    <div class="text-muted">
                        <p class="text-sm">Created
                            <b class="d-block">{{ $news->created_at->format('d-m-Y H:i') }} </b>
                        </p>
                        <p class="text-sm">Updated
                            <b class="d-block">{{ $news->updated_at->format('d-m-Y H:i') }}</b>
                        </p>
                        <p class="text-sm">Author
                            <b class="d-block">{{ $news->author }}</b>
                        </p>
                        <p class="text-sm">Category
                            <b class="d-block">{{ $news->category_id }}</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
