@extends('admin.app')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('admin.update', ['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card">
                    @if ($errors->any())
                    <div class="alert alert-danger m-3" role="alert">
                        @foreach ($errors->all() as $error)
                            <strong class="text-white">{{$error}}</strong>
                        @endforeach
                    </div>
                    @endif
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Buat Asset</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto"
                                enctype="multipart/form-data">Simpan</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informasi Asset</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Judul Asset</label>
                                    <input class="form-control" name="title" type="text" value="{{$data->title}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Harga Asset</label>
                                    <input class="form-control" type="number" name="price" value="{{$data->price}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Kategori Asset</label>
                                    <select class="form-control" name="category_id" id="exampleFormControlSelect2">
                                        <option>Pilih Kategori Asset</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" {{$category->id == $data->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Type Asset</label>
                                    <select class="form-control" name="type" id="exampleFormControlSelect2">
                                        <option>Pilih Type Asset</option>
                                        @foreach ($types as $type)
                                        <option value="{{$type->id}}" {{$type->id == $data->type_id ? 'selected' : ''}}>{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Pencipta</label>
                                    <select class="form-control" name="author_id" id="exampleFormControlSelect1">
                                        <option>Pilih Pencipta</option>
                                        @foreach ($authors as $author)
                                        <option value="{{$author->id}}" {{$author->id == $data->author_id ? 'selected' : ''}}>{{$author->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Penerbit</label>
                                    <select class="form-control" name="publisher_id" id="exampleFormControlSelect2">
                                        <option>Pilih Penerbit</option>
                                        @foreach ($publishers as $publisher)
                                        <option value="{{$publisher->id}}" {{$publisher->id == $data->publisher_id ? 'selected' : ''}}>{{$publisher->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Tanggal Realese</label>
                                    <input class="form-control" name="realese_date" value="{{$data->realese_date}}" type="date" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Deskripsi Asset</label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                        rows="3">{{$data->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Informasi Lain</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label text-danger">Jumlah Halaman (Untuk Buku)</label>
                                    <input class="form-control" name="page" type="number" value={{!empty($data->book->page) ? $data->book->page : 0}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label text-danger">ISBN (Untuk Buku)</label>
                                    <input class="form-control" type="text" name="isbn" value={{!empty($data->book->isbn) ? $data->book->isbn : 0}}>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Unggah Cover
                                        Asset</label>
                                    <input class="form-control" name="cover" type="file">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label text-danger">Unggah Asset (Untuk Buku)</label>
                                    <input class="form-control" name="asset" type="file">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="example-url-input" class="form-control-label text-danger">URL Asset (Untuk Buku)</label>
                                <input class="form-control" type="url" name="url" id="example-url-input">
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="footer pt-3 ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
                            document.write(new Date().getFullYear())

                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
