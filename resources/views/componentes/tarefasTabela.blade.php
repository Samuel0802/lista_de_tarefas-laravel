<!-- Form for deleting a task -->
@foreach ($itens as $id => $tarefa)
<div class="row">
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">{{ $tarefa }}</span>
                <div class="file-path-wrapper">

                    <form action="{{ route('home', ['id' => $itens->id]) }}" method="POST">
                        @csrf
                       
                        @method('DELETE')
                        <button type="submit"><i class="material-icons">Remove</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

