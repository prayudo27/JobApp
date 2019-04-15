@extends('layouts.masterApp') 
@section('content')

<div class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Aplikasi Status</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @foreach ($resumes as $resume)
                    <div class="container">
                        <h3>Status CV {{$resume->name}}</h3>
                        <h4>PT.JobApp</h4>
                        <h5>bandung</h5>
                    </div>

                    <div class="media-right">
                        <p class="text-right text-muted">
                            @if($currentUser->status_cv == 0)
                            <div class="alert alert-secondary"><strong>Unread</strong></div>
                            @elseif ($currentUser->status_cv == 1)
                            <button class="alert alert-success"><strong>Accepted</strong></button> @else
                            <button class="alert alert-danger"><strong>Rejected</strong></button> @endif
                        </p>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection