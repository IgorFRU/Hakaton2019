@extends('dashboard\layouts.app')
@section('content')
@php
    $count1 = 1;
    $count2 = 1;
@endphp
<div class="container">
    <div class="row justify-content-center">
        @if ( !$in_name->isEmpty() )
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">Совпадения в названиях товаров</div>
    
                    <div class="card-body">
                        <table class="table">
                                <thead>
                                  <tr>                                  
                                    <th scope="col">#</th>
                                    <th scope="col"><input type="checkbox" id="customCheckAll"></th>
                                    <th scope="col">Изображение</th>
                                    <th scope="col">Наименование</th>
                                    <th scope="col">Количество</th>
                                    <th scope="col">Резерв</th>
                                    <th scope="col">Свободно</th>
                                    <th scope="col">Стоимость</th>
                                    <th scope="col">Управление</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                      @forelse ($in_name as $good)
                                        <tr>
                                        <th scope="row">{{ $count1++ }}</th>
                                            <td><input type="checkbox" id="customCheck1"></td>
                                            <td>
                                                <div class="img_good">
                                                <img src="{{ asset('images/goods/')}}/{{ $good->image}}" alt="" class="rounded float-left img-thumbnail .img-fluid">
                                                </div>
                                            </td>
                                            <td><span class="font-weight-bold">{{ $good->product_name}}/{{ $good->manufacture->manufacture}}</span> - {{ $good->description }}</td>
                                            <td>{{ $good->quantity }}</td>
                                            <td>{{ $good->reserve }}</td>
                                            <td><span class="font-weight-bold">{{ $good->quantity - $good->reserve }}</span></td>
                                            <td>{{ $good->quantity }} руб.</td>
                                            <td>
                                                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                      @empty
                                          товаров нет
                                      @endforelse
                                  
                                </tbody>
                              </table>
                        
                    </div>
                </div>
            </div>  
        @endif

        @if ( !$in_description->isEmpty() )
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">Совпадения в описаниях товаров</div>
    
                    <div class="card-body">
                        <table class="table">
                                <thead>
                                  <tr>                                  
                                    <th scope="col">#</th>
                                    <th scope="col"><input type="checkbox" id="customCheckAll"></th>
                                    <th scope="col">Изображение</th>
                                    <th scope="col">Наименование</th>
                                    <th scope="col">Количество</th>
                                    <th scope="col">Резерв</th>
                                    <th scope="col">Свободно</th>
                                    <th scope="col">Стоимость</th>
                                    <th scope="col">Управление</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                      @forelse ($in_description as $good)
                                        <tr>
                                        <th scope="row">{{ $count2++ }}</th>
                                            <td><input type="checkbox" id="customCheck1"></td>
                                            <td>
                                                <div class="img_good">
                                                <img src="{{ asset('images/goods/')}}/{{ $good->image}}" alt="" class="rounded float-left img-thumbnail .img-fluid">
                                                </div>
                                            </td>
                                            <td><span class="font-weight-bold">{{ $good->product_name}}/{{ $good->manufacture->manufacture}}</span> - {{ $good->description }}</td>
                                            <td>{{ $good->quantity }}</td>
                                            <td>{{ $good->reserve }}</td>
                                            <td><span class="font-weight-bold">{{ $good->quantity - $good->reserve }}</span></td>
                                            <td>{{ $good->quantity }} руб.</td>
                                            <td>
                                                <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                      @empty
                                          товаров нет
                                      @endforelse
                                  
                                </tbody>
                              </table>
                        
                    </div>
                </div>
            </div>  
        @endif
        
    </div>
</div>
@endsection
