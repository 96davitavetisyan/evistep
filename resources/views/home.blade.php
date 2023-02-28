@extends('layouts.app')

@section('content')
<div class="container">
    @if (\App\Models\User::where('id',\Illuminate\Support\Facades\Auth::id())->first()->is_admin == 1)
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h1>Create post</h1>

                <form action="/create" method="POST">

                    <div class="form-group">
                        <label for="title">Title <span class="require">*</span></label>
                        <input type="text" class="form-control" name="title" />
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea rows="5" class="form-control" name="description" ></textarea>
                    </div>


                    <div class="form-group">
                        <button type="submit" id = "dwd" class="btn btn-primary">
                            Create
                        </button>
                        <button class="btn btn-default">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>

        </div>
    @endif
</div>
@endsection
