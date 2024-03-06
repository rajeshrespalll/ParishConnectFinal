@extends('layouts.app', [
    'namePage' => 'Table List',
    'class' => 'sidebar-mini',
    'activePage' => 'table',
  ])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th class="text-right">
                    Salary
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-right">
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-right">
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-right">
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-right">
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td class="text-right">
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-right">
                      $78,615
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Jon Porter
                    </td>
                    <td>
                      Portugal
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-right">
                      $98,615
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card card-plain">
          <div class="card-header">
            <h4 class="card-title"> Table on Plain Background</h4>
            <p class="category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th class="text-right">
                    Salary
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-right">
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td class="text-right">
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td class="text-right">
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td class="text-right">
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td class="text-right">
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-right">
                      $78,615
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Jon Porter
                    </td>
                    <td>
                      Portugal
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td class="text-right">
                      $98,615
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


  <div class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Notifications Style</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-info">
              <span>This is a plain notification</span>
            </div>
            <div class="alert alert-info">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>This is a notification with close button.</span>
            </div>
            <div class="alert alert-info alert-with-icon" data-notify="container">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
              <span data-notify="message">This is a notification with close button and icon.</span>
            </div>
            <div class="alert alert-info alert-with-icon" data-notify="container">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span data-notify="icon" class="now-ui-icons ui-1_bell-53"></span>
              <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Notification states</h4>
          </div>
          <div class="card-body">
            <div class="alert alert-primary">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Primary - </b> This is a regular notification made with ".alert-primary"</span>
            </div>
            <div class="alert alert-info">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Info - </b> This is a regular notification made with ".alert-info"</span>
            </div>
            <div class="alert alert-success">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Success - </b> This is a regular notification made with ".alert-success"</span>
            </div>
            <div class="alert alert-warning">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
            </div>
            <div class="alert alert-danger">
              <button type="button" aria-hidden="true" class="close">
                <i class="now-ui-icons ui-1_simple-remove"></i>
              </button>
              <span>
                <b> Danger - </b> This is a regular notification made with ".alert-danger"</span>
            </div>
          </div>
        </div>
      </div>

@endsection
