@extends('dashboard\layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Dashboard settings</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('dashboard.settings.store')}}" method="post">
                        @csrf            
                        @include('dashboard.partials.settings_form')
                    </form>
                    <form action="{{route('dashboard.settings.destroy')}}" method="post">
                        @csrf            
                        @include('dashboard.partials.settings_form_destroy')
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Регистрационные данные</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('dashboard.user_data.store')}}" method="post">
                        @csrf            
                        @include('dashboard.partials.user_data_form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
