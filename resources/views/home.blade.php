@extends('layouts.app', [
    'namePage' => 'Home',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/ParishConnect_Login.jpg",
])

@section('content')
  <div class="panel-header">
    <div class="header text-center">
      <h2 class="title">ParishConnect</h2>
      <p class="category">Our Lady of The Poor Parish (Ina ng mga Dukha Parish)
      </p>
    </div>
  </div>
  <div class="content">
    <div class="row">
        @foreach($events as $event)
        <div class="col-lg-4">
          <div class="card card-chart">
            <div class="card-header">
              <h5 class="card-category">{{ $event->EventDate }}</h5>
              <h4 class="card-title">{{ $event->EventTitle }}</h4>
            </div>
            <div class="card-body">
                <img src="{{ asset('assets/img/' . $event->EventImage) }}" alt="{{ $event->EventTitle }}" class="img-fluid">
            </div>
          </div>
        </div>
        @endforeach
    </div>
    <div class="row">
    <div class="col-md-6">
    <div class="card card-tasks">
        <div class="card-header">
            <h5 class="card-category">About Ina ng mga Dukha Parish</h5>
            <h4 class="card-title">Ina ng mga Dukha Parish Vision</h4>
            <p class="card-category">
                Isang Parokya ng Ina ng mga Dukha na binubuo ng nagkakaisang pamilya na may matibay na pananampalataya at namumuhay nang naayon sa kalooban ng Diyos.
            </p>
            <h4 class="card-title">Ina ng mga Dukha Parish Mission</h4>
            <table>
                <tr>
                    <td><strong>1. Education Ministry</strong></td>
                    <td>Tinatalaga namin ang aming sarili upang malmulat ang mga parokyano ukol sa kahalagahan ng mga sakramento at maisabuhay ang Salita ng Diyos.</td>
                </tr>
                <tr>
                    <td><strong>2. Service Ministry</strong></td>
                    <td>Manguna sa mga gawaing makapagpapataas sa kamalayang panlipunan tungo sa aktibong pakikilahok sa panlipunang pagpapaunlad at paglilingkod.</td>
                </tr>
                <tr>
                    <td><strong>3. Parish Youth Council</strong></td>
                    <td>Akayin ang mga kabataan sa buhay ispiritwal at palakasin ang kamalayang panlipunan at aktibong paglilingkod.</td>
                </tr>
                <tr>
                    <td><strong>4. Finance Ministry</strong></td>
                    <td>Imulat sa bawat parokyano ang tunay na kahulugan ng pagbabahagi ng kanilang panahon, talento at kayamanan sa gawain ng parokya.</td>
                </tr>
                <tr>
                    <td><strong>5. Family and Life Ministry</strong></td>
                    <td>Palakasin ang aktibong paglahok ng bawat pamilya sa mga gawaing pananampalataya, panlipunan at programang pang parokya.</td>
                </tr>
            </table>
        </div>

    </div>
</div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-category">All Persons List</h5>
            <h4 class="card-title">Mga Namumuno</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Name
                  </th>
                  <th>
                    Barangay
                  </th>
                  <th>
                    City
                  </th>
                  <th class="text-right">
                    Position
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Fr. Flordelito "Jay" Dador Jr.
                    </td>
                    <td>
                      Western Bicutan
                    </td>
                    <td>
                      Taguig
                    </td>
                    <td class="text-right">
                      Parish Priest
                    </td>
                  </tr>
                  <tr>
                    <td>
                      -----
                    </td>
                    <td>
                      Western Bicutan
                    </td>
                    <td>
                      Taguig
                    </td>
                    <td class="text-right">
                      -----
                    </td>
                  </tr>
                  <tr>
                    <td>
                      -----
                    </td>
                    <td>
                      Western Bicutan
                    </td>
                    <td>
                      Taguig
                    </td>
                    <td class="text-right">
                      -----
                    </td>
                  </tr>
                  <tr>
                    <td>
                      -----
                    </td>
                    <td>
                      Western Bicutan
                    </td>
                    <td>
                      Taguig
                    </td>
                    <td class="text-right">
                      -----
                    </td>
                  </tr>
                  <tr>
                    <td>
                      -----
                    </td>
                    <td>
                      Western Bicutan
                    </td>
                    <td>
                      Taguig
                    </td>
                    <td class="text-right">
                      -----
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
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
      demo.initDashboardPageCharts();

    });
  </script>
@endpush
