<x-app-layout>
    <div>   

        <div class="flex justify-center pb-1 pt-2" style="width: 100%">

            <div style="width: 40%; height: 32rem; box-shadow: 1px 10px 10px #999;">

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex caixaheader">

                    <div class="p-6 bg-white border-b border-gray-200">
                        My uploads
                    </div>

                    <div class="p-6" style="margin-left: auto"> 
                    <button>ADD BTN</button>
                    </div>
                </div>

            </div>

        </div>

        {{-- <div class="flex justify-center bold">
            1/1
        </div> --}}

    </div>

</x-app-layout>

<style>
    .caixaheader{
        border-bottom: 1px solid #ccc;
    }
</style>
