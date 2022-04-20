<x-layout>
    <div class="container-fluid">
        <div class="row vh-100 align-items-center">
            <div class="col-12">
                <h1>Welcome to myhost</h1>
            </div>
        </div>
    </div>

    {{-- @if(Session::has('message'))
        <div id="toast-6" class="toast-box toast-bottom tap-to-close">
            <div class="in">
                <div class="text">
                    {{Session::get('message')}}
                </div>
            </div>
        </div>
    @endif --}}
</x-layout>
