@extends('backend.index')

@section('content')
            <div class="modal-content h-100">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Просмотр(только чтение)</h5>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="recipient-name" class="col-form-label">Имя</label>
                        <p>{{$feed_backs->title}}</p>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Тема письма</label>
                        <p>{{$feed_backs->title}}</p>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Описание</label>
                        <p>{{$feed_backs->description}}</p>
                    </div>

                    <div class="modal-footer">
                        <a class="btn btn-danger" href="{{route('admin.feedbacks')}}">Назад</a>
                    </div>
                </div>
            </div>
@endsection

<script>

</script>
