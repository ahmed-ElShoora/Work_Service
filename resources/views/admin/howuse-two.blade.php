@extends('layouts.admin')
@section('content')

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">التحكم بالصفحة كيفية الاستخدام</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                            <form dir="rtl" method="post" action="{{URL('/admin-how-use')}}" style="width: 75%" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف بالعربية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote" name="desc_ar">{{\App\Models\Setting::getSetting()->howuse_ar}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف بالانجليزية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote1" name="desc_en">{{\App\Models\Setting::getSetting()->howuse_en}}</textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">حفظ</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>









        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>قائمة الاستخدامات</h1>
                        <div class="top-right-button-container">
                            <a href="{{URL('/create-how-use-two')}}" class="btn btn-primary btn-lg top-right-button mr-1">انشاء استخدام</a>
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
                                <th scope="col" class="text-center">اسم الاستخدام</th>
                                <th scope="col" class="text-center">تعديل</th>
                                <th scope="col" class="text-center">حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td class="text-center">{{$data->title_ar}}</td>
                                    <td class="text-center"><a href="/edit-how-use-two-{{$data->id}}" class="btn btn-outline-info" role="button">تعديل</a></td>
                                    <td class="text-center"><a href="/delete-how-use-two-{{$data->id}}" class="btn btn-outline-danger" role="button">حذف</a></td>
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
@section('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
        $(document).ready(function() {
            $('#summernote1').summernote();
        });
    </script>


@endsection
