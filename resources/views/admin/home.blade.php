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
                                @foreach($dataHomes as $dataHome)
                                    <tr>
                                        <th scope="row">{{$dataHome->id}}</th>
                                        <td>{{$dataHome->image}}</td>
                                        <td>{{$dataHome->title}}</td>
                                        <td>{{$dataHome->description}}</td>
                                        <td>{{$dataHome->action}}</td>
                                        <td>{{$dataHome->priority}}</td>
                                        <td>
                                            <a href="{{ route('edit_home', ['id' => $dataHome->id]) }}">
                                                edit
                                            </a>
                                            /
                                            <a href="{{ route('delete_home', ['id' => $dataHome->id]) }}">
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


