@extends('backend.index')

@section('content')
    @if($regions->isNotEmpty())
        <div class="d-flex justify-content-end align-items-end">
            <button type="button" class="btn btn-primary mb-4 mr-2" data-bs-toggle="modal" data-bs-target="#regionModal" data-bs-whatever="@mdo" data-action="{{route('admin.regions.store')}}">Создать</button>
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
            @foreach($regions as $region)
                <tr>
                    <th scope="row">{{ $region->id }}</th>
                    <td>{{ $region->name }}</td>
                    <td>{{ $region->eng_name }}</td>
                    <td>{{ $region->created_at }}</td>
                    <td class="d-flex">
                        <i class="fa-solid fa-pen mr-2" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#regionModal" data-bs-whatever="@mdo" data-action="{{route('admin.regions.update', $region->id)}}" data-name="{{ $region->name }}" data-eng-name="{{ $region->eng_name }}"></i>
                        <i class="fa-solid fa-circle-minus text-danger" style="cursor: pointer;" onclick="deleteRow_bd('{{ route('admin.regions.destroy', $region->id) }}', 'delete')"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-center">Здесь ещё нет регионов</h3>
            <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#regionModal" data-bs-whatever="@mdo" data-action="{{route('admin.regions.store')}}">Создать</button>
        </div>
    @endif

    <div class="modal fade" id="regionModal" tabindex="-1" aria-labelledby="regionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создать/Редактировать</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="regionForm" method="POST">
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
