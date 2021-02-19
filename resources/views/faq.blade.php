@extends ('layouts.layout')

@section('content')
    <div class="px-14 container w-1/2 ">
            <h2 class="col-start-2 pb-2 pt-2 font-bold text-2xl">1.) What is this website?</h2>
            <p class="text-justify">
                Scoretracker.com is a website for keeping a record of your games of warhammer 40k, 9th edition. Not only does this website store the information you provide for each
                game of Warhammer 40k 9th Edition that you play, it also keeps track of some pertenent statistics.
            </p>
        <h2 class="col-start-2 pb-2 pt-2 font-bold text-2xl">2.) How do I get started?</h2>
            <p class="text-justify">
                The first step is to register as a user with the website. Once you have a login, you can start to record games of 40k 9th editionm that you have played! Record a Game by clicking
                on the "Record Game" button in the navigation bar. Be aware that you must fill out all fields to save the game, but you can always edit the game in the future if you made a mistake
                or filled a field with a placeholder.
            </p>
            <div>
                <img src="/images/Record_Game.jpg"
                    alt=""
                    class="mb-2 mt-6 px-10"
                >
            </div>
        <h2 class="col-start-2 pb-2 pt-2 font-bold text-2xl">3.) How to I record my games? </h2>
            <p class="text-justify">
                The form for recording games should be fairly intuitive. Simply fill out all the information of the game you played and press the button at the bottom of
                the form aptly named "End This Game and Add to Archive." It is important to know that you must fill the Scenario,
                Description, Player Names, and Army Names fields in order for the game to properlly be saved into the archive. Do not worry, though, each game can be edited
                later if you discovered any errors with your recording.
            </p>
        <h2 class="col-start-2 pb-2 pt-2 font-bold text-2xl">4.) How do I view my recorded games </h2>
            <p class="text-justify">
                In the navigation bar you will see "Archive," this is where all your games will be saved. The archive is ordered from the last game you played to the first game
                you played. The Archive page will show both the ID number of the game, as well as the date the game was recorded.
            </p>
            <div>
                <img src="/images/archive.jpg"
                    alt=""
                    class="mb-2 mt-6 px-10"
                >
            </div>
            <p class="text-justify">
                By clicking on one of the games you can view the game and even edit any of the fields that you previously entered.
            </p>
        <h2 class="col-start-2 pb-2 pt-2 font-bold text-2xl">5.) How do I edit my recorded games </h2>
            <p class="text-justify">
                First, you need to go to the "Archive" of your recorded games and click on the ID or Date of the game you wish to edit. Once you see the game you will see a button at the bottom
                that says "Edit Game." Click this and you will open the game for editing.
            </p>
            <div>
                <img src="/images/edit.jpg"
                    alt=""
                    class="mb-2 mt-6 px-10"
                >
            </div>
            <p class="mb-5 text-justify">
                Once in the edit window of the game you can change any or all of the fields that have been saved. Unfotunately at this time, secondary objectives are not saved
                into the archive. Once complete, click "submit" and your game will be updated. You will redirected to the view window of that game!
            </p>
        <h2 class="col-start-2 pb-2 pt-2 font-bold text-2xl">6.) How do I make bug reports or contact the creator! </h2>
            <p class="text-justify">
                If you go to the homepage of this website you will see a link for "contact" at the bottom. Click on that and fill out the form. This will send
                an email to the creator!
            </p>

    </div>
    <div class="mt-8 mb-8">
        @include('_footer')
    </div>

@endsection
