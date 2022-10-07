@extends('errors::minimal')

@section('name')
    @foreach($data as $row)
        @if ($loop->first)
            <tr>
                @foreach($row as $key => $value)
                    <th>{!! $key !!}</th>
                @endforeach
            </tr>
        @endif
        <tr>
            @foreach($row as $key => $value)
                @if(is_string($value) || is_numeric($value))
                    <td>{!! $value !!}</td>
                @else
                    <td></td>
                @endif
            @endforeach
        </tr>
    @endforeach
@endsection