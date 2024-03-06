<div class="sidebar" data-color="orange">
    <div class="logo">
        <a class="simple-text logo-mini">
            <img src="{{ asset('assets/img/ParishConnectLogo.png') }}" alt="Logo" style="max-width: 45px; height: 30px;">
        </a>
        <a class="simple-text logo-normal" style="font-size: 18px;">
            {{ __('ParishConnect') }}
        </a>
    </div>

    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="@if ($activePage == 'home') active @endif">
                <a href="{{ route('home') }}">
                    <p>{{ __('Home') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'liturgicalActivitiesScheduling') active @endif">
                <a href="{{ route('liturgicalActivitiesScheduling') }}">
                    <p>{{ __('Liturgical Activities Scheduling') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'massSchedule') active @endif">
                <a href="{{ route('massSchedule') }}">
                    <p>{{ __('Mass Schedule') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'application') active @endif">
                <a href="{{ route('application') }}">
                    <p>{{ __('Application') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'resources') active @endif">
                <a href="{{ route('resources') }}">
                    <p>{{ __('Resources') }}</p>
                </a>
            </li>
            <li class="nav-item @if (in_array($activePage, ['financialreport', 'financialreport2'])) active @endif">
                <a data-toggle="collapse" href="#financialReportsSubMenu" class="collapsed" aria-expanded="false">
                    <p>{{ __('Financial Reports') }}</p>
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="financialReportsSubMenu">
                    <ul class="nav">
                        <li class="@if ($activePage == 'financialreport') active @endif">
                            <a href="{{ route('financialreport') }}">
                                <p style="padding-left: 20px;">{{ __('Financial Report For Money') }}</p>
                            </a>
                        </li>
                        <li class="@if ($activePage == 'financialreport2') active @endif">
                            <a href="{{ route('financialreport2') }}">
                                <p style="padding-left: 20px;">{{ __('Financial Report For In Kind') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="@if ($activePage == 'donation') active @endif">
                <a href="{{ route('donation') }}">
                    <p>{{ __('Donation') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'forum') active @endif">
                <a href="{{ route('forum') }}">
                    <p>{{ __('Forum') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'feedback') active @endif">
                <a href="{{ route('feedback') }}">
                    <p>{{ __('Feedback') }}</p>
                </a>
            </li>
            <li class="@if ($activePage == 'profile') active @endif">
                <a href="{{ route('profile.edit') }}">
                    <p> {{ __("User Profile") }} </p>
                </a>
            </li>
        </ul>
    </div>
</div>
