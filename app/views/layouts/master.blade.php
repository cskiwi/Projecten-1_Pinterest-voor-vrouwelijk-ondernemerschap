<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>@yield('pagetitle')
        | {{ Config::get('app.SiteName') }} </title>

    <meta name="description" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700|Dosis:200,600|Open+Sans:400,700" type="text/css" />
    {{ HTML::style('css/lumen/bootstrap.css') }}
    {{ HTML::style('css/lumen/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap-wysihtml5-0.0.2.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/default.css') }}

</head>

<body>
<div class="container">

    <nav class="navbar navbar-default navbar-static-top pvvoNavbar topOffset" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                {{Config::get('app.version') }}<a class="navbar-brand pvvoTitle" href="{{ URL::to('/') }}">WomanInterest</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="col-md-3 col-sm-5">
                    <ul class="nav navbar-nav">
                        {{ Form::open(array('url' => './boards/search', 'class'=>'navbar-form navbar-left', 'method' => 'get', 'role' => 'search', 'id' => 'search-form')) }}
                        <div class="input-group">
                            {{ Form::text('search-text', $value = null, array('placeholder' => 'Search boards...', 'class'=> 'form-control', 'required' => 'required')) }}
                            <span class="input-group-addon"><span class="fa fa-search"></span></span>
                        </div>
                        {{ Form::close() }}
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#" data-toggle="modal" data-target="#pinAddModal" class="pvvoPink">Add pin <span class="fa fa-plus leftSpacingSmall"></span></a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle upperCase" data-toggle="dropdown">{{ Auth::user()->username  }} <span class="fa fa-bars leftSpacingSmall"></span></a>
                        <ul class="dropdown-menu text-right">
                            <li><a href="{{ URL::to('users/profile/' . Auth::user()->id') }}" data-toggle="modal" data-target=".bs-example-modal-sm">Profile <span class="fa fa-user leftSpacingSmall"> </span></a></li>
                            <li><a href="{{ URL::to('admin/settings') }}">Settings <span class="fa fa-wrench leftSpacingSmall"> </span></a></li>
                            <li><a href="{{ URL::to('admin/logout') }}">Logout <span class="fa fa-shield leftSpacingSmall"> </span></a></li>
                        </ul>
                    </li>
                    <!--<li><a href="{{ URL::to('posts') }}">POSTS <span class="fa fa-comments leftSpacingSmall"></span></a></li>
                    <li><a href="{{ URL::to('boards') }}">BOARDS <span class="fa fa-cloud leftSpacingSmall"> </span> </a></li>-->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</div>


@yield('content')
<div class="row">
    <div class="container">
        <p>Copyright &copy; 2014 &mdash; It is in fact developed by a monkey.</p>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="pinAddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add pin</h4>
            </div>

            <div class="modal-body">


                {{ Form::open(array('url' => '../public/posts/add', 'class'=>'form-horizontal', 'role' => 'form', 'id' => 'addPin', 'files' => true)) }}

                <div id="validation-errors" class="alert alert-danger" hidden>
                    <p>Some errors occured</p>
                    <ul></ul>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Type</label>
                    <div class="col-sm-9">
                        {{ Form::select('media-type', array(
                        'Text' => 'Text',
                        'Image' => 'Image',
                        'Video' => 'Video',
                        'Tutorial' => 'Tutorial',
                        'Offer' => 'Offer',
                        ), null, array('id' => 'media-type', 'class' => 'form-control'))}}
                    </div>
                </div>

                <!-- Image Type -->
                    <span id="type-image" class="type-media">
						<div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                {{ Form::text('Image-title', null, array('class' => 'form-control', 'placeholder' => '')) }}
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-3 control-label">Choose file</label>
                            <div class="col-sm-9">
                                {{ Form::file('Image-file') }}
                                <p class="help-block">Only .jpg, .png, .gif, .bmp allowed.</p>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('Image-description', null, array('class' => 'form-control', 'rows' => '3')) }}
                            </div>
                        </div>
					</span>

                <!-- Tutorial & Text Type -->
                    <span id="type-text" class="type-media">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                {{ Form::text('Text-title', null, array('class' => 'form-control', 'placeholder' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('Text-description', null, array('class' => 'form-control wysi', 'rows' => '3')) }}
                            </div>
                        </div>
                    </span>

                <!-- Video Type -->
                    <span id="type-video" class="type-media">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                {{ Form::text('Video-title', null, array('class' => 'form-control', 'placeholder' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Link</label>
                            <div class="col-sm-9">
                                {{ Form::text('Video-link', null, array('class' => 'form-control', 'placeholder' => 'ex. YouTube or Vimeo')) }}
                            </div>
                        </div>
                    </span>

                <!-- Offer Type -->
					<span id="type-offer" class="type-media">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9">
                                {{ Form::text('Offer-title', null, array('class' => 'form-control', 'placeholder' => '')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Price €</label>
                            <div class="col-sm-9">
                                {{ Form::text('Offer-price', null, array('class' => 'form-control', 'placeholder' => '0.00')) }}
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-3 control-label">Choose image</label>
                            <div class="col-sm-9">
                                {{ Form::file('Offer-file') }}
                                <p class="help-block">Only .jpg, .png, .gif, .bmp allowed.</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Description</label>
                            <div class="col-sm-9">
                                {{ Form::textarea('Offer-description', null, array('class' => 'form-control wysi', 'rows' => '3')) }}
                            </div>
                        </div>
					</span>

                <div class="modal-footer">
                    {{ Form::submit('Close', array('class' => 'btn btn-default', 'data-dismiss' => 'modal')) }}
                    {{ Form::submit('Pin it, babe!', array('class' => 'btn btn-info')) }}
                </div>
                {{ Form::close() }}
            </div>



        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/wysihtml5-0.3.0.min.js') }}
{{ HTML::script('js/bootstrap-wysihtml5-0.0.2.min.js') }}
{{ HTML::script('js/AddPin.js') }}
@yield('scripts')

</body>
</html>