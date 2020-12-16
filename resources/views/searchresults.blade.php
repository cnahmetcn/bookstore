@extends('layouts.dashboard')

@section('searchform')
    <form action="/searchresults" method="GET" role="search">
        @csrf
    <div class="card my-4">
    <h5 class="card-header">Ara</h5>
    <div class="card-body">
        <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Ara...">
        <span class="input-group-append">
            <button class="btn btn-secondary" type="submit">Ara</button>
        </span>
        </div>
    </div>
    </div>
    </form>
@endsection

@section('content')
<div class="container">


<h2>Arama Sonuçları</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <thead>
                <tr>
                  <th>Kitap Adı</th>
                  <th>Yazar</th>
                  <th>Dil</th>
                  <th>Sayfa Sayısı</th>
                  <th>ISBN</th>
                  <th>Kategori</th>
                  <th>Yayın Evi</th>
                </tr>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $r)
        <tr>
            <td>{{$r->book_name}}</td>
            <td>{{$r->writer->writer_name}}</td>
            <td>{{$r->language}}</td>
            <td>{{$r->page_number}}</td>
            <td>{{$r->isbn}}</td>
            <td>{{$r->category->category_name}}</td>
            <td>{{$r->publisher->publisher_name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {!! $books->links() !!}
</div>
</div>
@endsection



