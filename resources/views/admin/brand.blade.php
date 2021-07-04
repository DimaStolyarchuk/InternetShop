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
                            <th scope="col">Ціна</th>
                            <th scope="col">Модель</th>
                            <th scope="col">Активність</th>
                            <th scope="col">Преорітет</th>
                            <th scope="col">Редагування/Видалення</th>
                            </tr>
                            </thead>
                            @foreach($dataBrands as $dataBrand)
                                <tr>
                                    <th scope="row">{{$dataBrand->id}}</th>
                                    <td>{{$dataBrand->image}}</td>
                                    <td>{{$dataBrand->title}}</td>
                                    <td>{{$dataBrand->description}}</td>
                                    <td>{{$dataBrand->action}}</td>
                                    <td>{{$dataBrand->priority}}</td>
                                    <td>
                                        <a href="{{ route('edit_brand', ['id' => $dataBrand->id]) }}">
                                            edit
                                        </a>
                                        /
                                        <a href="{{ route('delete_brand', ['id' => $dataBrand->id]) }}">
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



