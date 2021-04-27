@extends('layouts.app')

@section('content')
    @if($data['success'] === false)
        <div class="alert alert-danger mt-5" role="alert">
            No data available
        </div>
    @else
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    @if(count($data['data']) > 0)
                        @foreach($data['data'][0] as $key => $table_col)
                            @if(!is_array($table_col))
                                <th scope="col">{{$key}}</th>
                            @endif
                        @endforeach
                    @endif
                </tr>
                </thead>
                <tbody>
                    @foreach($data['data'] as $table_row)
                        <tr>
                            @foreach($table_row as $key => $item)
                                @if(!is_array($item))
                                    <td>{{$item}}</td>
                                @else
                                <tr>
                                    <td colspan="4">
                                        <table class="table ml-5">
                                            @include('sections.internal_table',['data' => $item])
                                        </table>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
    <div class="text-center">
        <a href="{{route('home')}}" class="btn btn-primary btn-lg " role="button">Home</a>
    </div>
@endsection
