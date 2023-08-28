@extends('layouts.admin')

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">التحكم بالصفحة الرئيسية</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                            <form dir="rtl" method="post" action="{{URL('/dashboard')}}" style="width: 75%" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الصورة</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" name="logo" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                        <input hidden type="text" name="logo_old" required value="{{$data->logo}}">
                                    </div>
                                </div>



                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">العنوان بالعربية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote" name="title_ar">{{$data->title_ar}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">العنوان بالانجليزية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote1" name="title_en">{{$data->title_en}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف بالعربية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote2" name="desc_ar">{{$data->desc_ar}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف بالانجليزية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote3" name="desc_en">{{$data->desc_en}}</textarea>
                                    </div>
                                </div>






                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">اسم الزر بالعربية</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required id="inputPassword" name="button_ar" value="{{$data->button_ar}}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">اسم الزر بالانجليزية</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required id="inputPassword" name="button_en" value="{{$data->button_en}}">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">لون الزر</label>
                                    <div class="col-sm-10">
                                        <input type="color" class="form-control" required id="inputPassword" name="button_color" value="{{$data->button_color}}">
                                    </div>
                                </div>



                                <button type="submit" class="btn btn-success">حفظ</button>
                            </form>

                        </div>
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
        $(document).ready(function() {
            $('#summernote2').summernote();
        });
        $(document).ready(function() {
            $('#summernote3').summernote();
        });
    </script>

@endsection
