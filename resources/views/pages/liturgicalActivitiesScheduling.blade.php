@extends('layouts.app', [
    'namePage' => 'Liturgical Activities Scheduling',
    'class' => 'sidebar-mini',
    'activePage' => 'liturgicalActivitiesScheduling',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Schedule Now
                </div>
                <div class="card-body">
                    <form action="{{ route('liturgicalActivity.store') }}" method="POST">
                        @csrf
                        {{-- <div class="mb-3">
                            <label for="ActivityType">Activity Type</label>
                            <select name="ActivityType" id="ActivityType" class="form-control" required>
                                <option value="">Select Activity Type</option>
                                <option value="Baptism">Baptism</option>
                                <option value="Marriage">Marriage</option>
                                <option value="Communion">Communion</option>
                                <option value="Prayers">Prayers</option>
                            </select>
                        </div> --}}
                        {{-- <div class="mb-3">
                            <label for="ActivityType">Activity Type</label>
                            <input type="text" name="ActivityType" id="ActivityType" class="form-control" required>
                        </div> --}}
                        <div class="mb-3">
                            <label for="ActivityType">Activity Type</label>
                            <select name="ActivityType" id="ActivityType" class="form-control" required>
                                <option value="">Select Activity Type</option>
                                <option value="Baptism">Baptism</option>
                                <option value="Marriage">Marriage</option>
                                <option value="Communion">Communion</option>
                                <option value="Prayers">Prayers</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="ActivityName">Activity Name</label>
                            <input type="text" name="ActivityName" id="ActivityName" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="ActivityHost">Activity Host</label>
                            <input type="text" name="ActivityHost" id="ActivityHost" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="ActivityDescription">Activity Description</label>
                            <textarea name="ActivityDescription" id="ActivityDescription" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="ActivityDateTime">Activity Date and Time</label>
                            <input type="datetime-local" name="ActivityDateTime" id="ActivityDateTime" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });
</script>
@endpush
