@extends('layout')

@section('content')
<div class="hero-section" style="position: relative; text-align: center; color: rgb(214, 16, 16);">
    <img src="{{ asset('@extends('layout')

    @section('content')
    <div class="hero-section" style="position: relative; text-align: center; color: white;">
        <img src="{{ asset('baseball.jpg') }}" alt="baseball.jpg" style="width: 100%; height: auto;">
        <div class="hero-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <h1 style="font-size: 4rem; font-weight: bold; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Welcome to the Baseball Fan Club</h1>
            <p style="font-size: 1.5rem; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">Your Ultimate Source for Baseball Stats, Players, and More</p>
            <a href="{{ route('players.index') }}" class="btn btn-primary btn-lg" style="background-color: #d9534f; border-color: #d43f3a; font-size: 1.2rem; margin-top: 1rem;">View Player List</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('path/to/player1.jpg') }}" class="card-img-top" alt="Player 1">
                    <div class="card-body">
                        <h5 class="card-title">Player Stats</h5>
                        <p class="card-text">Explore the statistics of your favorite players.</p>
                        <a href="{{ route('stats.index') }}" class="btn btn-outline-secondary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('path/to/schedule.jpg') }}" class="card-img-top" alt="Schedule">
                    <div class="card-body">
                        <h5 class="card-title">Game Schedule</h5>
                        <p class="card-text">Stay updated with the latest game schedules and results.</p>
                        <a href="{{ route('schedule.index') }}" class="btn btn-outline-secondary">Check Schedule</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('path/to/fan-forum.jpg') }}" class="card-img-top" alt="Fan Forum">
                    <div class="card-body">
                        <h5 class="card-title">Fan Forum</h5>
                        <p class="card-text">Join discussions with fellow baseball enthusiasts.</p>
                        <a href="{{ route('forum.index') }}" class="btn btn-outline-secondary">Join the Forum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    ') }}" alt="Baseball Image" style="width: 100%; height: auto;">
    <div class="hero-text" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <h1 style="font-size: 4rem; font-weight: bold; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Welcome to the Baseball Fan Club</h1>
        <p style="font-size: 1.5rem; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);">Your Ultimate Source for Baseball Stats, Players, and More</p>
        <a href="{{ route('players.index') }}" class="btn btn-primary btn-lg" style="background-color: #d9534f; border-color: #d43f3a; font-size: 1.2rem; margin-top: 1rem;">View Player List</a>
    </div>
</div>

<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('path/to/player1.jpg') }}" class="card-img-top" alt="Player 1">
                <div class="card-body">
                    <h5 class="card-title">Player Stats</h5>
                    <p class="card-text">Explore the statistics of your favorite players.</p>
                    <a href="{{ route('stats.index') }}" class="btn btn-outline-secondary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('path/to/schedule.jpg') }}" class="card-img-top" alt="Schedule">
                <div class="card-body">
                    <h5 class="card-title">Game Schedule</h5>
                    <p class="card-text">Stay updated with the latest game schedules and results.</p>
                    <a href="{{ route('schedule.index') }}" class="btn btn-outline-secondary">Check Schedule</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <img src="{{ asset('path/to/fan-forum.jpg') }}" class="card-img-top" alt="Fan Forum">
                <div class="card-body">
                    <h5 class="card-title">Fan Forum</h5>
                    <p class="card-text">Join discussions with fellow baseball enthusiasts.</p>
                    <a href="{{ route('forum.index') }}" class="btn btn-outline-secondary">Join the Forum</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
