@extends('cms.template.body')

@section('body')
<ol class="breadcrumb">
  <li><a href="index.html">Home</a></li>
  <li class="active">Basic Layout</li>
</ol>

<div class="page-header">
  <div class="demo-nav-title">
    <div class="media">
      <div class="media-body">
        <div class="display-6">animes</div>
        <p class="small text-muted">
          animes in Anime, Manga, Light Novel
        </p>
      </div>
    </div>
    <div class="pull-xs-right" role="toolbar">
      <a href="{{route('cms.animes.create')}}" class="btn btn-success" type="button">Add Data</a>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="panel-wrapper">
    <div class="panel">
      <div class="table-bar">
        <div class="form-inline">

          <form class="input-group" id="search">
            <input class="form-control" type="text" placeholder="Search by Name or Slug" name="search" aria-describedby="basic-addon2" autocomplete="off" value="{{app('request')->input('search')}}">
            <span id="basic-addon2" class="input-group-addon" >
              <i class="icon ion-search"></i>
            </span>
          </form>

          <div class="form-group pull-md-right">
            <label class="form-control-label">Filter: </label>
            <select class="form-control c-select form-control-sm" id="filter_data">
              <option value="0" disabled selected>--</option>
              <option value="1">Name (ASC)</option>
              <option value="2">Name (DESC)</option>
              <option value="3">Created at (ASC)</option>
              <option value="4">Created at (DESC)</option>
            </select>
          </div>

        </div>
      </div>
      <div class="responsive-nav">
        <table class="table">
          <thead class="thead-inverse">
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($animes as $anime)
              <tr>
                <td>{{$anime->name}}</td>
                <td>{{$anime->meta->slug}}</td>
                <td>{{$anime->created_at}}</td>
                <td>{{$anime->updated_at}}</td>
                <td>
                  <a class="btn btn-primary" href="{{route('cms.animes.edit', $anime->id)}}">
                    <i class="icon ion-edit"></i>
                  </a>
                  <form method="POST" action="{{route('cms.animes.destroy', $anime->id)}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger">
                      <i class="icon ion-close"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="table-bar">
        {{ $animes->appends(request()->input())->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    var currentPage = new URL(window.location.href);
    $('#filter_data')
    .val('{{!empty(request()->get('filter')) ? request()->get('filter') : 0}}')
    .change(function(value){
      currentPage.searchParams.set('filter', $(this).val());
      window.location.href = currentPage.toString();
    });
  </script>
@endsection
