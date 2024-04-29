@foreach ($itens as $id => $tarefas)
<div class="row">
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{ $tarefas }}</span>
                <div class="file-path-wrapper">
                    {{-- <meta name='csrf-token' content=" {{ csrf_token() }}" />
                    <a href="'{{route('home')}}',{{$tarefas->id}}"><i class="material-icons">remove</i></a> --}}
                    </div>


            </div>
          
        </div>
    </div>
</div>
@endforeach
