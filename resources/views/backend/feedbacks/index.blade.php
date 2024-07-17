@extends('backend.index')

@section('content')
    @if($feedbacks->isNotEmpty())
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Тема письма</th>
                <th scope="col">Описание</th>
                <th scope="col">Дата создания</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedbacks as $feedback)
                <tr>
                    <th scope="row">{{ $feedback->id }}</th>
                    <td><a href="{{route('admin.feedbacks.show', $feedback->id)}}">{{ $feedback->name }}</a></td>
                    <td>{{ $feedback->title }}</td>
                    <td>{{\Illuminate\Support\Str::limit($feedback->description, 400)}}</td>
                    <td>{{ $feedback->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-center">Здесь ещё нет обратной связи</h3>
        </div>
    @endif

@endsection
