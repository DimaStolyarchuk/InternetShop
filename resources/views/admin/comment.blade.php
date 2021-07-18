@include('admin.header')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <th scope="col">#</th>
                            <th scope="col">Ім'я</th>
                            <th scope="col">Титулка</th>
                            <th scope="col">Коментарій</th>
                            <th scope="col">Активність</th>
                            <th scope="col">Преорітет</th>
                            <th scope="col">Редагування/Видалення</th>
                            </tr>
                            </thead>
                            @foreach($dataComments as $dataComment)
                                <tr>
                                    <th scope="row">{{$dataComment->id}}</th>
                                    <td>{{$dataComment->name}}</td>
                                    <td>{{$dataComment->title}}</td>
                                    <td>{{$dataComment->comment}}</td>
                                    <td>{{$dataComment->action}}</td>
                                    <td>{{$dataComment->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_comment', ['id' => $dataComment->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_comment', ['id' => $dataComment->id]) }}">
                                            delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




