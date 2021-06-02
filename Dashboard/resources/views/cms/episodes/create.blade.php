@extends('cms.template.body')

@section('body')

<ol class="breadcrumb">
  <li><a href="index.html">Home</a></li>
  <li class="active">Basic Layout</li>
</ol>


<form id="add" action="{{route('cms.episodes.store')}}">
  <div class="page-header">
    <div class="demo-nav-title">
      <div class="media">
        <div class="media-body">
          <div class="display-6">Create Episode of Anime</div>
          <p class="small text-muted">
            Type of Anime
          </p>
        </div>
      </div>
      <div class="pull-xs-right" role="toolbar">
        <button class="btn btn-success" type="submit">Save Data</button>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="panel-wrapper">
      <div class="panel">
        <div class="panel-body">
          <div class="row">

            <div class="col-md-4">
              <div class="form-group text-center" id="lfm" data-input="video" data-preview="holder">
                <label>Photo</label>
                <div id="holder" class="image_placeholder"></div>
                <div class="input-group">
                  <span class="input-group-btn">
                    <a class="btn btn-primary">
                      <i class="fa fa-picture-o"></i> Choose
                    </a>
                  </span>
                  <input id="video" class="form-control" type="text" name="video" readonly>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>

                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control">
                  </div>
                </div>

                <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label>Anime</label>
                    <select class="form-control" id="anime" name="anime">

                    </select>
                  </div>
                </div>


                <div class="col-xs-12">
              <div class="form-group">
                <label>More description: </label>
                <textarea id="summernote" data-plugin="summernote" name="description"></textarea>
              </div>
            </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</form>

@endsection

@section('script')
  <script type="text/javascript">
    setVideo('lfm', 'file');
    ajaxData('#anime', '{{route("cms.search.anime")}}');
  </script>
@endsection