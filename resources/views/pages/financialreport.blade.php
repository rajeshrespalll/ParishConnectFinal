@extends('layouts.app', [
    'namePage' => 'Resources',
    'class' => 'sidebar-mini',
    'activePage' => 'financialreport',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Financial Report (Money)
                </div>
                <div class="card-body d-flex flex-wrap">
                    @foreach($donations as $donation)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body" style="height: 300px;">
                                <h5 class="card-title" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Cash Amount: <span>{{ $donation->CashAmount }}</span></h5>
                                <h5 class="card-title" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Mode of Donation: <span>{{ $donation->ModeOfDonation }}</span></h5>
                                <img src="{{ asset('assets/img/' . $donation->ProofOfDonationCash) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
