@extends('backend.index')

@section('content')
            <div class="modal-content h-100">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="h-100" id="newForm" method="POST" action="{{route('admin.reviews.update', $reviews->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="recipient-name" class="col-form-label">Название</label>
                            <input type="text" class="form-control" name="title" value="{{$reviews->title}}">
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Дата создания</label>
                            <input type="datetime-local" class="form-control" name="date" value="{{$reviews->created_at}}">
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Название англ</label>
                            <input type="text" class="form-control" name="eng_title" value="{{$reviews->eng_title}}">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Описание</label>
                            <textarea id="summernote" name="description">{!! $reviews->description !!}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Описание англ</label>
                            <textarea id="summernote2" name="eng_description">{!! $reviews->eng_description !!}</textarea>
                        </div>

                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="image" value="{{$reviews->image}}">
                            <label class="custom-file-label" for="customFile">Выберите изображение</label>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="file">
                            <label class="custom-file-label" for="customFile">Выберите файл(если нужен)</label>
                        </div>

                        <div class="d-flex flex-column mt-3">
                            <img src="{{'/storage/images/' . $reviews->image}}" alt="фото новости" width="400" height="200">
                            @if($reviews->file !== null)
                                <a class="mt-3" href="{{'/storage/files/' . $reviews->file}}" style="font-size: 40px" download>
                                    <i class="fa-solid fa-file-powerpoint"></i>
                                </a>
                            @endif
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Редактировать</button>
                            <a class="btn btn-danger" href="{{route('admin.reviews')}}">Назад</a>
                        </div>
                    </form>
                </div>
            </div>
@endsection

<script>

</script>
