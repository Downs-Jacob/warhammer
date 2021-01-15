@extends ('layouts.layout')

@section('content')
<div class="flex">
    <div class="flex-2 px-4 py-2 m-2 text-center text-gray-700 bg-blue-200 rounded-lg">
        Your Statistics:
            <h1 class="font-extrabold"> Number of Games Played: {{$count}}</h1>
            <h1 class="font-bold"> Number of Games Won:  {{$victory_count_p1}}</h1>
            <h1 class="font-bold"> Percent Victory:  {{round($victory_count_p1/$count * 100, 2)}}%</h1>
                @foreach($p1_stats as $p1_stats)
                    <div class="flex-1 px-4 py-2 m-2 text-center text-gray-700 bg-blue-100">Games played as {{$p1_stats->player1_army}} : {{$p1_stats->army_count}}</div>
                @endforeach
    </div>
    <div class="flex-2 px-4 py-2 m-2 text-center text-gray-700 bg-blue-200 rounded-lg">
        Opponent Statistics:
            <h1 class="font-extrabold"> Number of Games Played: {{$count}}</h1>
            <h1 class="font-bold"> Number of Games Won:  {{$victory_count_p2}}</h1>
            <h1 class="font-bold"> Percent Victory:  {{round($victory_count_p2/$count * 100,2)}}%</h1>
                @foreach($p2_stats as $p2_stats)
                    <div class="flex-1 px-4 py-2 m-2 text-center text-gray-700 bg-blue-100">Games played as {{$p2_stats->player2_army}} : {{$p2_stats->army_count}}</div>
                @endforeach
    </div>
</div>
<div class="flex">
    <div class="flex-2 px-4 py-2 m-2 text-center text-gray-700 bg-blue-200 rounded-lg">
        <h1 class="font-extrabold"> Player 1 Amry <br> Victory Breakdown</h1>
                @foreach($army_wins_p1 as $army_wins_p1)
                    <div class="flex-1 px-4 py-2 m-2 text-center text-gray-700 bg-blue-100">{{$army_wins_p1->player1_army}} : {{$army_wins_p1->army_wins_p1}}</div>
                @endforeach
    </div>
    <div class="flex-2 px-4 py-2 m-2 text-center text-gray-700 bg-blue-200 rounded-lg">
        <h1 class="font-extrabold"> Player 2 Amry <br> Victory Breakdown</h1>
                @foreach($army_wins_p2 as $army_wins_p2)
                    <div class="flex-1 px-4 py-2 m-2 text-center text-gray-700 bg-blue-100">{{$army_wins_p2->player2_army}} : {{$army_wins_p2->army_wins_p2}}</div>
                @endforeach
    </div>



@endsection
