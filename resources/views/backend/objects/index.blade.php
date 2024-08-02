@extends('backend.index')

@section('content')
    @if($objects->isNotEmpty())
        <div class="d-flex justify-content-end align-items-end">
            <button type="button" class="btn btn-primary mb-4 mr-2" data-bs-toggle="modal" data-bs-target="#newModal" data-bs-whatever="@mdo" data-action="{{route('admin.objects.store')}}">Создать</button>
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
            @foreach($objects as $object)
                <tr>
                    <th scope="row">{{ $object->id }}</th>
                    <td>{{ $object->title }}</td>
                    <td>{!! \Illuminate\Support\Str::limit($object->description, 400) !!}</td>
                    <td>
                        @if ($image = $object->getImages($object?->id))
                            <img src="/storage/images/{{ $image->name }}" alt="{{ $object->image }}" width="100" height="70">
                        @endif
                    </td>
                    <td>{{ $object->created_at }}</td>
                    <td class="d-flex">
                        <a href="{{route('admin.objects.show', $object->id)}}"><i class="fa-solid fa-pen mr-2" style="cursor: pointer;"></i></a>
                        <i class="fa-solid fa-circle-minus text-danger" style="cursor: pointer;" onclick="deleteRow_bd('{{ route('admin.objects.destroy', $object->id) }}', 'delete')"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-center">Здесь ещё нет объектов</h3>
            <button type="button" class="btn btn-primary w-25" data-bs-toggle="modal" data-bs-target="#newModal" data-bs-whatever="@mdo" data-action="{{route('admin.objects.store')}}">Создать</button>
        </div>
    @endif

    <style>
        .characteristick label{
            color: grey !important;
        }
    </style>
    <div class="modal fade" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 1000px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Создание</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="newForm" method="POST" action="{{route('admin.objects.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <label for="recipient-name" class="col-form-label">Название</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Название англ</label>
                            <input type="text" class="form-control" name="eng_title">
                        </div>

                        @if($regions->isNotEmpty())
                            <label for="recipient-name" class="col-form-label">Регион</label>
                            <select class="form-select" name="region_id" id="">
                                @foreach($regions as $region)
                                    <option value="{{$region->id}}">{{$region->name}}</option>
                                @endforeach
                            </select>
                        @endif

                        @if($directions->isNotEmpty())
                            <label for="recipient-name" class="col-form-label">Направление</label>
                            <select class="form-select" name="direction_id" id="">
                                @foreach($directions as $direction)
                                    <option value="{{$direction->id}}">{{$direction->name}}</option>
                                @endforeach
                            </select>
                        @endif

                        @if($highways->isNotEmpty())
                            <label for="recipient-name" class="col-form-label">Шоссе</label>
                            <select class="form-select" name="highway_id" id="">
                                @foreach($highways as $highWay)
                                    <option value="{{$highWay->id}}">{{$highWay->name}}</option>
                                @endforeach
                            </select>
                        @endif

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Описание</label>
                            <textarea id="summernote" name="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Описание англ</label>
                            <textarea id="summernote2" name="eng_description"></textarea>
                        </div>

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="availability" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Наличие стеллажей
                            </label>
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Дата создания</label>
                            <input type="datetime-local" class="form-control" name="date">
                        </div>



                        <div class="mb-3 mt-3 characteristick">
                            <b style="font-size: 24px">Характеристики:</b> <br/>
                            <label for="recipient-name" class="col-form-label">Общая площадь, кв. м</label>
                            <input type="text" class="form-control" name="all_square">

                            <label for="recipient-name" class="col-form-label">Свободная площадь, кв. м</label>
                            <input type="text" class="form-control" name="free_square">

                            <label for="recipient-name" class="col-form-label">Минимальный блок, кв. м</label>
                            <input type="text" class="form-control" name="min_square">

                            <label for="recipient-name" class="col-form-label">-высота, м</label>
                            <input type="text" class="form-control" name="height">

                            <label for="recipient-name" class="col-form-label">-шаг колонн, м</label>
                            <input type="text" class="form-control" name="column_pitch">

                            <label for="recipient-name" class="col-form-label">-нагрузка на пол, т/кв. м</label>
                            <input type="text" class="form-control" name="floor_load">

                            <label for="recipient-name" class="col-form-label">-освещение</label>
                            <input type="text" class="form-control" name="lighting">

                            <label for="recipient-name" class="col-form-label">-освещение англ</label>
                            <input type="text" class="form-control" name="eng_lighting">

                            <label for="recipient-name" class="col-form-label">-система пожаротушения</label>
                            <input type="text" class="form-control" name="fire_system">

                            <label for="recipient-name" class="col-form-label">-система пожаротушения англ</label>
                            <input type="text" class="form-control" name="eng_fire_system">

                            <label for="recipient-name" class="col-form-label">Удаленность от МКАД, км</label>
                            <input type="number" class="form-control" name="distance_mkad">

                            <label for="recipient-name" class="col-form-label">Класс помещений</label>
                            <input type="text" class="form-control" name="class_house">

                        </div>


                        <div>
                            <label for="recipient-name" class="col-form-label">Тип:</label>
                            <select class="form-select" name="price_type" id="">
                                <option value="1">Аренда</option>
                                <option value="2">Продажа</option>
                            </select>
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Помещение:</label>
                            <select class="form-select" name="type_room" id="">
                                <option value="1">Складские помещения</option>
                                <option value="2">Промышленные участки</option>
                            </select>
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Цена</label>
                            <input type="number" class="form-control" name="price">
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Город</label>
                            <input type="text" class="form-control" name="city">
                        </div>

                        <div>
                            <label for="recipient-name" class="col-form-label">Город англ</label>
                            <input type="text" class="form-control" name="eng_city">
                        </div>


                        <b class="mt-3">Фотографии:</b>

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="images[]" multiple>
                            <label class="custom-file-label" for="customFile">Выберите файлы</label>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="recipient-name" class="col-form-label">Зум карты(в цифрах)</label>
                            <input type="number" class="form-control" name="zoom">

                            <label for="recipient-name" class="col-form-label">Координата x</label>
                            <input type="text" class="form-control" name="x_coord">

                            <label for="recipient-name" class="col-form-label">Координата y</label>
                            <input type="text" class="form-control" name="y_coord">
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
