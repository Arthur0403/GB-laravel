@extends('../templates/admin')

@section('title', 'Admin | News')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">News</h3>

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
                        News Name
                    </th>
                    <th style="width: 30%">
                        Author
                    </th>
                    <th>
                        Category
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <a>
                            Lorem Ipsum
                        </a>
                        <br>
                        <small>
                            Created 24.05.2021
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
                        Universe
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Published</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ url('/admin/news/1') }}">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{url('/admin/news/1/edit')}}">
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
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
