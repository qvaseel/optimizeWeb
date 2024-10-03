@extends('layouts.main')
@section('content')
<div class="md:container md:mx-auto">
  <h1>список студентов</h1>
  @foreach($students as $student)
    <div class="flex justify-between">
      <img
        class="size-16"
        src="{{$student->path_img}}"
        alt="{{$student->lname}}"
      >
      <p>Имя: {{ $student->lname }}</p>
      <p>Фамилия: {{ $student->fname }}</p>
      <p>Возраст: {{ $student->age }} лет</p>
      <div>
        <form
          action="{{route('student.destroy', $student->id)}}"
          method="POST"  
        >
          @csrf
          @method('delete')
          <button type="submit">
            Удалить
          </button>
        </form>
      </div>
    </div>
  @endforeach

  {{ $students->links() }}
</div>
@endsection()