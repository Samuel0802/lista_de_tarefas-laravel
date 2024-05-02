@foreach ($itens as $id => $tarefa)
<div class="row">
    <div class="col s12 m12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                
                <span class="card-title"><p style="font-size: 15px">{{ $tarefa }}</p></span>
                
                <div class="file-path-wrapper">
                    <form action="{{ route('home-destroy', ['id' => $id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="waves-effect red darken-4 btn" style="font-size: 15px"><i class="material-icons">delete</i></button>
                       
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>



@endforeach


