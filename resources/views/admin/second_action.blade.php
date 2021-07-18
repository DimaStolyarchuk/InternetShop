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
                            <th scope="col">Друге зображення</th>
                            <th scope="col">Назва</th>
                            <th scope="col">Друга назва</th>
                            <th scope="col">Плюс</th>
                            <th scope="col">Ціна</th>
                            <th scope="col">Активність</th>
                            <th scope="col">Преорітет</th>
                            <th scope="col">Редагування/Видалення</th>
                            </tr>
                            </thead>
                            @foreach($dataSecondActions as $dataSecondAction)
                                <tr>
                                    <th scope="row">{{$dataSecondAction->id}}</th>
                                    <td>{{$dataSecondAction->image}}</td>
                                    <td>{{$dataSecondAction->secondimage}}</td>
                                    <td>{{$dataSecondAction->name}}</td>
                                    <td>{{$dataSecondAction->secondname}}</td>
                                    <td>{{$dataSecondAction->description}}</td>
                                    <td>{{$dataSecondAction->price}}</td>
                                    <td>{{$dataSecondAction->action}}</td>
                                    <td>{{$dataSecondAction->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_secondaction', ['id' => $dataSecondAction->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_secondaction', ['id' => $dataSecondAction->id]) }}">
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




