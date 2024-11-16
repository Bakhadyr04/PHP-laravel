@extends('layout')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->date}}</th>
                <td>{{$article->name}}</td>
                <td>{{$article->desc}}</td>
                <td>
                    @php
                    echo \App\Models\User::findOrFail($article->user_id)->name;
                    @endphp
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection