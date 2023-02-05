<h1>update</h1>

  <div class="card">
    <div class="card-body">
        <form method="post" action="/update/{{ $data->id }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $data->name }}" class="form-control" placeholder="Enter Your Name"/>
        <label for="">Email</label>
        <input type="text" name="email" value="{{ $data->email }}"  class="form-control" placeholder="Enter Your Email"/>
        <label for="">Password</label>
        <input type="text" name="password" value="{{ $data->password }}"  class="form-control" placeholder="Enter Your Password"/><br>
        <input type="submit" name="submit" value="update" class="btn btn-success">
      </form>
    </div>
  </div>