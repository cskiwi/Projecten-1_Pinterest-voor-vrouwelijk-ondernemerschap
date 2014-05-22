<div class="panel panel-default item" date="{{ $pin->created_at }}">

    <div class="hoverContainer">
        @if($pin->base()->type == 'Image')
        <div class="panel-article-header">
            <a class="pvvoThumbUrl" href="#">
                {{ HTML::image(asset('img/' . $pin->base()->imgLocation), $pin->base()->title , array('class' => 'img-responsive pvvoThumbImg')) }}
            </a>

        </div>
        @endif

        @if($pin->base()->type == 'Text')
        <div class="panel-body">
            <div class="pvvoStreamBody">
                <p>
                    <strong>{{ $pin->base()->title }}</strong>
                </p>
                {{ str_limit($pin->base()->description, $limit = 300, $end = '...') }}
            </div>
        </div>

        @endif

        @if($pin->base()->type == 'Offer')
        <div class="panel-article-header">
            <a class="pvvoThumbUrl" href="#">
                {{ HTML::image(asset('img/' . $pin->base()->imgLocation), $pin->base()->title , array('class' => 'img-responsive pvvoThumbImg')) }}
            </a>

        </div>
        <div class="panel-body">

            <div class="pvvoStreamBody">
                <p class="">
                    <strong>{{ $pin->base()->title }}</strong>
                </p>
                <p>{{ str_limit($pin->base()->description, $limit = 300, $end = '...') }}</p>
            </div>

        </div>

        @endif

        @if($pin->base()->type == 'Video')
        <iframe class="pvvoStreamVideo" width="100%" src="{{ $pin->description }}" frameborder="0"></iframe>
        @endif
        <a class="hoverCaption" href="{{ URL::to('/pins/detail/' . $pin->id)}}">
            View pin
        </a>

    </div>

    <div class="well well-sm wellpinBoard clearfix">

        <img class="media-object pull-left" src="@if ($pin->user->avatar) {{ asset('avatar/' .  $pin->user->avatar) }} @else http://placehold.it/40x40 @endif" width="40" height="40" /> <span class="pull-left avatarName"><a href="{{ URL::to('/users/profile/' . $pin->user->id)}}">{{ $pin->user->viewName() }}</a> &dash; <a href="{{ URL::to('/boards/detail/' . $pin->board->id)}}">{{ $pin->board->title }}</a></span>

    </div>

    <div class="panel-footer">
        <div class="btn-group btn-group-xs btn-group-justified pinBtns">

            <a href="#" class="btn favorite" data="{{$pin->id}}">
                <span class="fa fa-star rightSpacingSmall @if($pin->FavoriteUser()) pvvoPink @endif"></span> <span class="count @if($pin->FavoriteUser()) pvvoPink @endif">{{ count($pin->favorites) }}</span>
            </a>

            <a class="btn comment">
                <span class="fa fa-comment rightSpacingSmall"></span> <span class="count">{{ count($pin->base()->comments) }}</span>
            </a>

            @if($pin->base()->type == 'Offer')
            <a class="btn buy">
                <span class="fa fa-euro rightSpacingSmall"></span> {{ $pin->base()->price }} -  BUY
            </a>
            @else
            <a class="btn repin" data="{{$pin->id}}">
                <span class="fa fa-retweet rightSpacingSmall"></span> pin
            </a>
            @endif

        </div>
    </div>
</div>

