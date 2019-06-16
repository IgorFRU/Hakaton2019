@extends('dashboard\layouts.app')

@php
    $count = 1;
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Каталог товаров <button type="button" class="btn btn-primary pull-right">Добавить адрес</button></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table">
                            <thead>
                              <tr>                                  
                                <th scope="col">#</th>
                                <th scope="col">Адрес</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                                @forelse ($addresses as $address)
                                <tr>
                                        <th scope="row">{{ $count++ }}</th>
                                            <td>{{ $address->address }}</td>
                                        </tr>
                                @empty
                                    нет адресов
                                @endforelse
                                    
                                  
                              
                            </tbody>
                          </table>

                          <form action="{{route('dashboard.address.store')}}" method="post">
                                @csrf            
                                @include('dashboard.partials.address_form')
                            </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
