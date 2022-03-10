@foreach($items as $item)
    <div class="card  col-md-6">
            <h5 class="card-header">CustomerId: #{{$item['id']}}</h5>
            <div class="card-body">
                <p class="card-text">Number of calls within the same continent: {{$item['totalCallsContinent']}}</p>
                <p class="card-text">Total Duration of calls within the same continent: {{$item['totalDurationContinent']}}</p>
                <p class="card-text">Total number of all calls: {{$item['totalCalls']}}</p>
                <p class="card-text">The total duration of all calls: {{$item['totalDuration']}}</p>
            </div>
    </div>
@endforeach
