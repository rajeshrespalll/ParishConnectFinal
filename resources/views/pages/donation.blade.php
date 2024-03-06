@extends('layouts.app', [
    'namePage' => 'Donation',
    'class' => 'sidebar-mini',
    'activePage' => 'donation',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-tasks h-100 d-flex flex-column">
          <div class="card-header">
            <h5 class="card-header">MONEY DONATION</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('donation.stores') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="CashAmount">Cash/E-Cash Amount</label>
                <input type="text" class="form-control" id="CashAmount" name="CashAmount">
              </div>
              <div class="form-group">
                <label for="ModeOfDonation">Mode of Cash Payment</label><br>
                <input type="radio" id="ModeOfDonation" name="ModeOfDonation" value="Gcash">
                <label for="ModeOfDonation">GCash</label><br>
                <input type="radio" id="ModeOfDonation" name="ModeOfDonation" value="Bank">
                <label for="ModeOfDonation">Bank Transfer</label><br>
                <input type="radio" id="ModeOfDonation" name="ModeOfDonation" value="Others">
                <label for="ModeOfDonation">Others</label>
              </div>
              <div class="form-group">
                <div class="form-group">
                    <label>Proof of Donation Cash/E-Cash</label><br>
                    <div>
                        <label for="ProofOfDonationCash" class="btn btn-primary" id="upload_proof_button">Upload File</label>
                        <input type="file" class="d-none" id="ProofOfDonationCash" name="ProofOfDonationCash">
                    </div>
                </div>
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-tasks h-100 d-flex flex-column">
          <div class="card-header">
            <h5 class="card-header">IN-KIND DONATION</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('donation.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="DescriptionDonation">Description of Donation</label>
                <input type="text" class="form-control" id="DescriptionDonation" name="DescriptionDonation">
              </div>
              <div class="form-group">
                <div class="form-group">
                    <label>Proof of Donation In-Kind</label><br>
                    <div>
                        <label for="ProofOfDonationInKind" class="btn btn-primary" id="upload_proof_button">Upload File</label>
                        <input type="file" class="d-none" id="ProofOfDonationInKind" name="ProofOfDonationInKind">
                    </div>
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
