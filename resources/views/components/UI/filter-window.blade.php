<form class="filter-wrapper" action="{{route('object-list')}}">
    <div class="filter-window">
        <div class="filter-content p-4">
            <div class="filter-1 d-flex">
                <div class="button">
                    <button type="button" class="btn d-flex align-items-center active" id="rentBtn"><i class="fas fa-check" style="margin-right: 10px;"></i> {{__('main.type_room_1')}}</button>
                    <button type="button" class="btn d-flex align-items-center" id="saleBtn" style="margin-left: 10px; margin-right: 10px"><i class="fas fa-times" style="margin-right: 10px;"></i> {{__('main.type_room_2')}}</button>
                </div>
                <input type="hidden" name="price_type" id="price_type">
                <select class="form-select" name="type_room" id="">
                    <option value="1">{{__('main.type_room_3')}}</option>
                    <option value="2">{{__('main.type_room_4')}}</option>
                </select>
            </div>

            <div class="filter-2 input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">{{__('main.price')}}</span>
                </div>
                <div class="button">
                    <input type="number" class="form-control" name="price_min" placeholder="10 000">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2">-</span>
                    </div>
                    <input type="number" class="form-control" placeholder="20 000" name="price_max">
                </div>
                <div class="input-group-append">
                    <select class="form-select" id="inputGroupSelect01">
                        <option selected>{!! __('main.price_select_1') !!}</option>
                        <option value="1">{{__('main.price_select_2')}}</option>
                    </select>
                </div>
            </div>

            <div class="filter-3 d-flex mt-3 input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">{{__('main.square')}}</span>
                </div>
                <div class="button">
                    <input type="number" class="form-control" placeholder="6300" name="square_min">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2">-</span>
                    </div>
                    <input type="number" style="border-right: 1px solid #ced4da;border-radius: .25rem;" class="form-control" placeholder="700 000" name="square_max">
                </div>
                <input type="checkbox" id="isHave">
                <label class="btn" for="isHave">{{__('main.stellage')}}</label>

            </div>

            <div class="filter-4 d-flex mt-3">
                <select class="form-select" name="region" id="" @if($regions->isEmpty()) disabled @endif>
                    @if($regions->isNotEmpty())
                        @foreach($regions as $region)
                            <option value="{{$region->id}}">{{app()->currentLocale() == 'ru' ? $region->name : $region->eng_name}}</option>
                        @endforeach

                    @else
                        <option value="empty">{{ __('main.no_select') }}</option>
                    @endif
                </select>

                <select class="form-select" name="direction" id="" @if($directions->isEmpty()) disabled @endif>
                    <option value="">{{__('main.all_directions')}}</option>
                    @if($directions->isNotEmpty())
                        @foreach($directions as $direction)
                            <option value="{{$direction->id}}">{{app()->currentLocale() == 'ru' ? $direction->name : $direction->eng_name}}</option>
                        @endforeach

                    @else
                        <option value="empty">{{ __('main.no_select') }}</option>
                    @endif
                </select>

                <select class="form-select" name="highway" id="" @if($highways->isEmpty()) disabled @endif>
                    <option value="">{{__('main.all_highways')}}</option>
                    @if($highways->isNotEmpty())
                        @foreach($highways as $highway)
                            <option value="{{$highway->id}}">{{app()->currentLocale() == 'ru' ? $highway->name : $highway->eng_name}}</option>
                        @endforeach
                        <option value="">{{__('main.all_highways')}}</option>
                    @else
                        <option value="empty">{{ __('main.no_select') }}</option>
                    @endif
                </select>
            </div>

            <div class="input-group mb-3 mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">{{__('main.distance_mkad')}}</span>
                </div>
                <div class="button">
                    <input type="number" class="form-control" placeholder="4" name="distance_min">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2">-</span>
                    </div>
                    <input type="number" class="form-control" placeholder="92" name="distance_max">

                </div>
                <div class="input-group-append">
                    <span class="input-group-text">{{__('main.km')}}</span>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-apply-filter">{{__('main.show_results')}}</button>
</form>
