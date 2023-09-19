@php
    $label ??= ucfirst($name);
    $name ??= '';
    $type ??='text';
    $class ??= null;
    $value ??='';
@endphp


<div @class(['form-group', $class])>
   <label for="{{$name}}"><h3>{{$label}}</h3></label> 
   @if ($type ==="textarea"  )
       <textarea class="form-control  @error($name) is-invalid  @enderror"  name="{{$name}}" id="{{$name}}" >{{old($name,$value)}}</textarea>
   @else
      <input class="form-control @error($name) is-invalid  @enderror" $type = {{$type}} name="{{$name}}" id="{{$name}}" value="{{old($name,$value)}}" > 
   @endif
</div>

@error($name)
    <div class="invalid-feedback">
        {{$message}}
    </div>
@enderror
