<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="{{ url('/') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">
                <img src="{{ asset('img/bt.png') }}" style="width: 30px; height: 30px;">
                {{ config('app.name') }}
            </h3>

        </a>
        <div class="navbar-nav w-100">
            <a href="{{ url('/') }}" class="nav-item nav-link active">
                <i class="fa fa-tachometer-alt me-2"></i>{{ config('app.name') }}
            </a>


            <div class="nav-item dropdown">

                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ url('/digits-percentages') }}" class="dropdown-item">Digits Percentages</a>
                    <a href="{{ url('/analyserv2') }}" class="dropdown-item">All In One</a>
                    <a href="{{ url('/market-analyser') }}" class="dropdown-item">Market Analyser</a>
                    <a href="{{ url('/rise-fall') }}" class="dropdown-item">Rise/Fall</a>
                    <a href="{{ url('/even-odd') }}" class="dropdown-item">Even/Odd</a>
                    <a href="{{ url('/v2-over-under') }}" class="dropdown-item">Over/Under V2</a>
                    <a href="{{ url('/over-under') }}" class="dropdown-item">Over/Under</a>
                </div>
            </div>

            <a href="{{ url('/dbot') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Charts</a>
            <a href="{{ url('/risk-management') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Risk
                Management</a>
            <a href="{{ url('/calculator') }}" class="nav-item nav-link"><i
                    class="fa fa-chart-bar me-2"></i>Calculator</a>
            <a href="{{ url('/bot') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Bots</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="far fa-file-alt me-2"></i>Strategies
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ url('/eo') }}" class="dropdown-item">Even/Odd Strategy</a>
                    <a href="{{ url('/ou') }}" class="dropdown-item">Over/Under Strategy</a>
                    <a href="{{ url('/md') }}" class="dropdown-item">Matches/Differs Strategy</a>
                    <a href="{{ url('/rf-strategies') }}" class="dropdown-item">Rise/Fall Strategy</a>
                </div>
            </div>

            <a href="{{ url('/admin') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Admin</a>
        </div>
    </nav>
</div>
