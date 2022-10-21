@extends('layout')

@section('content')
    <div class="col-12 flex justify-content-end">
    <div class="col-3 mx-3">
            <select id="teamFilter" class="form-select" aria-label="Default select example">
                <option selected disabled>Filter by team</option>
                @foreach($teams as $team)
                    <option value="{{$team->code}}">{{$team->code}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-3 mx-3">
            <input type="text"  class="form-control"/>
        </div>
        <!-- <a href="{{ URL::route('export') }}"> -->
            <button class="btn btn-info">
                button for export
            </button>

        <!-- </a> -->
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
            <!-- <th scope="col">#</th> -->
            <th scope="col">Name</th>
            <th scope="col">Jersy #</th>
            <th scope="col">Position</th>
            <th scope="col">Height</th>
            <th scope="col">Weight</th>
            <th scope="col">DOB</th>
            <th scope="col">Nationality</th>
            <th scope="col">Years exp</th>
            <th scope="col">College</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <!-- <td>{{$player->id}}</td> -->
                    <td>{{$player->name}}</td>
                    <td>{{$player->number}}</td>
                    <td>{{$player->pos}}</td>
                    <td>{{$player->height}}</td>
                    <td>{{$player->weight}}</td>
                    <td>{{$player->dob}}</td>
                    <td>{{$player->nationality}}</td>
                    <td>{{$player->years_exp}}</td>
                    <td>{{$player->college}}</td>
                    <td>
                        <a href="{{ URL::route('view', $player->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        <div class="ml-auto">
            {{ $players->links() }}
        </div>
    </div>
    </div>
</div>



@endsection()

@section('scripts')
<script type="text/javascript">
    $('#teamFilter').on('change',function(e){
        $.ajax({
         type:'POST',
         url:'/filter',
         data: {
        "_token": "{{ csrf_token() }}",
        "key": e.target.value
        },
         success:function(data){
            console.log(data);
         }
      });
    });
</script>
@endsection