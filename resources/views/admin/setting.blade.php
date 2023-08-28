@extends('layouts.admin')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <h5 class="mb-4">اعدادات الموقع</h5>


                    <div class="card mb-4">
                        <div class="card-body">
                            <form dir="rtl" method="post" action="{{URL('/setting')}}" style="width: 75%" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">arاسم الموقع</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required id="inputPassword" name="title_ar" value="{{$data->title_ar}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">enاسم الموقع</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required id="inputPassword" name="title_en" value="{{$data->title_en}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">شعار الموقع</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" id="formFile" name="logo" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                        <input hidden type="text" name="logo_old" required value="{{$data->logo}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">رابط التطبيق علي جوجل</label>
                                    <div class="col-sm-10">
                                        <input type="url" name="google_link" required class="form-control" id="inputPassword" value="{{$data->google_link}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">رابط التطبيق علي ابل</label>
                                    <div class="col-sm-10">
                                        <input type="url" name="apple_link" required class="form-control" id="inputPassword" value="{{$data->apple_link}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف فاتصل بنا بالانجليزية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote" name="desc_en">{{$data->desc_en}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-2 col-form-label">الوصف فاتصل بنا بالعربية</label>
                                    <div class="col-sm-10">
                                        <textarea id="summernote1" name="desc_ar">{{$data->desc_ar}}</textarea>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">ايميل</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" required id="inputPassword" name="email" value="{{$data->email}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">رقم الهاتف</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required id="inputPassword" name="phone" value="{{$data->phone}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">رابط فيسبوك</label>
                                    <div class="col-sm-10">
                                        <input type="url" name="facebook_link" required class="form-control" id="inputPassword" value="{{$data->facebook_link}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">رابط تويتر</label>
                                    <div class="col-sm-10">
                                        <input type="url" name="twiter_link" required class="form-control" id="inputPassword" value="{{$data->twiter_link}}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">رابط يوتيوب</label>
                                    <div class="col-sm-10">
                                        <input type="url" name="youtube_link" required class="form-control" id="inputPassword" value="{{$data->youtube_link}}">
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
    </script>



@endsection
