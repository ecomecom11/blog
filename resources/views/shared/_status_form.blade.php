<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared._errors')
  {{ csrf_field() }}
  <textarea class="form-control" rows="3" placeholder="share your thought..." name="content">{{ old('content') }}</textarea>
  <div class="text-right">
      <button type="submit" class="btn btn-primary mt-3">Post</button>
  </div>
</form>