@extends('layouts.app', [
    'namePage' => 'Forums',
    'class' => 'sidebar-mini',
    'activePage' => 'forums',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Forum Discussions</h5>
                </div>
                <div class="card-body">
                    @foreach($forums as $forum)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h6 class="text">{{ $forum->user_name }}</h5> <!-- Display user's name -->
                                <p class="card-header">{{ $forum->comment }}</p>
                            </div>
                        </div>
                    @endforeach

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('forum.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="comment">Add a comment:</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
