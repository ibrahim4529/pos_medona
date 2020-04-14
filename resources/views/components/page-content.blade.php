<div>
    <div class="page-inner">
        <div class="page-header">
            <h3 class="page-title">
                {{$title}}
            </h3>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href=""><i class="flaticon-home"></i></a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{route($resource.".index")}}">{{$title}}</a>
                </li>
            </ul>
        </div>
        {{$slot}}
    </div>
</div>
