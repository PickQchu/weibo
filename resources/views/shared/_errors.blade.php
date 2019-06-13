@if (count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          <li>删除</li>
          @endforeach
      </ul>
  </div>
@endif
