@extends('layouts.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">البريد الالكتروني</th>
                                <th scope="col" class="text-center">الاسم الاول</th>
                                <th scope="col" class="text-center">الاسم الثاني</th>
                                <th scope="col" class="text-center">التعليق</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td class="text-center">{{$data->email}}</td>
                                    <td class="text-center">{{$data->first_name}}</td>
                                    <td class="text-center">{{$data->second_name}}</td>
                                    <td class="text-center">{{$data->comment}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </main>

@endsection
