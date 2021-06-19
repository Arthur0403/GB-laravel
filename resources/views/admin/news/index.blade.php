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
                @forelse($news as $item)
                    <tr>
                        <td>
                            {{ $item->id }}
                        </td>
                        <td>
                            <a>
                                {{ $item->news_title }}
                            </a>
                            <br>
                            <small>
                                Created {{ $item->created_at->format('d-m-Y H:i') }}
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
                            {{ $item->category->category_name }}
                        </td>
                        <td class="project-state">
                            @switch($item->status)
                                @case('Active')
                                    <span class="badge badge-success">{{ $item->status }}</span>
                                    @break
                                @case('Disabled')
                                    <span class="badge badge-danger">{{ $item->status }}</span>
                                    @break
                                @default
                                    <span class="badge badge-warning">{{ $item->status }}</span>
                            @endswitch
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('news.show', ['news' => $item]) }}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('news.edit', ['news' => $item]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm delete-news" data-id="{{$item->id}}" data-token="{{ csrf_token() }}" href="#">
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
        <div class="paginate mt-5 mb-4 ml-2">
            {{ $news->links() }}
        </div>
    </div>
@endsection
