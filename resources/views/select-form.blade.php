<select {{$attributes->merge(['class' => ''])}}>
    @foreach($icons as $name => $path)
    <option value="{{$name}}"{{$selected===$name? ' selected' : ''}}>{{ucwords(\Str::of($name)->replace('.svg', '')->replace('-', ' '))}}</option>
    @endforeach
</select>