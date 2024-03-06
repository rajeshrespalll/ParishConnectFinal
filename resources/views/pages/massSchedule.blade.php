@extends('layouts.app', [
    'namePage' => 'Mass Schedule / Livestreaming',
    'class' => 'sidebar-mini',
    'activePage' => 'massSchedule',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
            @if(isset($massSchedules) && $massSchedules->isNotEmpty())
                @php
                    $groupedSchedules = $massSchedules->groupBy('MassDay');
                @endphp

                @foreach($groupedSchedules as $day => $schedules)
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{ $day }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($schedules as $massSchedule)
                                            <tr>
                                                <td>{{ $massSchedule->MassTimeSchedule }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No Mass Schedule available</p>
            @endif
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Mass Livestream</h4>
            </div>
            <div class="card-body">
                <div class="livestream-content">
                    <a href="https://www.facebook.com/InangmgaDukhaParish/live_videos" target="_blank" class="livestream-link">Watch Livestream (Click Here!)</a>
                </div>
                <img src="{{ asset('assets/img/LivestreamImage.jpg') }}" alt="Livestream Image" class="livestream-image">
            </div>
        </div>
    </div>
@endsection
