@extends('backend.index')

@section('content')
    <style>
        footer{
            display: none;
        }
    </style>
    <div class="p-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="objectForm" method="POST" action="{{route('admin.objects.update', $object->id)}}" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="recipient-name" class="col-form-label">Название</label>
                <input type="text" class="form-control" name="title" value="{{$object->title}}">
            </div>

            <div>
                <label for="recipient-name" class="col-form-label">Дата создания</label>
                <input type="datetime-local" class="form-control" name="date" value="{{$object->created_at}}">
            </div>

            <div>
                <label for="recipient-name" class="col-form-label">Название англ</label>
                <input type="text" class="form-control" name="eng_title" value="{{$object->eng_title}}">
            </div>

            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Описание</label>
                <textarea id="summernote" class="form-control" name="description">{!! \Illuminate\Support\Str::limit($object->description, 400) !!}</textarea>
            </div>

            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Описание англ</label>
                <textarea id="summernote2" class="form-control" name="eng_description">{!! \Illuminate\Support\Str::limit($object->eng_description, 400) !!}</textarea>
            </div>

            <div>
                <label for="recipient-name" class="col-form-label">Тип:</label>
                <select class="form-select" name="price_type" id="">
                    <option value="1" @selected($object->price_type == 1)>Аренда</option>
                    <option value="2" @selected($object->price_type == 2)>Продажа</option>
                </select>
            </div>

            <div>
                <label for="recipient-name" class="col-form-label">Помещение:</label>
                <select class="form-select" name="type_room" id="">
                    <option value="1" @selected($object->type_room == 1)>Складские помещения</option>
                    <option value="2" @selected($object->type_room == 2)>Промышленные участки</option>
                </select>
            </div>

            <div>
                <label for="recipient-name" class="col-form-label">Цена</label>
                <input type="number" class="form-control" name="price" value="{{$object->price}}">
            </div>

            <div>
                <label for="recipient-name" class="col-form-label">Город</label>
                <input type="text" class="form-control" name="city" value="{{$object->city}}">
            </div>

            <div>
                <label for="recipient-name" class="col-form-label">Город англ</label>
                <input type="text" class="form-control" name="eng_city" value="{{$object->eng_city}}">
            </div>

            <div class="mb-3 mt-3 characteristick">
                <b style="font-size: 24px">Характеристики:</b> <br/>

                @if($regions->isNotEmpty())
                    <label for="recipient-name" class="col-form-label">Регион</label>
                    <select class="form-select" name="region_id" id="">
                        @foreach($regions as $region)
                            <option value="{{$region->id}}" @selected($object->region_id == $region->id)>{{$region->name}}</option>
                        @endforeach
                    </select>
                @endif

                @if($directions->isNotEmpty())
                    <label for="recipient-name" class="col-form-label">Направление</label>
                    <select class="form-select" name="direction_id" id="">
                        @foreach($directions as $direction)
                            <option value="{{$direction->id}}" @selected($object->direction_id == $direction->id)>{{$direction->name}}</option>
                        @endforeach
                    </select>
                @endif

                @if($highways->isNotEmpty())
                    <label for="recipient-name" class="col-form-label">Шоссе</label>
                    <select class="form-select" name="highway_id" id="">
                        @foreach($highways as $highWay)
                            <option value="{{$highWay->id}}" @selected($object->highway_id == $highWay->id)>{{$highWay->name}}</option>
                        @endforeach
                    </select>
                @endif

                <label for="recipient-name" class="col-form-label">Удаленность от МКАД, км</label>
                <input type="number" class="form-control" name="distance_mkad" value="{{$object->distance_mkad}}">

                <label for="recipient-name" class="col-form-label">Класс помещений</label>
                <input type="text" class="form-control" name="class_house" value="{{$object->class_house}}">

                <label for="recipient-name" class="col-form-label">Общая площадь, кв. м</label>
                <input type="text" class="form-control" name="all_square" value="{{$object->all_square}}">

                <label for="recipient-name" class="col-form-label">Свободная площадь, кв. м</label>
                <input type="text" class="form-control" name="free_square" value="{{$object->free_square}}">

                <label for="recipient-name" class="col-form-label">Минимальный блок, кв. м</label>
                <input type="text" class="form-control" name="min_square" value="{{$object->min_square}}">

                <label for="recipient-name" class="col-form-label">-высота, м</label>
                <input type="text" class="form-control" name="height" value="{{$object->height}}">

                <label for="recipient-name" class="col-form-label">-шаг колонн, м</label>
                <input type="text" class="form-control" name="column_pitch" value="{{$object->column_pitch}}">

                <label for="recipient-name" class="col-form-label">-нагрузка на пол, т/кв. м</label>
                <input type="text" class="form-control" name="floor_load" value="{{$object->floor_load}}">

                <label for="recipient-name" class="col-form-label">-освещение</label>
                <input type="text" class="form-control" name="lighting" value="{{$object->lighting}}">

                <label for="recipient-name" class="col-form-label">-освещение англ</label>
                <input type="text" class="form-control" name="eng_lighting" value="{{$object->eng_lighting}}">

                <label for="recipient-name" class="col-form-label">-система пожаротушения</label>
                <input type="text" class="form-control" name="fire_system" value="{{$object->fire_system}}">

                <label for="recipient-name" class="col-form-label">-система пожаротушения англ</label>
                <input type="text" class="form-control" name="eng_fire_system" value="{{$object->eng_fire_system}}">
            </div>

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="images[]" multiple>
                <label class="custom-file-label" for="customFile">Выберите файлы</label>
            </div>
            @if($images->isNotEmpty())
                <div class="d-flex flex-wrap">
                    @foreach($images as $image)
                        <div class="position-relative" style="width: 200px; margin-right: 10px;">
                            <img src="/storage/images/{{$image->name}}" alt="Изображение объекта" width="200" height="100">
                            <span style="color: white; background-color: black; font-size: 18px; padding: 6px; position: absolute; top: 0; right: 0; border-radius: 4px; cursor: pointer;" onclick="deleteImageRow_bd('{{route('admin.objects-images.destroy', $image->id)}}', 'delete')">
                                X
                            </span>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="mb-3 mt-3">
                <label for="recipient-name" class="col-form-label">Зум карты(в цифрах)</label>
                <input type="number" class="form-control" name="zoom" value="{{$object->zoom}}">

                <label for="recipient-name" class="col-form-label">Широта</label>
                <input type="text" class="form-control" name="x_coord" value="{{$object->x_coord}}">

                <label for="recipient-name" class="col-form-label">Долгота</label>
                <input type="text" class="form-control" name="y_coord" value="{{$object->y_coord}}">
            </div>

            <div class="modal-footer">
                <a class="btn btn-danger" href="{{route('admin.objects')}}">Назад</a>
                <button type="submit" class="btn btn-primary">Редактировать</button>
            </div>
        </form>
    </div>
@endsection

<script>

</script>
