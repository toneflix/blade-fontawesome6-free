<select {{$attributes->merge(['class' => ''])}}>
    @foreach($icons as $name => $path)
    <option value="{{$name}}"{{$selected===$name? ' selected' : ''}}>{{\Str::of($name)->replace('-', ' ')->ucfirst()}}</option>
    @endforeach
</select>