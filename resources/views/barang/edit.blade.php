@extends('layouts.app')
@section('title', 'Edit Barang')
@section('content')
    <form action="{{route('barang.update', $edit->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Kategori</label>
            <select name="id_category" id="" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $cat)
                    <option {{$cat->id == $edit->id_category ? 'selected':''}} value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="">Nama Obat</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Masukkan Nama Obat" value="{{$edit->nama_barang}}">
        </div>
        <div class="form-group mb-3">
            <label for="">Satuan</label>
            <input type="text" class="form-control" name="satuan" placeholder="Masukkan Satuan Obat" value="{{$edit->satuan}}">
        </div>
        <div class="form-group mb-3">
            <label for="">Qty</label>
            <input type="number" class="form-control" name="qty" placeholder="Masukkan Qty Obat" value="{{$edit->qty}}">
        </div>
        <div class="form-group mb-3">
            <label for="">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga Obat" value="{{$edit->harga}}">
        </div>
        <div class="form-group mb-3">
            <input type="submit" class="btn btn-primary" value="Simpan">
            <input type="reset" class="btn btn-danger" value="Batal">
            <a href="{{url()->previous()}}" class="btn btn-success">Kembali</a>
        </div>
    </form>
@endsection
