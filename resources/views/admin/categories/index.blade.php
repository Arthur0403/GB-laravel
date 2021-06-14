@extends('../templates/admin')

@section('title', 'Admin | Categories')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categories</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Category Name
                    </th>
                    <th style="width: 30%">
                        Created by
                    </th>
                    <th>
                        Changed
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>
                                {{ $category->id_category }}
                            </td>
                            <td>
                                <a>
                                    {{ $category->category_name }}
                                </a>
                                <br>
                                <small>
                                    {{ $category->created_at }}
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="/assets/admin/dist/img/avatar.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                {{ $category->updated_at }}
                            </td>
                            <td class="project-state">
                                @switch($category->status)
                                    @case('Active')
                                    <span class="badge badge-success">{{ $category->status }}</span>
                                    @break
                                    @case('Disabled')
                                    <span class="badge badge-danger">{{ $category->status }}</span>
                                    @break
                                    @default
                                    <span class="badge badge-warning">{{ $category->status }}</span>
                                @endswitch
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{ url("/admin/categories/$category->id") }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{url("/admin/categories/$category->id/edit")}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Записей нет</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
