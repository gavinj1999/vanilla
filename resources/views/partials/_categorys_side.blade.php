<div class="col col-sm-3">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicons glyphicons-folder-close">
                            </span>Categories</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                 <ul>
@foreach($categories as $category)
                         <li><a href="{{ $category->url }}">{{ $category->name }}</a></li>
    @endforeach
                 </ul>
                    </table>
                </div>
            </div>
        </div>

        <div class="panel panel-default">

            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicons glyphicons-folder-close">
                            </span>Categories</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td style="border-top:none;">
                                <a href="#">Cat 1</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Cat 2</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Cat 3</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="panel panel-default">

            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicons glyphicons-folder-close">
                            </span>Categories</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td style="border-top:none;">
                                <a href="#">Cat 1</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Cat 2</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Cat 3</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="panel panel-default">

            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#"><span class="glyphicons glyphicons-folder-close">
                            </span>Information</a>
                </h4>
            </div>
        </div>

    </div>
</div>