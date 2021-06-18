@extends('../templates/admin')

@section('title', 'Admin | Show user')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User</h3>

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
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i>{{ $user->name }}</h3>
                    @switch($user->is_admin)
                        @case('1')
                        <span class="badge badge-success">Admin</span>
                        @break
                        @case('0')
                        <span class="badge badge-danger">Redactor</span>
                        @break
                        @default
                        <span class="badge badge-warning">Babon</span>
                    @endswitch
                    <p class="text-muted">{{ $user->email }}</p>
                    <br>
                    <div class="text-muted">
                        <p class="text-sm">Created
                            <b class="d-block">{{ $user->created_at->format('d-m-Y H:i') }} </b>
                        </p>
                        <p class="text-sm">Updated
                            <b class="d-block">{{ $user->updated_at->format('d-m-Y H:i') }}</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
