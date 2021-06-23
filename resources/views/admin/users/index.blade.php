@extends('../templates/admin')

@section('title', 'Admin | Users')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Users</h3>

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
                        #id
                    </th>
                    <th style="width: 20%">
                        Username
                    </th>
                    <th style="width: 20%">
                        Avatar
                    </th>
                    <th style="width: 30%">
                        E-mail
                    </th>
                    <th>
                        Role
                    </th>
                    <th>
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="/assets/admin/dist/img/avatar.png">
                                </li>
                            </ul>
                        </td>
                        <td class="project_progress">
                            {{ $user->email }}
                        </td>
                        <td class="project-state">
                            @switch($user->is_admin)
                                @case('1')
                                <span class="badge badge-success">Admin</span>
                                @break
                                @case('0')
                                <span class="badge badge-warning">Redactor</span>
                                @break
                                @default
                                <span class="badge badge-danger">Babon</span>
                            @endswitch
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('users.show', ['user' => $user]) }}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('users.edit', ['user' => $user]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
{{--                            <a class="btn btn-danger btn-sm delete-news" data-id="{{$user->id}}" data-token="{{ csrf_token() }}" href="#">--}}
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Нет пользователей</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="paginate mt-5 mb-4 ml-2">
            {{ $users->links() }}
        </div>
    </div>
@endsection
