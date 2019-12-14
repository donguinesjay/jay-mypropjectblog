@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Articles')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Articles</h4>
            <p class="card-category">Articles ko ni</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Title
                  </th>
                  <th>
                    Body
                  </th>
                  <th>
                    Created At
                  </th>
                  <th>Author</th>
                </thead>
                <tbody>

                  @foreach($articles as $article)
                    <tr>
                      <td>{{ $article->title }}</td>
                      <td>{{ $article->body }}</td>
                      <td>{{ $article->created_at }}</td>
                      <td>{{ $article->author->name }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection