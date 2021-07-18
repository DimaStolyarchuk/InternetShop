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
                            @foreach($dataAbouts as $dataAbout)
                                <tr>
                                    <th scope="row">{{$dataAbout->id}}</th>
                                    <td>{{$dataAbout->image}}</td>
                                    <td>{{$dataAbout->title}}</td>
                                    <td>{{$dataAbout->description}}</td>
                                    <td>{{$dataAbout->action}}</td>
                                    <td>{{$dataAbout->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_about', ['id' => $dataAbout->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_about', ['id' => $dataAbout->id]) }}">
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



