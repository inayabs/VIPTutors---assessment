@extends('layout')

@section('content')
    <div style="min-width:1000px">
        <div class="col-12 flex justify-content-end">
            <a href="{{route('index')}}">
                <button class="btn btn-info">
                    Back
                </button>
            </a>
        </div>
        <div class="border mt-5 p-3">
            <div class="row">
                <div class="col">Name</div>
                <div class="col">{{$player->name}}</div>
            </div>
            <div class="row">
                <div class="col">Team</div>
                <div class="col">{{$player->team->name}}</div>
            </div>
            <div class="row">
                <div class="col">Age</div>
                <div class="col">{{$player->player_totals->age}}</div>
            </div>
            <div class="row">
                <div class="col">Games</div>
                <div class="col">{{$player->player_totals->games}}</div>
            </div>
            <div class="row">
                <div class="col">Games started</div>
                <div class="col">{{$player->player_totals->games_started}}</div>
            </div>
            <div class="row">
                <div class="col">Minutes played</div>
                <div class="col">{{$player->player_totals->minutes_played}}</div>
            </div>
            <div class="row">
                <div class="col">Field goals</div>
                <div class="col">{{$player->player_totals->field_goals}}</div>
            </div>
            <div class="row">
                <div class="col">Field goals attempted</div>
                <div class="col">{{$player->player_totals->field_goals_attempted}}</div>
            </div>
            <div class="row">
                <div class="col">Three points</div>
                <div class="col">{{$player->player_totals->getAttributeValue('3pt')}}</div>
            </div>
            <div class="row">
                <div class="col">Three points attempted</div>
                <div class="col">{{$player->player_totals->getAttributeValue('3pt_attempted')}}</div>
            </div>
            <div class="row">
                <div class="col">Two points</div>
                <div class="col">{{$player->player_totals->getAttributeValue('2pt')}}</div>
            </div>
            <div class="row">
                <div class="col">Two points attempted</div>
                <div class="col">{{$player->player_totals->getAttributeValue('2pt_attempted')}}</div>
            </div>
            <div class="row">
                <div class="col">Free throws</div>
                <div class="col">{{$player->player_totals->free_throws}}</div>
            </div>
            <div class="row">
                <div class="col">Free throws attempted</div>
                <div class="col">{{$player->player_totals->free_throws_attempted}}</div>
            </div>
            <div class="row">
                <div class="col">Offensive rebounds</div>
                <div class="col">{{$player->player_totals->offensive_rebounds}}</div>
            </div>
            <div class="row">
                <div class="col">Defensive rebounds</div>
                <div class="col">{{$player->player_totals->defensive_rebounds}}</div>
            </div>
            <div class="row">
                <div class="col">Assists</div>
                <div class="col">{{$player->player_totals->assists}}</div>
            </div>
            <div class="row">
                <div class="col">Steals</div>
                <div class="col">{{$player->player_totals->steals}}</div>
            </div>
            <div class="row">
                <div class="col">Blocks</div>
                <div class="col">{{$player->player_totals->blocks}}</div>
            </div>
            <div class="row">
                <div class="col">Turnovers</div>
                <div class="col">{{$player->player_totals->turnovers}}</div>
            </div>
            <div class="row">
                <div class="col">Personal fouls</div>
                <div class="col">{{$player->player_totals->personal_fouls}}</div>
            </div>
        </div>
        </div>
        </div>
    </div>

    </div>
@endsection