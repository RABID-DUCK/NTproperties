@extends('backend.index')

@section('content')
    @if($news->isNotEmpty())
        <div class="d-flex justify-content-end align-items-end">
            <button type="button" class="btn btn-primary mb-4 mr-2" data-bs-toggle="modal" data-bs-target="#newModal" data-bs-whatever="@mdo" data-action="{{route('admin.news.store')}}">Создать</button>
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
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col">Картинка</th>
                <th scope="col">Дата создания</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $new)
                <tr>
                    <th scope="row">{{ $new->id }}</th>
                    <td>{{ $new->title }}</td>
                    <td>{!! substr(strip_tags($new->description), 0, 150) !!}</td>
                    <td><img src="/storage/images/{{ $new->image }}" alt="{{ $new->image }}" width="100" height="70"></td>
                    <td>{{ $new->created_at }}</td>
                    <td class="d-flex">
                        <a href="{{route('admin.news.show', $new->id)}}"><i class="fa-solid fa-pen mr-2" style="cursor: pointer;"></i></a>
                        <i class="fa-solid fa-circle-minus text-danger" style="cursor: pointer;" onclick="deleteRow_bd('{{ route('admin.news.destroy', $new->id) }}', 'delete')"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-center">Здесь ещё нет новостей</h3>
            <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#newModal" data-bs-whatever="@mdo" data-action="{{route('admin.news.store')}}">Создать</button>
        </div>
    @endif

    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 1000px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="newForm" method="POST" action="{{route('admin.news.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="recipient-name" class="col-form-label">Название</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Название англ</label>
                            <input type="text" class="form-control" name="eng_title">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Описание</label>
                            <textarea id="summernote" name="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Описание англ</label>
                            <textarea id="summernote2" name="eng_description"></textarea>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Выберите файл</label>
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
