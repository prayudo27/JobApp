@extends('layouts.masterApp') 
@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Profil</h2>
        </div>
        <div class="card body">
            @foreach ($resumes as $resume)
            <div class="form-group row">
                <form action="{{route('userUpdate',$currentUser->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal"
                    role="form">{{ csrf_field() }} {{method_field('PUT')}}
                    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="{{$resume->name}}">
                    </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label ">Email</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="email " class="form-control " name="email" value="{{$resume->email}}">
                </div>
            </div>


            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label ">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="date" placeholder="Tanggal_lahir" class="form-control " name="tgl_lahir" value="{{$resume->tgl_lahir}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label ">Jenis Kelamin</label>
                <div class="col-sm-9">
                    <div>
                        <select name="jenis_kelamin" class="custom-select">
                            <option selected="selected">{{$resume->jenis_kelamin}}</option>
                            <option value="laki_laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                            </select>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label ">Status Perkawinan</label>
                <div class="col-sm-9">
                    <div>
                        <select name="status" class="custom-select">
                            <option selected>{{$resume->status}}</option>
                            <option value="menikah">Menikah</option>
                            <option value="belum_menikah">Belum Menikah</option>
                            </select>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-9">
                    <div>
                        <select name="agama" class="custom-select">
                            <option selected>{{$resume->agama}}</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            </select>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="nik" class="col-sm-2 col-form-label ">Nomor Induk Kependudukan (NIK)</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="NIK" class="form-control" name="nik" value="{{$resume->nik}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-9 ">
                    <textarea name="alamat" cols="137" rows="5" placeholder="Alamat">{{$resume->alamat}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="file" class="col-sm-2 col-form-label ">Curiculum Vitae</label>
                <div class="col-sm-9">
                    <input type="file" placeholder="CV" class="form-control" name="file" value="{{$resume->file}}">
                </div>
            </div>
            @endforeach
            <div class="container">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection