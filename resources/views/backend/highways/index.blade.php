@extends('backend.index')

@section('content')
    @if($highWays->isNotEmpty())
        <div class="d-flex justify-content-end align-items-end">
            <button type="button" class="btn btn-primary mb-4 mr-2" data-bs-toggle="modal" data-bs-target="#highWayModal" data-bs-whatever="@mdo" data-action="{{route('admin.highways.store')}}">Создать</button>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Имя англ</th>
                <th scope="col">Дата создания</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($highWays as $highWay)
                <tr>
                    <th scope="row">{{ $highWay->id }}</th>
                    <td>{{ $highWay->name }}</td>
                    <td>{{ $highWay->eng_name }}</td>
                    <td>{{ $highWay->created_at }}</td>
                    <td class="d-flex">
                        <i class="fa-solid fa-pen mr-2" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#highWayModal" data-bs-whatever="@mdo" data-action="{{route('admin.highways.update', $highWay->id)}}" data-name="{{ $highWay->name }}" data-eng-name="{{ $highWay->eng_name }}"></i>
                        <i class="fa-solid fa-circle-minus text-danger" style="cursor: pointer;" onclick="deleteRow_bd('{{ route('admin.highways.destroy', $highWay->id) }}', 'delete')"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-center">Здесь ещё нет шоссе</h3>
            <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#highWayModal" data-bs-whatever="@mdo" data-action="{{route('admin.highways.store')}}">Создать</button>
        </div>
    @endif

    <div class="modal fade" id="highWayModal" tabindex="-1" aria-labelledby="highWayModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание/Редактировать</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="highWayForm" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Название</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Название англ</label>
                            <input type="text" class="form-control" name="eng_name">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>

</script>
