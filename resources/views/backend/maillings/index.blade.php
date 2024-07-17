@extends('backend.index')

@section('content')
    @if($maillings->isNotEmpty())
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Почта</th>
                <th scope="col">Дата создания</th>
            </tr>
            </thead>
            <tbody>
            @foreach($maillings as $mailling)
                <tr>
                    <th scope="row">{{ $mailling->id }}</th>
                    <td>{{ $mailling->email }}</td>
                    <td>{{ $mailling->created_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h3 class="text-center">Здесь ещё нет тех кто подписался на рассылку</h3>
        </div>
    @endif

@endsection
