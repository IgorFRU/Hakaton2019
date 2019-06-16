@extends('dashboard\layouts.app')

@php
    $count = 1;
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">Заказы</div>

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
                                <th scope="col"># Заказа</th>
                                <th scope="col">Покупатель</th>
                                <th scope="col">Адрес</th>
                                <th scope="col">Дата</th>
                                <th scope="col">Статус</th>
                                <th scope="col">Подробнее</th>
                              </tr>
                            </thead>
                            <tbody>
                              @php
                                  $flag = false
                              @endphp
                                @forelse ($orders as $order)
                                @php
                                    $number = $order->number
                                @endphp
                                    @if ($order->number)
                                        
                                    @endif
                                    <tr>
                                        <th scope="row">{{ $count++ }}</th>                                          
                                    <td>{{ $order->number }}</td>
                                    <td>{{ $order->customer->customer }}</td>
                                    <td>
                                        @foreach ($addresses as $address)
                                            @if ($address->id == $order->address_id)
                                            {{ $address->address }}
                                            @endif
                                        @endforeach
                                        </td>
                                    <td>{{ $order->created_at }}</td>
                                    <td>{{ $order->status->status }}</td>
                                    <td><a href="{{route('dashboard.orders.show', ['id' => $order->id])}}">Подробнее..</a></td>
                                    </tr>
                                @empty
                                    нет заказов
                                @endforelse  
                                  
                              
                            </tbody>
                          </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
