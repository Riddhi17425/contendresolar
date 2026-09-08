@include('layouts.frontheader')
@include('layouts.hero_section' , ['pageName' => 'Clientele'])


@php
    $clientsArray = $clients->toArray();
    $pattern = [3, 4]; 
    $index = 0;
    $patternIndex = 0;
@endphp

<section class="mt-100">
    <div class="container">
        <div class="clients_wrapper">

            @while ($index < count($clientsArray))
                @php
                    $chunkSize = $pattern[$patternIndex % count($pattern)];
                    $chunk = array_slice($clientsArray, $index, $chunkSize);
                @endphp
                
                <div class="clients_box">
                    @foreach ($chunk as $client)
                        <div>
                            <img src="{{ asset('public/client_image/' . $client['image']) }}" alt="{{  str_replace(['-', '_'],' ', pathinfo($client['image'], PATHINFO_FILENAME)) }}" class="img-fluid">
                        </div>
                    @endforeach
                </div>

                @php
                    $index += $chunkSize;
                    $patternIndex++;
                @endphp
            @endwhile

        </div>
    </div>
</section>

@include('layouts.frontfooter')