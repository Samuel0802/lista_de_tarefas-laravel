<div class="row cont">
    <form method="POST" action="{{route('home')}}">
      @csrf
        <div class="file-field input-field" >
            <button class="btn waves-effect waves-light pulse title"  type="submit">Criar
                
              </button>
          <div class="file-path-wrapper">
            <input class="file-path validate" name="tarefas"  style="color: white" type="text">
          </div>
        </div>
      </form>
  </div>