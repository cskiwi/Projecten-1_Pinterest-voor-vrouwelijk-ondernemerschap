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
                    <li class="active"><a href="#" data-toggle="modal" data-target="#pinAddModal">Add pin <span class="fa fa-plus leftSpacingSmall"></span></a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle upperCase" data-toggle="dropdown">{{ Auth::user()->username  }} <span class="fa fa-bars leftSpacingSmall"></span></a>
                        <ul class="dropdown-menu text-right">
                            <li><a href="" data-toggle="modal" data-target=".bs-example-modal-sm">Profile <span class="fa fa-user leftSpacingSmall"> </span></a></li>
                            <li><a href="">Settings <span class="fa fa-wrench leftSpacingSmall"> </span></a></li>
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

<!-- Modal -->
<div class="modal fade" id="pinAddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add pin</h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-10">
                            <select id="Media-Type" class="form-control">
                                <option>Text</option>
                                <option>Tutorial</option>
                                <option>Image</option>
                                <option>Video</option>
                                <option>Offer</option>
                            </select>
                        </div>
                    </div>


                    <!-- types -->
                    <span id="type-text" class="type-media">
					<div class="form-group">
                        <label class="col-sm-2 control-label">Choose file</label>
                        <div class="col-sm-10">
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Only .jpg, .png, .gif, .bmp allowed.</p>
                        </div>
                    </div>
					</span>
                    <span id="type-tutorial" class="type-media">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </span>

                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Pin it, babe!</button>
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