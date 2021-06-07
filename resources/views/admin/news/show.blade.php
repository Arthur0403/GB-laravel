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
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i> Lorem ipsum</h3>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores autem, consequuntur cupiditate dolorum esse laboriosam minima numquam placeat quidem recusandae sapiente similique totam. Ad autem eum neque, numquam quae quaerat?</p>
                    <br>
                    <div class="text-muted">
                        <p class="text-sm">Created
                            <b class="d-block">24.05.2021 </b>
                        </p>
                        <p class="text-sm">Updated
                            <b class="d-block">24.05.2021 </b>
                        </p>
                        <p class="text-sm">Author
                            <b class="d-block">John Doe</b>
                        </p>
                        <p class="text-sm">Category
                            <b class="d-block">Universe</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
