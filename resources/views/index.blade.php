@extends('layouts.dashboard')

@section('title','Anasayfa')

@section('categories')
    <div class="card my-4">
        <h5 class="card-header">Kategoriler</h5>
        <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
                @foreach ($categories as $c)
                <li>
                    <a href="#">{{$c->category_name}}</a>
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
        </div>
    </div>
@endsection

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
<h1 class="my-4">
    <small>Kitaplar</small>
  </h1>
<div class="container">
    <table class="table table-bordered mt-4">
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
        </thead>
        <tbody>
            @foreach ($books as $b)
            <tr>
                <td>{{$b->book_name}}</td>
                <td>{{$b->writer->writer_name}}</td>
                <td>{{$b->language}}</td>
                <td>{{$b->page_number}}</td>
                <td>{{$b->isbn}}</td>
                <td>{{$b->category->category_name}}</td>
                <td>{{$b->publisher->publisher_name}}</td>
              </tr>
            @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        {!! $books->links() !!}
    </div>
</div>
@endsection
