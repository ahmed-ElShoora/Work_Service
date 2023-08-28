@extends('layouts.admin')

@section('content')
    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة المميزات</h1>
                        <div class="top-right-button-container">
                            <a href="{{URL('/create-vantages')}}" class="btn btn-primary btn-lg top-right-button mr-1">انشاء مميزة</a>
                        </div>
                    </div>

                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">اسم الميزة</th>
                                <th scope="col" class="text-center">تعديل</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($deals as $deal)
                                <tr>
                                    <td class="text-center">{{$deal->name_ar}}</td>
                                    <td class="text-center"><a href="/edit-vantages-{{$deal->id}}" class="btn btn-outline-info" role="button">تعديل</a></td>
                                    <td class="text-center"><a href="/delete-vantages-{{$deal->id}}" class="btn btn-outline-danger" role="button">حذف</a></td>

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
