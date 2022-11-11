<x-app-layout>
        <div class="caixauploads">
        <div class="flex justify-center pb-1 pt-2" style="width: 100%">
            <form method="post">
                @csrf
                <div class="form-group">
                    <label for="Name" class="form-label">Nome</label>
                    <input type="text" name="moviename" id="moviename" class="form-control">
                </div>

                {{-- <select id='combo-serie' class="form-group">
                    <label for="Series" class="form-label">Series</label>
                    <input name="moviefile" id="moviefile" class="form-control">
                </select>
                </div> --}}

                <div class="form-group">
                    <label for="Arquivo" class="form-label">Arquivo</label>
                    <input name="moviefile" id="moviefile" class="form-control">
                </div>



                <button class="btn btn-primary mt-3">
                    Cadastrar
                </button>
            </form>
        </div>
        </div>
</x-app-layout>

<style scoped> 
    .caixauploads{
        width: 36rem;
        height: 16rem;
    }
</style>
