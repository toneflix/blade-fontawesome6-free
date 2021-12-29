<select {{$attributes->merge(['class' => ''])}}>
    @foreach($icons as $name => $path)
    <option value="{{$name}}">{{$name}}</option>
    @endforeach
</select>