@extends('layouts.app')

@section('template_title')
    Cao Menu
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cao Menu') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cao-menus.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Co Menu</th>
										<th>Ds Menu</th>
										<th>Ds Pagina</th>
										<th>Ds Imagem</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($caoMenus as $caoMenu)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $caoMenu->co_menu }}</td>
											<td>{{ $caoMenu->ds_menu }}</td>
											<td>{{ $caoMenu->ds_pagina }}</td>
											<td>{{ $caoMenu->ds_imagem }}</td>

                                            <td>
                                                <form action="{{ route('cao-menus.destroy',$caoMenu->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cao-menus.show',$caoMenu->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cao-menus.edit',$caoMenu->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $caoMenus->links() !!}
            </div>
        </div>
    </div>
@endsection
