<div id="page" class="flex wrap">
    <div id="content">
        <div class="box2">
            <style>
                .turngrid {
                  grid-template-columns: 50px 1fr 1fr 1fr 50px;
                  grid-template-rows: 50px;
                  grid-gap: 3px;
                  margin-bottom: 3px;
                }

              </style>

              <div class='px-6 py-3 m-2 border-8 border-gray-300' x-data="{

                    show: false,
                    selection_scenario: '{{$scenario}}',
                    scenarios: [
                        {
                        name: 'COMBAT PATROL',
                        options: [
                            'Incisive Attack',
                            'Outriders',
                            'Encircle'
                            ]
                        },
                        {
                        name: 'INCURSION',
                        options: [
                          'Divide and Conquer',
                          'Crossfire',
                          'Center Ground',
                          'Forward Push',
                          'Ransack',
                          'Shifting Front'
                         ]
                        },
                        {
                          name:'STRIKE FORCE',
                          options: [
                          'Retrieval Mission',
                          'Front-line Warfare',
                          'The Four Pillars',
                          'No Mans Land',
                          'Scorched Earth',
                          'Vital Intelligence'
                         ]
                        }

                    ],


                    }"
                  <br>


                    <div class="w-auto">
                        <label class="flex-1 block mb-2 text-xs font-bold tracking-wide text-indigo-400 uppercase" for="grid-first-name">
                            scenario
                        </label>
                        <select class="px-4 py-2 border rounded" x-model="selection_scenario" name='scenario'>
                            <option value={{'option'}}>--</option>
                            <template x-for="scenario in scenarios">
                                <optgroup :label="scenario.name">
                                    <template x-for="item in scenario.options" :key="item">
                                        <option x-text="item" :value="item"></option>
                                    </template>
                                </optgroup>
                            </template>
                        </select>

                    </div>
                  </div>

