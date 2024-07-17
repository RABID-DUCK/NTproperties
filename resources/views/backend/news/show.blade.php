@extends('backend.index')

@section('content')
            <div class="modal-content h-100">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="h-100" id="newForm" method="POST" action="{{route('admin.news.update', $news->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="recipient-name" class="col-form-label">Название</label>
                            <input type="text" class="form-control" name="title" value="{{$news->title}}">
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Название англ</label>
                            <input type="text" class="form-control" name="eng_title" value="{{$news->eng_title}}">
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Описание</label>
                            <textarea id="summernote" name="description">{!! $news->description !!}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Описание англ</label>
                            <textarea id="summernote2" name="eng_description">{!! $news->eng_description !!}</textarea>
                        </div>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="image" value="{{$news->image}}">
                            <label class="custom-file-label" for="customFile">Выберите файл</label>
                        </div>
                        <img src="{{'/storage/images/' . $news->image}}" alt="фото новости" width="400" height="200">

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Редактировать</button>
                            <a class="btn btn-danger" href="{{route('admin.news')}}">Назад</a>
                        </div>
                    </form>
                </div>
            </div>
@endsection

<script>

</script>
