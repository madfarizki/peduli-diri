@extends('layouts.master')
@section('title', 'Edit Catatan Perjalanan')

@section('content')
<div class="page-heading d-flex justify-content-between">
    <h3>Edit Catatan Perjalanan</h3>
    <a href="{{ route('travel-history.index') }}" class="btn btn-primary">Kembali</a>
</div>
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('travel-history.update', $history->id) }}" class="form form-horizontal" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Tanggal</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="date" id="tanggal" class="form-control" name="tanggal"
                                            placeholder="Tanggal" value="{{ $history->tanggal }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Jam</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="time" id="jam" class="form-control" name="jam"
                                            placeholder="Jam" value="{{ $history->jam }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Lokasi</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="lokasi" class="form-control" name="lokasi"
                                            placeholder="Lokasi" value="{{ $history->lokasi }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Suhu Tubuh (&deg;C)</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="suhu_tubuh" class="form-control" name="suhu_tubuh"
                                            placeholder="Suhu Tubuh" value="{{ $history->suhu_tubuh }}">
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('addon-script')

@endpush
