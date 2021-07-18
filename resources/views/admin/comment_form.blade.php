@include('admin.header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <table class="table">
                            <div class="container-fluid">
                                <form class="form-horizontal" role="form" action="{{ route('save_comment') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ isset($dataComments->id) ? $dataComments->id : '' }}">

                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="email1">Ім'я</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="name" class="form-control" id="email1"
                                                       placeholder="Ім'я">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1">Титулка</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="title" class="form-control" id="email1"
                                                       placeholder="Титулка">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1">Коментарій</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="comment" class="form-control" id="email1"
                                                       placeholder="Коментарій">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email1">Активність</label>
                                            <div class="col-sm-9">
                                                <select name="action">
                                                    <option value="0" @if( isset($dataComments->action) && $dataComments->action == 0) selected @endif>No</option>
                                                    <option value="1" @if( isset($dataComments->action) && $dataComments->action == 1) selected @endif>Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1">Преорітет</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="priority" value="{{ $dataComments->priority ?? '' }}" class="form-control" id="cono1"
                                                       placeholder="Для кого?">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary">Відправити</button>
                                        </div>
                                    </div>
                                </form>
                                <a href="{{ route('admin_comment') }}" >НАЗАД</a>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






