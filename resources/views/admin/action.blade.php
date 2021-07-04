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
                            <th scope="col">Зображення</th>
                            <th scope="col">Товар</th>
                            <th scope="col">Опис</th>
                            <th scope="col">Активність</th>
                            <th scope="col">Преорітет</th>
                            <th scope="col">Редагування/Видалення</th>
                            </tr>
                            </thead>
                            @foreach($dataActions as $dataAction)
                                <tr>
                                    <th scope="row">{{$dataAction->id}}</th>
                                    <td>{{$dataAction->image}}</td>
                                    <td>{{$dataAction->title}}</td>
                                    <td>{{$dataAction->description}}</td>
                                    <td>{{$dataAction->action}}</td>
                                    <td>{{$dataAction->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_action', ['id' => $dataAction->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_action', ['id' => $dataAction->id]) }}">
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




