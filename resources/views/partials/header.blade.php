<div class="header">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand logo" href="/">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="LOGO" />
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="@if (Request::path() == 'activities') active @endif "><a href="/activities">Activity List</a></li>
                <li class="@if (Request::path() == 'memories') active @endif "><a href="/memories">Upload Date</a></li>
                <li class="@if (Request::path() == 'receipt') active @endif "><a href="/receipt">Receipt</a></li>
            </ul>
        </div>
    </nav>

</div>
