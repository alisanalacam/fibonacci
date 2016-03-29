@extends('layout')

@section('content')
        <div class="jumbotron">
            <h1>Fibonacci</h1>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-horizontal" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="count" class="col-sm-2 control-label">Sayı Giriniz</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="count" name="count" placeholder="Sayı">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Listele</button>
                    </div>
                </div>
            </form>

            @if(count($lists) > 0)
                @if($lastList = 0) @endif
                @foreach($lists as $key => $list)
                    <span class="badge"
                          @if($list > 0 && $lastList > 0)
                            style="font-size: {{ ($list / $lastList) + $key }}px"
                          @else
                            style="font-size: 2px"
                          @endif
                    >{{ $list }}</span>
                    @if($lastList = $list) @endif
                @endforeach
            @endif
    </div>
@endsection