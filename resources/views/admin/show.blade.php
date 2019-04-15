@extends('admin.masterApp') 
@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Profil</h2>
        </div>
        <div class="card body">
            @foreach ($resume as $resume)


            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="{{$resume->name}}" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label ">Email</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="email " class="form-control " name="email" value="{{$resume->email}}" disabled>
                </div>
            </div>


            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label ">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="date" placeholder="Tanggal_lahir" class="form-control " name="tgl_lahir" value="{{$resume->tgl_lahir}}" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label ">Jenis Kelamin</label>
                <div class="col-sm-9">
                    <div>
                        <select name="jenis_kelamin" class="custom-select" disabled>
                                <option selected>{{$resume->jenis_kelamin}}</option>
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
                        <select name="status" class="custom-select" disabled>
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
                        <select name="agama" class="custom-select" disabled>
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
                    <input type="text" placeholder="NIK" class="form-control" name="nik" value="{{$resume->nik}}" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-9 ">
                    <textarea name="alamat" cols="137" rows="5" placeholder="Alamat" disabled>{{$resume->alamat}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="file" class="col-sm-2 col-form-label ">Curiculum Vitae</label>
                <div class="col-sm-9">
                    <input type="file" placeholder="CV" class="form-control" name="file" value="{{$resume->file}}" disabled>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection