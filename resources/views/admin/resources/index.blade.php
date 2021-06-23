@extends('../templates/admin')

@section('title', 'Admin | Resources')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Resources</h3><br>
            <p>{{ session('status') }}</p>
            <form action="{{route('resources.store')}}" method="post">
                @csrf
                <label for="resource_name">Name of resource</label><br>
                <input type="text" id="resource_name" name="resource_name"><br>
                <label for="resource_link">Enter url, please</label><br>
                <input type="text" id="resource_link" name="source_link"><br>
                <input type="submit" value="Add resource">
            </form>
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
                        Resource Name
                    </th>
                    <th>
                        Link
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
                </thead>
                <tbody>
                @forelse($resources as $resource)
                    <tr>
                        <td>
                            {{ $resource->id }}
                        </td>
                        <td>
                            <a>
                                {{ $resource->resource_name }}
                            </a>
                            <br>
                            <small>
                                Created {{ $resource->created_at->format('d-m-Y H:i') }}
                            </small>
                        </td>
                        <td>
                            {{ $resource->source_link }}
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('resources.show', ['resource' => $resource]) }}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{ route('resources.edit', ['resource' => $resource]) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm delete-news" data-id="{{$resource->id}}" data-token="{{ csrf_token() }}" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Вы не добавили никаких ресурсов</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
