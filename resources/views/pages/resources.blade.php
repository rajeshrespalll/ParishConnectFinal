@extends('layouts.app', [
    'namePage' => 'Resources',
    'class' => 'sidebar-mini',
    'activePage' => 'resources',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Bible Study Materials (Online)
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($bibleStudyMaterials as $material)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body" style="height: 300px;">
                                        <h5 class="card-title" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $material->ResourceTitle }}</h5>
                                        <img src="{{ asset('assets/img/' . $material->ResourceImage) }}" class="card-img-top" style="height: 150px; object-fit: cover;" alt="{{ $material->ResourceTitle }}"></img>
                                        <a href="{{ $material->ResourceLink }}" class="btn btn-primary" target="_blank">View Material</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
