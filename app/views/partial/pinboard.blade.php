<div class="panel panel-default item" date="{{ $pin->created_at }}">

    <div class="hoverContainer">
        @if($pin->type == 'Image')
        <div class="panel-article-header">
            <a class="pvvoThumbUrl" href="#">
                {{ HTML::image(asset('img/' . $pin->imgLocation), $pin->title , array('class' => 'img-responsive pvvoThumbImg')) }}
            </a>

        </div>
        @endif

        @if($pin->type == 'Text')
        <div class="panel-body">
            <div class="pvvoStreamBody">
                <p>
                    <strong>{{ $pin->title }}</strong>
                </p>
                {{ str_limit($pin->description, $limit = 300, $end = '...') }}
            </div>
        </div>

        @endif

        @if($pin->type == 'Offer')
        <div class="panel-article-header">
            <a class="pvvoThumbUrl" href="#">
                {{ HTML::image(asset('img/' . $pin->imgLocation), $pin->title , array('class' => 'img-responsive pvvoThumbImg')) }}
            </a>

        </div>
        <div class="panel-body">

            <div class="pvvoStreamBody">
                <p class="">
                    <strong>{{ $pin->title }}</strong>
                </p>
                <p>{{ str_limit($pin->description, $limit = 300, $end = '...') }}</p>
            </div>

        </div>

        @endif

        @if($pin->type == 'Video')
        <iframe class="pvvoStreamVideo" width="100%" src="{{ $pin->description }}" frameborder="0"></iframe>
        @endif
        <a class="hoverCaption" href="{{ URL::to('/pins/detail/' . $pin->id)}}">
            View pin
        </a>

    </div>

    <div class="panel-footer">
        <div class="btn-group btn-group-xs btn-group-justified pinBtns">

            <a href="#" class="btn favorite" data="{{$pin->id}}">
                <span class="fa fa-star rightSpacingSmall @if($pin->FavoriteUser()) pvvoPink @endif"></span> <span class="count @if($pin->FavoriteUser()) pvvoPink @endif">{{ count($pin->favorites) }}</span>
            </a>

            <a class="btn comment">
                <span class="fa fa-comment rightSpacingSmall"></span> <span class="count">{{ count($pin->comments) }}</span>
            </a>

            @if($pin->type == 'Offer')
            <a class="btn repin">
                <span class="fa fa-euro rightSpacingSmall"></span> {{ $pin->price }} -  BUY
            </a>
            @else
            <a class="btn repin" data-toggle="modal" data-target="#repinModal">
                <span class="fa fa-retweet rightSpacingSmall"></span> pin
            </a>
            @endif

        </div>
    </div>
</div>

