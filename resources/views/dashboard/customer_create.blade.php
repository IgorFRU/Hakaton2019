@extends('dashboard\layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Добавление покупателя</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('dashboard.customer.store')}}" method="post">
                        @csrf            
                        @include('dashboard.partials.customer_create_form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
