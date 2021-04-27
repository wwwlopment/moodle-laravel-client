<thead class="thead-dark flex ">
<tr>
    @foreach($data[0] as $key => $table_col)
        @if(!is_array($table_col))
            <th scope="col">{{$key}}</th>
        @else
            @foreach($table_col as $key_2 => $value)
                <th scope="col">{{$key_2}}</th>
            @endforeach
        @endif
    @endforeach
</tr>
</thead>
<tbody>
@foreach($data as $table_row)
    <tr>
        @foreach($table_row as $item)
            @if(!is_array($item))
                <td>{{$item}}</td>
            @else
                @foreach($item as $value)
                    <td>{{$value}}</td>
                @endforeach
            @endif
        @endforeach
    </tr>
@endforeach
</tbody>
