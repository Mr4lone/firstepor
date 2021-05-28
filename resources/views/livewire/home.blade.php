<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js')}}" defer></script>
     <script src="{{ asset('js/bootstrap.js')}}" defer></script>
  
     @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel Livewire Crud - NiceSnippets.com</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('users')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    {{-- <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script> --}}
    {{-- <script>
        $(document).ready(function () {
            window.livewire.emit('show');
        });
    
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script> --}}
</body>
</html>