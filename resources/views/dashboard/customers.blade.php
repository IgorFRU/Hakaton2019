@extends('dashboard\layouts.app')

@php
    $count = 1;
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Покупатели <button type="button" class="btn btn-primary pull-right">Добавить</button></div>

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
                                <th scope="col">Наименование</th>
                                <th scope="col">Управление</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                                @forelse ($customers as $customer)
                                    <tr>
                                        <th scope="row">{{ $count++ }}</th>                                          
                                            <td>{{ $customer->customer }}</td>
                                            <td><a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash"></i></a></td>
                                    </tr>
                                @empty
                                    нет покупателей
                                @endforelse  
                                  
                                  {{ $customers->links() }}
                              
                            </tbody>
                          </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
