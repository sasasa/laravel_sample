@extends('layouts.app')
@section('title', "Skills編集")

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-7">
      <form action="/skills/{{$skill->id}}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
          <label for="name">{{__('validation.attributes.skill.name')}}</label>
          <input class="form-control" type="text" name="name" id="name" value="{{old('name', $skill->name)}}">
          @error('name')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="type">{{__('validation.attributes.skill.type')}}</label>
          {{
          Form::select('type',
          $skill_types,
          old('type', $skill->type),
          ['placeholder' => '選択してください', 'id' => 'type', 'class' => 'form-control'])
          }}
          @error('type')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>

        <div class="form-group  d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection