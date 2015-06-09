<div class="panel-heading">Create an article</div>

<div class="panel-body">
  @include ('errors.list')         
  {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id ], 'data-remote' => 'true']) !!}        
    @include ('articles.form', ['subimtButtonText' => 'update Article'])
  {!! Form::close() !!}
</div>