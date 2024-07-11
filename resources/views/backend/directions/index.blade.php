@extends('backend.index')

@section('content')
    @if($directions->isNotEmpty())
        <div class="d-flex justify-content-end align-items-end">
            <button type="button" class="btn btn-primary mb-4 mr-2" data-bs-toggle="modal" data-bs-target="#directionModal" data-bs-whatever="@mdo" data-action="{{route('admin.directions.store')}}">Создать</button>
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
                <th scope="col">Дата создания</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($directions as $direction)
                <tr>
                    <th scope="row">{{ $direction->id }}</th>
                    <td>{{ $direction->name }}</td>
                    <td>{{ $direction->created_at }}</td>
                    <td class="d-flex">
                        <i class="fa-solid fa-pen mr-2" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#directionModal" data-bs-whatever="@mdo" data-action="{{route('admin.directions.update', $direction->id)}}"></i>
                        <i class="fa-solid fa-circle-minus text-danger" style="cursor: pointer;" onclick="deleteRow_bd('{{ route('admin.directions.destroy', $direction->id) }}', 'delete')"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-center">Здесь ещё нет направлений</h3>
            <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#directionModal" data-bs-whatever="@mdo" data-action="{{route('admin.directions.store')}}">Создать</button>
        </div>
    @endif

    <div class="modal fade" id="directionModal" tabindex="-1" aria-labelledby="directionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание/Редактировать</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="directionForm" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Название</label>
                            <input type="text" class="form-control" name="name">
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
